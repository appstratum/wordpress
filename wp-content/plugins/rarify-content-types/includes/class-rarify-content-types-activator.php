<?php

/**
 * Fired during plugin activation
 *
 * @link       twoimpulse.com
 * @since      1.0.0
 *
 * @package    Rarify_Content_Types
 * @subpackage Rarify_Content_Types/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Rarify_Content_Types
 * @subpackage Rarify_Content_Types/includes
 * @author     TwoImpulse Lda <rhys.bridges@twoimpulse.com>
 */
class Rarify_Content_Types_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-rarify-content-types-admin.php';


		Rarify_Content_Types_Admin::new_cpt_econsent();
		Rarify_Content_Types_Admin::new_cpt_clinical_survey();
		Rarify_Content_Types_Admin::new_cpt_pii_survey();
		Rarify_Content_Types_Admin::new_cpt_traffic_order();
		Rarify_Content_Types_Admin::new_cpt_survey_rule();

		Rarify_Content_Types_Admin::new_taxonomy_studies();
		Rarify_Content_Types_Admin::new_taxonomy_econsent_type();

		Rarify_Content_Types_Admin::register_metaboxes();
		Rarify_Content_Types_Admin::register_custom_fields();

		
		flush_rewrite_rules();	

	}

}


