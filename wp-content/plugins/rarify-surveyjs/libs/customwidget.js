import * as noUiSlider from "./nouislider.js";
// var noUiSlider = require('./nouislider.js')
// import "./customwidget.css";
console.log("Running customwidget script. noUiSlider is: ", noUiSlider);

// init(Survey);

// export function init(Survey) {
  console.log("healthSliderWidget is initializing");

  var healthSliderWidget = {
    //the widget name. It should be unique and written in lowcase.
    name: "healthslider",
    //the widget title. It is how it will appear on the toolbox of the SurveyJS Editor/Builder
    title: "Health Slider",
    //the name of the icon on the toolbox. We will leave it empty to use the standard one
    iconName: "",
    //If the widgets depends on third-party library(s) then here you may check if this library(s) is loaded
    widgetIsLoaded: function () {
      //return typeof $ == "function" && !!$.fn.select2; //return true if jQuery and select2 widget are loaded on the page

      console.log("healthSliderWidget is loaded");
      return true; //we do not require anything so we just return true.
    },
    //SurveyJS library calls this function for every question to check, if it should use this widget instead of default rendering/behavior
    isFit: function (question) {
      //we return true if the type of question is healthslider
      return question.getType() === "healthslider";
      //the following code will activate the widget for a text question with inputType equals to date
      //return question.getType() === 'text' && question.inputType === "date";
    },
    //Use this function to create a new class or add new properties or remove unneeded properties from your widget
    //activatedBy tells how your widget has been activated by: property, type or customType
    //property - it means that it will activated if a property of the existing question type is set to particular value, for example inputType = "date"
    //type - you are changing the behaviour of entire question type. For example render radiogroup question differently, have a fancy radio buttons
    //customType - you are creating a new type, like in our example "healthslider"
    activatedByChanged: function (activatedBy) {
      //we do not need to check acticatedBy parameter, since we will use our widget for customType only
      //We are creating a new class and derived it from text question type. It means that text model (properties and fuctions) will be available to us
      Survey.JsonObject.metaData.addClass("healthslider", [], null, "text");
      //signaturepad is derived from "empty" class - basic question class
      //Survey.JsonObject.metaData.addClass("signaturepad", [], null, "empty");

      //Add new property(s)
      //For more information go to https://surveyjs.io/Examples/Builder/?id=addproperties#content-docs
      Survey.JsonObject.metaData.addProperties("healthslider", [
        { name: "buttonText", default: "Click Me" },
      ]);
    },
    //If you want to use the default question rendering then set this property to true. We do not need any default rendering, we will use our our htmlTemplate
    isDefaultRender: false,
    //You should use it if your set the isDefaultRender to false
    htmlTemplate:
      "<div id='healthScaleWrapper'>" +
      "  <div>" +
      '    <ul class="vas-information">' +
      "      <li>We would like to know how good or bad your health is TODAY.</li>" +
      "      <li>This scale is numbered from 0 to 100.</li>" +
      "      <li>" +
      '        100 means the <span class="underline">best</span> health you can imagine.<br>' +
      '        0 means the <span class="underline">worst</span> health you can imagine.' +
      "      </li>" +
      '      <li class="visible-lg-inline">' +
      "        Please click on the scale to indicate how your health is TODAY." +
      "      </li>" +
      "    </ul>" +
      '    <div id="healthScaleScore">Your<br/>health<br/>today<br/><span id="hpValue"></span></div>' +
      "  </div>" +
      "  <div id=\"sliderWrapper\"><div id='sliderHeader'>The best health<br/>you can imagine</div><div id='slider'></div><div id='sliderFooter'>The worst health<br/>you can imagine</div></div>" +
      "</div>",
    //The main function, rendering and two-way binding
    afterRender: function (question, el) {
      var sliderEl = el.querySelector("#slider");
      var slider = noUiSlider.create(sliderEl, {
        start: 50,
        connect: true,
        range: {
          min: [0],
          max: [100],
        },
        orientation: "vertical",
        direction: "rtl",
        pips: {
          mode: "positions",
          values: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
          density: 1,
        },
        tooltips: true,
        format: {
          from: function (value) {
            return parseInt(value);
          },
          to: function (value) {
            return parseInt(value);
          },
        },
      });

      if (question.value) {
        document.getElementById("healthScaleScore").style.display = "block";
        document.getElementById("hpValue").innerHTML = question.value;
      }

      slider.on("change", function () {
        let hpV = Number(slider.get());
        question.value = hpV;
        document.getElementById("healthScaleScore").style.display = "block";
        document.getElementById("hpValue").innerHTML = hpV;
      });

      var updateValueHandler = function () {
        slider.set(question.value);
      };
      if (question.isReadOnly) {
        slider.setAttribute("disabled", true);
      }
      updateValueHandler();
      question.noUiSlider = slider;
      question.valueChangedCallback = updateValueHandler;
    },
    //Use it to destroy the widget. It is typically needed by jQuery widgets
    willUnmount: function (question, el) {
      //We do not need to clear anything in our simple example
      //Here is the example to destroy the image picker
      //var $el = $(el).find("select");
      //$el.data('picker').destroy();
      if (!!question.noUiSlider) {
        question.noUiSlider.destroy();
        question.noUiSlider = null;
      }
      question.readOnlyChangedCallback = null;
    },
  };

  //Register our widget in singleton custom widget collection
  Survey.CustomWidgetCollection.Instance.addCustomWidget(healthSliderWidget, "customtype");
  // Survey.CustomWidgetCollection.Instance.add(healthSliderWidget, "customtype");
// }
