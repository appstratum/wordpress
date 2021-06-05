
var el = wp.element.createElement;
var registerBlockType = wp.blocks.registerBlockType;
var SelectControl = wp.components.SelectControl;
var InspectorControls = wp.editor.InspectorControls;
var useSelect = wp.data.useSelect;
var useEntityProp = wp.coreData.useEntityProp;

var blockStyle = { border: "2px solid #1ab394", padding: "20px" };
var surveysArray = this.surveys;
var surveys = {};

for (var i = 0; i < surveysArray.length; i++) {
  var survey = surveysArray[i];
  surveys[survey.id] = {
    name: survey.name,
    json: survey.json
  };
}

registerBlockType("sjs/gutenberg-block", {
  title: "SurveyJS",

  icon: "welcome-write-blog",

  category: "common",

  edit: function(props) {
    var attributes = props.attributes;
    var setAttributes = props.setAttributes;
    var options = [
      {
        label: "choose the survey...",
        value: "none"
      }
    ];

    var postType = useSelect( function ( select ) {
      return select( 'core/editor' ).getCurrentPostType();
    }, [] );    

    const [ meta, setMeta ] = useEntityProp( 'postType', postType, 'meta' );

    function updateMetaValue( surveyId ) {
        let surveyDef = surveys[surveyId].json;
        surveyDef = surveyDef.replaceAll('\\"', "'");
        setMeta( { ...meta, surveyDef } );
    }    

    surveysArray.forEach(function(survey) {
      options.push({
        label: survey.name,
        value: survey.id
      });
    });

    var inspectorControl = el(
      InspectorControls,
      {},
      el("h4", {}, "Embedding a Survey inside your post"),
      el("hr"),
      el(SelectControl, {
        label: "Choose survey to insert",
        defaultValue: "none",
        value: attributes.surveyid,
        options: options,
        onChange: function(value) {
          setAttributes({ surveyid: value });        
          updateMetaValue(surveyid);      
        }
      })
    );

    var surveyid = attributes.surveyid;
    var shortCodeString =
      surveyid === "none"
        ? "Please choose a survey in the Settings => Block menu"
        : '[Survey id="' +
          surveyid +
          '" name="' +
          surveys[surveyid].name +
          '"] ';

    setAttributes({ shortcode: shortCodeString });

    

    return el(
      "div",
      { style: blockStyle },
      el("h3", {}, "SurveyJS shortcode: "),
      el("div", {}, shortCodeString),
      inspectorControl
    );
  },

  save: function() {
    return null; // This block is rendered on PHP side.
  }
});
