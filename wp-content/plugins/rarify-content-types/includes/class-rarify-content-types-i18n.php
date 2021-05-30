<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       twoimpulse.com
 * @since      1.0.0
 *
 * @package    Rarify_Content_Types
 * @subpackage Rarify_Content_Types/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Rarify_Content_Types
 * @subpackage Rarify_Content_Types/includes
 * @author     TwoImpulse Lda <rhys.bridges@twoimpulse.com>
 */
class Rarify_Content_Types_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'rarify-content-types',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
