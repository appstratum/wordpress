<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              twoimpulse.com
 * @since             1.0.1
 * @package           Rarify_Content_Types
 *
 * @wordpress-plugin
 * Plugin Name:       Rarify Content Types
 * Plugin URI:        http://wordpress.org/plugins/rarify-content-types/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.1
 * Author:            TwoImpulse Lda
 * Author URI:        twoimpulse.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rarify-content-types
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'RARIFY_CONTENT_TYPES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rarify-content-types-activator.php
 */
function activate_rarify_content_types() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rarify-content-types-activator.php';
	Rarify_Content_Types_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rarify-content-types-deactivator.php
 */
function deactivate_rarify_content_types() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rarify-content-types-deactivator.php';
	Rarify_Content_Types_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rarify_content_types' );
register_deactivation_hook( __FILE__, 'deactivate_rarify_content_types' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rarify-content-types.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rarify_content_types() {

	$plugin = new Rarify_Content_Types();
	$plugin->run();

}
run_rarify_content_types();
