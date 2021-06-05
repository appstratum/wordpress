<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       twoimpulse.com
 * @since      1.0.0
 *
 * @package    Rarify_Content_Types
 * @subpackage Rarify_Content_Types/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Rarify_Content_Types
 * @subpackage Rarify_Content_Types/includes
 * @author     TwoImpulse Lda <rhys.bridges@twoimpulse.com>
 */
class Rarify_Content_Types {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Rarify_Content_Types_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'RARIFY_CONTENT_TYPES_VERSION' ) ) {
			$this->version = RARIFY_CONTENT_TYPES_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'rarify-content-types';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Rarify_Content_Types_Loader. Orchestrates the hooks of the plugin.
	 * - Rarify_Content_Types_i18n. Defines internationalization functionality.
	 * - Rarify_Content_Types_Admin. Defines all hooks for the admin area.
	 * - Rarify_Content_Types_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-rarify-content-types-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-rarify-content-types-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-rarify-content-types-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-rarify-content-types-public.php';

		$this->loader = new Rarify_Content_Types_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Rarify_Content_Types_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Rarify_Content_Types_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Rarify_Content_Types_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

		$this->loader->add_action( 'init', $plugin_admin, 'new_cpt_econsent' );
		$this->loader->add_action( 'init', $plugin_admin, 'new_cpt_clinical_survey' );
		$this->loader->add_action( 'init', $plugin_admin, 'new_cpt_pii_survey' );
		$this->loader->add_action( 'init', $plugin_admin, 'new_cpt_survey_rule' );
		$this->loader->add_action( 'init', $plugin_admin, 'new_cpt_traffic_order' );

		$this->loader->add_action( 'init', $plugin_admin, 'new_taxonomy_studies' );		
		$this->loader->add_action( 'init', $plugin_admin, 'new_taxonomy_econsent_type' );		

		$this->loader->add_action( 'add_meta_boxes', $plugin_admin, 'register_metaboxes' );		

		$this->loader->add_action( 'save_post_e-consent', $plugin_admin, 'survey_save_metabox' );		
		$this->loader->add_action( 'save_post_clinical-survey', $plugin_admin, 'survey_save_metabox' );		
		$this->loader->add_action( 'save_post_pii-survey', $plugin_admin, 'survey_save_metabox' );		
		$this->loader->add_action( 'save_post_traffic-order', $plugin_admin, 'traffic_order_save_metabox' );		
		$this->loader->add_action( 'save_post_survey-rule', $plugin_admin, 'survey_rule_save_metabox' );		

		$this->loader->add_action( 'rest_api_init', $plugin_admin, 'register_custom_fields' );		

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Rarify_Content_Types_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Rarify_Content_Types_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
