<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       twoimpulse.com
 * @since      1.0.0
 *
 * @package    Rarify_Content_Types
 * @subpackage Rarify_Content_Types/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Rarify_Content_Types
 * @subpackage Rarify_Content_Types/admin
 * @author     TwoImpulse Lda <rhys.bridges@twoimpulse.com>
 */
class Rarify_Content_Types_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rarify_Content_Types_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rarify_Content_Types_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rarify-content-types-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rarify_Content_Types_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rarify_Content_Types_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rarify-content-types-admin.js', array( 'jquery' ), $this->version, false );

	}


	/**
	 * Creates a new custom post type of "E-Consent"
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_post_type()
	 */
	public static function new_cpt_econsent() {

		$cap_type 	= 'post';
		$plural 	= 'E-Consents';
		$single 	= 'E-Consent';
		$cpt_name 	= 'e-consent';

		$opts['can_export']								= TRUE;
		$opts['capability_type']						= $cap_type;
		$opts['description']							= '';
		$opts['exclude_from_search']					= FALSE;
		$opts['has_archive']							= FALSE;
		$opts['hierarchical']							= FALSE;
		$opts['map_meta_cap']							= TRUE;
		$opts['menu_icon']								= 'dashicons-id';
		$opts['menu_position']							= 25;
		$opts['public']									= TRUE;
		$opts['publicly_querable']						= TRUE;
		$opts['query_var']								= TRUE;
		$opts['register_meta_box_cb']					= '';
		$opts['rewrite']								= FALSE;
		$opts['show_in_admin_bar']						= TRUE;
		$opts['show_in_menu']							= TRUE;
		$opts['show_in_nav_menu']						= TRUE;
		$opts['show_ui']								= TRUE;
		$opts['show_in_rest']							= TRUE;
		$opts['rest_base']								= 'e-consent';		
		$opts['supports']								= array( 'title', 'editor', 'thumbnail', 'custom-fields' );
		$opts['taxonomies']								= array( 'category', 'post_tag', 'study' );

		$opts['capabilities']['delete_others_posts']	= "delete_others_{$cap_type}s";
		$opts['capabilities']['delete_post']			= "delete_{$cap_type}";
		$opts['capabilities']['delete_posts']			= "delete_{$cap_type}s";
		$opts['capabilities']['delete_private_posts']	= "delete_private_{$cap_type}s";
		$opts['capabilities']['delete_published_posts']	= "delete_published_{$cap_type}s";
		$opts['capabilities']['edit_others_posts']		= "edit_others_{$cap_type}s";
		$opts['capabilities']['edit_post']				= "edit_{$cap_type}";
		$opts['capabilities']['edit_posts']				= "edit_{$cap_type}s";
		$opts['capabilities']['edit_private_posts']		= "edit_private_{$cap_type}s";
		$opts['capabilities']['edit_published_posts']	= "edit_published_{$cap_type}s";
		$opts['capabilities']['publish_posts']			= "publish_{$cap_type}s";
		$opts['capabilities']['read_post']				= "read_{$cap_type}";
		$opts['capabilities']['read_private_posts']		= "read_private_{$cap_type}s";

		$opts['labels']['add_new']						= esc_html__( "Add New {$single}", 'rarify-content-types' );
		$opts['labels']['add_new_item']					= esc_html__( "Add New {$single}", 'rarify-content-types' );
		$opts['labels']['all_items']					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['edit_item']					= esc_html__( "Edit {$single}" , 'rarify-content-types' );
		$opts['labels']['menu_name']					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['name']							= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['name_admin_bar']				= esc_html__( $single, 'rarify-content-types' );
		$opts['labels']['new_item']						= esc_html__( "New {$single}", 'rarify-content-types' );
		$opts['labels']['not_found']					= esc_html__( "No {$plural} Found", 'rarify-content-types' );
		$opts['labels']['not_found_in_trash']			= esc_html__( "No {$plural} Found in Trash", 'rarify-content-types' );
		$opts['labels']['parent_item_colon']			= esc_html__( "Parent {$plural} :", 'rarify-content-types' );
		$opts['labels']['search_items']					= esc_html__( "Search {$plural}", 'rarify-content-types' );
		$opts['labels']['singular_name']				= esc_html__( $single, 'rarify-content-types' );
		$opts['labels']['view_item']					= esc_html__( "View {$single}", 'rarify-content-types' );

		$opts['rewrite']['ep_mask']						= EP_PERMALINK;
		$opts['rewrite']['feeds']						= FALSE;
		$opts['rewrite']['pages']						= TRUE;
		$opts['rewrite']['slug']						= esc_html__( strtolower( $plural ), 'rarify-content-types' );
		$opts['rewrite']['with_front']					= FALSE;

		$opts = apply_filters( 'rarify-content-types-cpt-options', $opts );

		register_post_type( strtolower( $cpt_name ), $opts );


	} // new_cpt_econsent()		

	/**
	 * Creates a new custom post type of "Clinical Survey"
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_post_type()
	 */
	public static function new_cpt_clinical_survey() {

		$cap_type 	= 'post';
		$plural 	= 'Clinical Surveys';
		$single 	= 'Clinical Survey';
		$cpt_name 	= 'clinical-survey';

		$opts['can_export']								= TRUE;
		$opts['capability_type']						= $cap_type;
		$opts['description']							= '';
		$opts['exclude_from_search']					= FALSE;
		$opts['has_archive']							= FALSE;
		$opts['hierarchical']							= FALSE;
		$opts['map_meta_cap']							= TRUE;
		$opts['menu_icon']								= 'dashicons-database';
		$opts['menu_position']							= 26;
		$opts['public']									= TRUE;
		$opts['publicly_querable']						= TRUE;
		$opts['query_var']								= TRUE;
		$opts['register_meta_box_cb']					= '';
		$opts['rewrite']								= FALSE;
		$opts['show_in_admin_bar']						= TRUE;
		$opts['show_in_menu']							= TRUE;
		$opts['show_in_nav_menu']						= TRUE;
		$opts['show_ui']								= TRUE;
		$opts['show_in_rest']							= TRUE;
		$opts['rest_base']								= 'clinical-survey';		
		$opts['supports']								= array( 'title', 'editor', 'thumbnail', 'custom-fields' );
		$opts['taxonomies']								= array( 'category', 'post_tag', 'study' );

		$opts['capabilities']['delete_others_posts']	= "delete_others_{$cap_type}s";
		$opts['capabilities']['delete_post']			= "delete_{$cap_type}";
		$opts['capabilities']['delete_posts']			= "delete_{$cap_type}s";
		$opts['capabilities']['delete_private_posts']	= "delete_private_{$cap_type}s";
		$opts['capabilities']['delete_published_posts']	= "delete_published_{$cap_type}s";
		$opts['capabilities']['edit_others_posts']		= "edit_others_{$cap_type}s";
		$opts['capabilities']['edit_post']				= "edit_{$cap_type}";
		$opts['capabilities']['edit_posts']				= "edit_{$cap_type}s";
		$opts['capabilities']['edit_private_posts']		= "edit_private_{$cap_type}s";
		$opts['capabilities']['edit_published_posts']	= "edit_published_{$cap_type}s";
		$opts['capabilities']['publish_posts']			= "publish_{$cap_type}s";
		$opts['capabilities']['read_post']				= "read_{$cap_type}";
		$opts['capabilities']['read_private_posts']		= "read_private_{$cap_type}s";

		$opts['labels']['add_new']						= esc_html__( "Add New {$single}", 'rarify-content-types' );
		$opts['labels']['add_new_item']					= esc_html__( "Add New {$single}", 'rarify-content-types' );
		$opts['labels']['all_items']					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['edit_item']					= esc_html__( "Edit {$single}" , 'rarify-content-types' );
		$opts['labels']['menu_name']					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['name']							= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['name_admin_bar']				= esc_html__( $single, 'rarify-content-types' );
		$opts['labels']['new_item']						= esc_html__( "New {$single}", 'rarify-content-types' );
		$opts['labels']['not_found']					= esc_html__( "No {$plural} Found", 'rarify-content-types' );
		$opts['labels']['not_found_in_trash']			= esc_html__( "No {$plural} Found in Trash", 'rarify-content-types' );
		$opts['labels']['parent_item_colon']			= esc_html__( "Parent {$plural} :", 'rarify-content-types' );
		$opts['labels']['search_items']					= esc_html__( "Search {$plural}", 'rarify-content-types' );
		$opts['labels']['singular_name']				= esc_html__( $single, 'rarify-content-types' );
		$opts['labels']['view_item']					= esc_html__( "View {$single}", 'rarify-content-types' );

		$opts['rewrite']['ep_mask']						= EP_PERMALINK;
		$opts['rewrite']['feeds']						= FALSE;
		$opts['rewrite']['pages']						= TRUE;
		$opts['rewrite']['slug']						= esc_html__( strtolower( $plural ), 'rarify-content-types' );
		$opts['rewrite']['with_front']					= FALSE;

		$opts = apply_filters( 'rarify-content-types-cpt-options', $opts );

		register_post_type( strtolower( $cpt_name ), $opts );


	} // new_cpt_clincical_survey()


	/**
	 * Creates a new custom post type of "PII Survey"
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_post_type()
	 */
	public static function new_cpt_pii_survey() {

		$cap_type 	= 'post';
		$plural 	= 'PII Surveys';
		$single 	= 'PII Survey';
		$cpt_name 	= 'pii-survey';

		$opts['can_export']								= TRUE;
		$opts['capability_type']						= $cap_type;
		$opts['description']							= '';
		$opts['exclude_from_search']					= FALSE;
		$opts['has_archive']							= FALSE;
		$opts['hierarchical']							= FALSE;
		$opts['map_meta_cap']							= TRUE;
		$opts['menu_icon']								= 'dashicons-vault';
		$opts['menu_position']							= 27;
		$opts['public']									= TRUE;
		$opts['publicly_querable']						= TRUE;
		$opts['query_var']								= TRUE;
		$opts['register_meta_box_cb']					= '';
		$opts['rewrite']								= FALSE;
		$opts['show_in_admin_bar']						= TRUE;
		$opts['show_in_menu']							= TRUE;
		$opts['show_in_nav_menu']						= TRUE;
		$opts['show_ui']								= TRUE;
		$opts['show_in_rest']							= TRUE;
		$opts['rest_base']								= 'pii-survey';		
		$opts['supports']								= array( 'title', 'editor', 'thumbnail', 'custom-fields' );
		$opts['taxonomies']								= array( 'category', 'post_tag', 'study' );

		$opts['capabilities']['delete_others_posts']	= "delete_others_{$cap_type}s";
		$opts['capabilities']['delete_post']			= "delete_{$cap_type}";
		$opts['capabilities']['delete_posts']			= "delete_{$cap_type}s";
		$opts['capabilities']['delete_private_posts']	= "delete_private_{$cap_type}s";
		$opts['capabilities']['delete_published_posts']	= "delete_published_{$cap_type}s";
		$opts['capabilities']['edit_others_posts']		= "edit_others_{$cap_type}s";
		$opts['capabilities']['edit_post']				= "edit_{$cap_type}";
		$opts['capabilities']['edit_posts']				= "edit_{$cap_type}s";
		$opts['capabilities']['edit_private_posts']		= "edit_private_{$cap_type}s";
		$opts['capabilities']['edit_published_posts']	= "edit_published_{$cap_type}s";
		$opts['capabilities']['publish_posts']			= "publish_{$cap_type}s";
		$opts['capabilities']['read_post']				= "read_{$cap_type}";
		$opts['capabilities']['read_private_posts']		= "read_private_{$cap_type}s";

		$opts['labels']['add_new']						= esc_html__( "Add New {$single}", 'rarify-content-types' );
		$opts['labels']['add_new_item']					= esc_html__( "Add New {$single}", 'rarify-content-types' );
		$opts['labels']['all_items']					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['edit_item']					= esc_html__( "Edit {$single}" , 'rarify-content-types' );
		$opts['labels']['menu_name']					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['name']							= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['name_admin_bar']				= esc_html__( $single, 'rarify-content-types' );
		$opts['labels']['new_item']						= esc_html__( "New {$single}", 'rarify-content-types' );
		$opts['labels']['not_found']					= esc_html__( "No {$plural} Found", 'rarify-content-types' );
		$opts['labels']['not_found_in_trash']			= esc_html__( "No {$plural} Found in Trash", 'rarify-content-types' );
		$opts['labels']['parent_item_colon']			= esc_html__( "Parent {$plural} :", 'rarify-content-types' );
		$opts['labels']['search_items']					= esc_html__( "Search {$plural}", 'rarify-content-types' );
		$opts['labels']['singular_name']				= esc_html__( $single, 'rarify-content-types' );
		$opts['labels']['view_item']					= esc_html__( "View {$single}", 'rarify-content-types' );

		$opts['rewrite']['ep_mask']						= EP_PERMALINK;
		$opts['rewrite']['feeds']						= FALSE;
		$opts['rewrite']['pages']						= TRUE;
		$opts['rewrite']['slug']						= esc_html__( strtolower( $plural ), 'rarify-content-types' );
		$opts['rewrite']['with_front']					= FALSE;

		$opts = apply_filters( 'rarify-content-types-cpt-options', $opts );

		register_post_type( strtolower( $cpt_name ), $opts );


	} // new_cpt_pii_survey()	

	/**
	 * Creates a new custom post type of "Survey rule"
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_post_type()
	 */
	public static function new_cpt_survey_rule() {

		$cap_type 	= 'post';
		$plural 	= 'Survey Rules';
		$single 	= 'Survey Rule';
		$cpt_name 	= 'survey-rule';

		$opts['can_export']								= TRUE;
		$opts['capability_type']						= $cap_type;
		$opts['description']							= '';
		$opts['exclude_from_search']					= FALSE;
		$opts['has_archive']							= FALSE;
		$opts['hierarchical']							= FALSE;
		$opts['map_meta_cap']							= TRUE;
		$opts['menu_icon']								= 'dashicons-clock';
		$opts['menu_position']							= 28;
		$opts['public']									= TRUE;
		$opts['publicly_querable']						= TRUE;
		$opts['query_var']								= TRUE;
		$opts['register_meta_box_cb']					= '';
		$opts['rewrite']								= FALSE;
		$opts['show_in_admin_bar']						= TRUE;
		$opts['show_in_menu']							= TRUE;
		$opts['show_in_nav_menu']						= TRUE;
		$opts['show_ui']								= TRUE;
		$opts['show_in_rest']							= TRUE;
		$opts['rest_base']								= 'survey-rule';		
		$opts['supports']								= array( 'title', 'editor', 'thumbnail', 'custom-fields' );
		$opts['taxonomies']								= array( 'category', 'post_tag', 'study');

		$opts['capabilities']['delete_others_posts']	= "delete_others_{$cap_type}s";
		$opts['capabilities']['delete_post']			= "delete_{$cap_type}";
		$opts['capabilities']['delete_posts']			= "delete_{$cap_type}s";
		$opts['capabilities']['delete_private_posts']	= "delete_private_{$cap_type}s";
		$opts['capabilities']['delete_published_posts']	= "delete_published_{$cap_type}s";
		$opts['capabilities']['edit_others_posts']		= "edit_others_{$cap_type}s";
		$opts['capabilities']['edit_post']				= "edit_{$cap_type}";
		$opts['capabilities']['edit_posts']				= "edit_{$cap_type}s";
		$opts['capabilities']['edit_private_posts']		= "edit_private_{$cap_type}s";
		$opts['capabilities']['edit_published_posts']	= "edit_published_{$cap_type}s";
		$opts['capabilities']['publish_posts']			= "publish_{$cap_type}s";
		$opts['capabilities']['read_post']				= "read_{$cap_type}";
		$opts['capabilities']['read_private_posts']		= "read_private_{$cap_type}s";

		$opts['labels']['add_new']						= esc_html__( "Add New {$single}", 'rarify-content-types' );
		$opts['labels']['add_new_item']					= esc_html__( "Add New {$single}", 'rarify-content-types' );
		$opts['labels']['all_items']					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['edit_item']					= esc_html__( "Edit {$single}" , 'rarify-content-types' );
		$opts['labels']['menu_name']					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['name']							= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['name_admin_bar']				= esc_html__( $single, 'rarify-content-types' );
		$opts['labels']['new_item']						= esc_html__( "New {$single}", 'rarify-content-types' );
		$opts['labels']['not_found']					= esc_html__( "No {$plural} Found", 'rarify-content-types' );
		$opts['labels']['not_found_in_trash']			= esc_html__( "No {$plural} Found in Trash", 'rarify-content-types' );
		$opts['labels']['parent_item_colon']			= esc_html__( "Parent {$plural} :", 'rarify-content-types' );
		$opts['labels']['search_items']					= esc_html__( "Search {$plural}", 'rarify-content-types' );
		$opts['labels']['singular_name']				= esc_html__( $single, 'rarify-content-types' );
		$opts['labels']['view_item']					= esc_html__( "View {$single}", 'rarify-content-types' );

		$opts['rewrite']['ep_mask']						= EP_PERMALINK;
		$opts['rewrite']['feeds']						= FALSE;
		$opts['rewrite']['pages']						= TRUE;
		$opts['rewrite']['slug']						= esc_html__( strtolower( $plural ), 'rarify-content-types' );
		$opts['rewrite']['with_front']					= FALSE;

		$opts = apply_filters( 'rarify-content-types-cpt-options', $opts );

		register_post_type( strtolower( $cpt_name ), $opts );

	} // new_cpt_survey_rule()		

		/**
	 * Creates a new custom post type of "Traffic Order"
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_post_type()
	 */
	public static function new_cpt_traffic_order() {

		$cap_type 	= 'post';
		$plural 	= 'Traffic Orders';
		$single 	= 'Traffic Order';
		$cpt_name 	= 'traffic-order';

		$opts['can_export']								= TRUE;
		$opts['capability_type']						= $cap_type;
		$opts['description']							= '';
		$opts['exclude_from_search']					= FALSE;
		$opts['has_archive']							= FALSE;
		$opts['hierarchical']							= FALSE;
		$opts['map_meta_cap']							= TRUE;
		$opts['menu_icon']								= 'dashicons-portfolio';
		$opts['menu_position']							= 29;
		$opts['public']									= TRUE;
		$opts['publicly_querable']						= TRUE;
		$opts['query_var']								= TRUE;
		$opts['register_meta_box_cb']					= '';
		$opts['rewrite']								= FALSE;
		$opts['show_in_admin_bar']						= TRUE;
		$opts['show_in_menu']							= TRUE;
		$opts['show_in_nav_menu']						= TRUE;
		$opts['show_ui']								= TRUE;
		$opts['show_in_rest']							= TRUE;
		$opts['rest_base']								= 'traffic-order';		
		$opts['supports']								= array( 'title', 'editor', 'thumbnail', 'custom-fields' );
		$opts['taxonomies']								= array( 'category', 'post_tag', 'study' );

		$opts['capabilities']['delete_others_posts']	= "delete_others_{$cap_type}s";
		$opts['capabilities']['delete_post']			= "delete_{$cap_type}";
		$opts['capabilities']['delete_posts']			= "delete_{$cap_type}s";
		$opts['capabilities']['delete_private_posts']	= "delete_private_{$cap_type}s";
		$opts['capabilities']['delete_published_posts']	= "delete_published_{$cap_type}s";
		$opts['capabilities']['edit_others_posts']		= "edit_others_{$cap_type}s";
		$opts['capabilities']['edit_post']				= "edit_{$cap_type}";
		$opts['capabilities']['edit_posts']				= "edit_{$cap_type}s";
		$opts['capabilities']['edit_private_posts']		= "edit_private_{$cap_type}s";
		$opts['capabilities']['edit_published_posts']	= "edit_published_{$cap_type}s";
		$opts['capabilities']['publish_posts']			= "publish_{$cap_type}s";
		$opts['capabilities']['read_post']				= "read_{$cap_type}";
		$opts['capabilities']['read_private_posts']		= "read_private_{$cap_type}s";

		$opts['labels']['add_new']						= esc_html__( "Add New {$single}", 'rarify-content-types' );
		$opts['labels']['add_new_item']					= esc_html__( "Add New {$single}", 'rarify-content-types' );
		$opts['labels']['all_items']					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['edit_item']					= esc_html__( "Edit {$single}" , 'rarify-content-types' );
		$opts['labels']['menu_name']					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['name']							= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['name_admin_bar']				= esc_html__( $single, 'rarify-content-types' );
		$opts['labels']['new_item']						= esc_html__( "New {$single}", 'rarify-content-types' );
		$opts['labels']['not_found']					= esc_html__( "No {$plural} Found", 'rarify-content-types' );
		$opts['labels']['not_found_in_trash']			= esc_html__( "No {$plural} Found in Trash", 'rarify-content-types' );
		$opts['labels']['parent_item_colon']			= esc_html__( "Parent {$plural} :", 'rarify-content-types' );
		$opts['labels']['search_items']					= esc_html__( "Search {$plural}", 'rarify-content-types' );
		$opts['labels']['singular_name']				= esc_html__( $single, 'rarify-content-types' );
		$opts['labels']['view_item']					= esc_html__( "View {$single}", 'rarify-content-types' );

		$opts['rewrite']['ep_mask']						= EP_PERMALINK;
		$opts['rewrite']['feeds']						= FALSE;
		$opts['rewrite']['pages']						= TRUE;
		$opts['rewrite']['slug']						= esc_html__( strtolower( $plural ), 'rarify-content-types' );
		$opts['rewrite']['with_front']					= FALSE;

		$opts = apply_filters( 'rarify-content-types-cpt-options', $opts );

		register_post_type( strtolower( $cpt_name ), $opts );


	} // new_cpt_traffic_order()	





	/**
	 * Creates a new taxonomy for a custom post type
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_taxonomy()
	 */
	public static function new_taxonomy_studies() {

		$plural 	= 'Studies';
		$single 	= 'Study';
		$tax_name 	= 'study';

		$opts['hierarchical']							= TRUE;
		//$opts['meta_box_cb'] 							= '';
		$opts['public']									= TRUE;
		$opts['query_var']								= $tax_name;
		$opts['show_admin_column'] 						= FALSE;
		$opts['show_in_nav_menus']						= TRUE;
		$opts['show_tag_cloud'] 						= TRUE;
		$opts['show_ui']								= TRUE;
		$opts['show_in_rest']							= TRUE;
		$opts['sort'] 									= '';
		//$opts['update_count_callback'] 					= '';

		$opts['capabilities']['assign_terms'] 			= 'edit_posts';
		$opts['capabilities']['delete_terms'] 			= 'manage_categories';
		$opts['capabilities']['edit_terms'] 			= 'manage_categories';
		$opts['capabilities']['manage_terms'] 			= 'manage_categories';

		$opts['labels']['add_new_item'] 				= esc_html__( "Add New {$single}", 'rarify-content-types' );
		$opts['labels']['add_or_remove_items'] 			= esc_html__( "Add or remove {$plural}", 'rarify-content-types' );
		$opts['labels']['all_items'] 					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['choose_from_most_used'] 		= esc_html__( "Choose from most used {$plural}", 'rarify-content-types' );
		$opts['labels']['edit_item'] 					= esc_html__( "Edit {$single}" , 'rarify-content-types');
		$opts['labels']['menu_name'] 					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['name'] 						= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['new_item_name'] 				= esc_html__( "New {$single} Name", 'rarify-content-types' );
		$opts['labels']['not_found'] 					= esc_html__( "No {$plural} Found", 'rarify-content-types' );
		$opts['labels']['parent_item'] 					= esc_html__( "Parent {$single}", 'rarify-content-types' );
		$opts['labels']['parent_item_colon'] 			= esc_html__( "Parent {$single}:", 'rarify-content-types' );
		$opts['labels']['popular_items'] 				= esc_html__( "Popular {$plural}", 'rarify-content-types' );
		$opts['labels']['search_items'] 				= esc_html__( "Search {$plural}", 'rarify-content-types' );
		$opts['labels']['separate_items_with_commas'] 	= esc_html__( "Separate {$plural} with commas", 'rarify-content-types' );
		$opts['labels']['singular_name'] 				= esc_html__( $single, 'rarify-content-types' );
		$opts['labels']['update_item'] 					= esc_html__( "Update {$single}", 'rarify-content-types' );
		$opts['labels']['view_item'] 					= esc_html__( "View {$single}", 'rarify-content-types' );

		$opts['rewrite']['ep_mask']						= EP_NONE;
		$opts['rewrite']['hierarchical']				= FALSE;
		$opts['rewrite']['slug']						= esc_html__( strtolower( $tax_name ), 'rarify-content-types' );
		$opts['rewrite']['with_front']					= FALSE;

		$opts = apply_filters( 'rarify-content-types-taxonomy-options', $opts );

		register_taxonomy( $tax_name, array('e-consent', 'clinical-survey', 'pii-survey', 'traffic-order'), $opts );

	} // new_taxonomy_studies()


	/**
	 * Creates a new taxonomy for a custom post type
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_taxonomy()
	 */
	public static function new_taxonomy_econsent_type() {

		$plural 	= 'E-Consent Types';
		$single 	= 'E-Consent Type';
		$tax_name 	= 'e-consent-type';

		$opts['hierarchical']							= TRUE;
		//$opts['meta_box_cb'] 							= '';
		$opts['public']									= TRUE;
		$opts['query_var']								= $tax_name;
		$opts['show_admin_column'] 						= FALSE;
		$opts['show_in_nav_menus']						= TRUE;
		$opts['show_tag_cloud'] 						= TRUE;
		$opts['show_ui']								= TRUE;
		$opts['show_in_rest']							= TRUE;
		$opts['sort'] 									= '';
		//$opts['update_count_callback'] 					= '';

		$opts['capabilities']['assign_terms'] 			= 'edit_posts';
		$opts['capabilities']['delete_terms'] 			= 'manage_categories';
		$opts['capabilities']['edit_terms'] 			= 'manage_categories';
		$opts['capabilities']['manage_terms'] 			= 'manage_categories';

		$opts['labels']['add_new_item'] 				= esc_html__( "Add New {$single}", 'rarify-content-types' );
		$opts['labels']['add_or_remove_items'] 			= esc_html__( "Add or remove {$plural}", 'rarify-content-types' );
		$opts['labels']['all_items'] 					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['choose_from_most_used'] 		= esc_html__( "Choose from most used {$plural}", 'rarify-content-types' );
		$opts['labels']['edit_item'] 					= esc_html__( "Edit {$single}" , 'rarify-content-types');
		$opts['labels']['menu_name'] 					= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['name'] 						= esc_html__( $plural, 'rarify-content-types' );
		$opts['labels']['new_item_name'] 				= esc_html__( "New {$single} Name", 'rarify-content-types' );
		$opts['labels']['not_found'] 					= esc_html__( "No {$plural} Found", 'rarify-content-types' );
		$opts['labels']['parent_item'] 					= esc_html__( "Parent {$single}", 'rarify-content-types' );
		$opts['labels']['parent_item_colon'] 			= esc_html__( "Parent {$single}:", 'rarify-content-types' );
		$opts['labels']['popular_items'] 				= esc_html__( "Popular {$plural}", 'rarify-content-types' );
		$opts['labels']['search_items'] 				= esc_html__( "Search {$plural}", 'rarify-content-types' );
		$opts['labels']['separate_items_with_commas'] 	= esc_html__( "Separate {$plural} with commas", 'rarify-content-types' );
		$opts['labels']['singular_name'] 				= esc_html__( $single, 'rarify-content-types' );
		$opts['labels']['update_item'] 					= esc_html__( "Update {$single}", 'rarify-content-types' );
		$opts['labels']['view_item'] 					= esc_html__( "View {$single}", 'rarify-content-types' );

		$opts['rewrite']['ep_mask']						= EP_NONE;
		$opts['rewrite']['hierarchical']				= FALSE;
		$opts['rewrite']['slug']						= esc_html__( strtolower( $tax_name ), 'rarify-content-types' );
		$opts['rewrite']['with_front']					= FALSE;

		$opts = apply_filters( 'rarify-content-types-taxonomy-options', $opts );

		register_taxonomy( $tax_name, 'e-consent', $opts );

	} // new_taxonomy_econsent_type()	


	/**
	 * Registers metaboxes for custom post types
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	add_metabox()
	 */	
	public static function register_metaboxes() {
		add_meta_box( 'rsp-1', __( 'Rarify Survey Properties', 'rsp' ), 'Rarify_Content_Types_Admin::survey_display_callback', array('e-consent', 'clinical-survey', 'pii-survey') );	
		add_meta_box( 'rtop-1', __( 'Rarify Traffic Order Properties', 'rtop' ), 'Rarify_Content_Types_Admin::traffic_order_display_callback', array('traffic-order') );	
		add_meta_box( 'rsrp-1', __( 'Rarify Survey Rule Properties', 'rsrp' ), 'Rarify_Content_Types_Admin::survey_rule_display_callback', array('survey-rule') );	
	} // register_metaboxes()	



	/**
	 * Survey meta box display callback.
	 *
	 * @param WP_Post $post Current post object.
	 */
	public static function survey_display_callback( $post ) {
		include plugin_dir_path( __FILE__ ) . 'partials/custom-survey-metaboxes.php';		
	}

	/**
	 * Traffic Order meta box display callback.
	 *
	 * @param WP_Post $post Current post object.
	 */
	public static function traffic_order_display_callback( $post ) {
		global $wpdb;
		
		include plugin_dir_path( __FILE__ ) . 'partials/custom-traffic-order-metaboxes.php';		
	}

	/**
	 * Survey Rule meta box display callback.
	 *
	 * @param WP_Post $post Current post object.
	 */
	public static function survey_rule_display_callback( $post ) {
		include plugin_dir_path( __FILE__ ) . 'partials/custom-survey-rule-metaboxes.php';		
	}


	/**
	 * Save meta box content for surveys.
	 *
	 * @param int $post_id Post ID
	 */
	public static function survey_save_metabox( $post_id ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( $parent_id = wp_is_post_revision( $post_id ) ) {
			$post_id = $parent_id;
		}
		$fields = [
			'surveyID',
			'surveyVersionNumber',
			'surveyGroup',
			'country',
			'language',
			'device',
			// 'resultsVisible',
			'surveyTheme',
			'timeToComplete'
		];
		foreach ( $fields as $field ) {
			if ( array_key_exists( $field, $_POST ) ) {
				update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
			}
		}

		
		update_post_meta( $post_id, 'resultsVisible', isset( $_POST['resultsVisible'] ) );			
	}


	/**
	 * Save meta box content for traffic orders.
	 *
	 * @param int $post_id Post ID
	 */
	public static function traffic_order_save_metabox( $post_id ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( $parent_id = wp_is_post_revision( $post_id ) ) {
			$post_id = $parent_id;
		}
		$fields = [
			'priority',
			'startDate',
			'endDate',
			'startDateRule',
			'endDateRule'
		];
		foreach ( $fields as $field ) {
			if ( array_key_exists( $field, $_POST ) ) {
				update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
			}
		}
	}


	/**
	 * Save meta box content for survey rules.
	 *
	 * @param int $post_id Post ID
	 */
	public static function survey_rule_save_metabox( $post_id ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( $parent_id = wp_is_post_revision( $post_id ) ) {
			$post_id = $parent_id;
		}
		$fields = [
			'ruleExpression'
		];
		foreach ( $fields as $field ) {
			if ( array_key_exists( $field, $_POST ) ) {
				update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
			}
		}
	}	



	public static function register_custom_fields() {

		// Surveys

		register_rest_field(array('e-consent', 'clinical-survey', 'pii-survey'), 'surveyID', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_value_for'));
		register_rest_field(array('e-consent', 'clinical-survey', 'pii-survey'), 'surveyVersionNumber', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_value_for'));
		register_rest_field(array('e-consent', 'clinical-survey', 'pii-survey'), 'surveyGroup', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_value_for'));
		register_rest_field(array('e-consent', 'clinical-survey', 'pii-survey'), 'country', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_value_for'));
		register_rest_field(array('e-consent', 'clinical-survey', 'pii-survey'), 'language', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_value_for'));
		register_rest_field(array('e-consent', 'clinical-survey', 'pii-survey'), 'device', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_value_for'));
		register_rest_field(array('e-consent', 'clinical-survey', 'pii-survey'), 'resultsVisible', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_boolean_value_for'));
		register_rest_field(array('e-consent', 'clinical-survey', 'pii-survey'), 'surveyTheme', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_value_for'));
		register_rest_field(array('e-consent', 'clinical-survey', 'pii-survey'), 'timeToComplete', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_integer_value_for'));

		
		register_post_meta('e-consent', 'surveyDef', array('show_in_rest' => TRUE, 'single' => TRUE, 'type' => 'string'));
		register_post_meta('clinical-survey', 'surveyDef', array('show_in_rest' => TRUE, 'single' => TRUE, 'type' => 'string'));
		register_post_meta('pii-survey', 'surveyDef', array('show_in_rest' => TRUE, 'single' => TRUE, 'type' => 'string'));


		// Traffic Orders
		
		register_rest_field(array('traffic-order'), 'priority', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_integer_value_for'));
		register_rest_field(array('traffic-order'), 'startDate', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_value_for'));
		register_rest_field(array('traffic-order'), 'endDate', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_value_for'));
		register_rest_field(array('traffic-order'), 'startDateRule', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_value_for'));
		register_rest_field(array('traffic-order'), 'endDateRule', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_value_for'));


		// Survey Rule
		
		register_rest_field(array('survey-rule'), 'ruleExpression', array('get_callback' => 'Rarify_Content_Types_Admin::get_metadata_value_for'));
	}


	public static function get_metadata_value_for($object, $field_name, $request) {
		return get_post_meta( $object['id'], $field_name, true );
	}

	public static function get_metadata_boolean_value_for($object, $field_name, $request) {
		return rest_sanitize_boolean( get_post_meta( $object['id'], $field_name, true ) );
	}

	public static function get_metadata_integer_value_for($object, $field_name, $request) {
		return (int) get_post_meta( $object['id'], $field_name, true );
	}

	// public static function get_survey_definition_for($object, $field_name, $request) {		
	// 	return "{'content': 'Dummy survey definition'}";
	// }	

}
