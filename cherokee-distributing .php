<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://gpeterson@moxcar.com
 * @since             1.0.0
 * @package           Cherokee_Distributing
 *
 * @wordpress-plugin
 * Plugin Name:       Cherokee Distributing 
 * Plugin URI:        https://moxcar.com
 * Description:       This is the official plugin for Cherokee Distrbuting
 * Version:           1.0.0
 * Author:            Gino Peterson
 * Author URI:        https://gpeterson@moxcar.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cherokee-distributing 
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
define( 'CHEROKEE_DISTRIBUTING _VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cherokee-distributing -activator.php
 */
function activate_cherokee_distributing () {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cherokee-distributing -activator.php';
	Cherokee_Distributing_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cherokee-distributing -deactivator.php
 */
function deactivate_cherokee_distributing () {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cherokee-distributing -deactivator.php';
	Cherokee_Distributing_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cherokee_distributing ' );
register_deactivation_hook( __FILE__, 'deactivate_cherokee_distributing ' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cherokee-distributing .php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cherokee_distributing () {

	$plugin = new Cherokee_Distributing();
	$plugin->run();

}
run_cherokee_distributing ();
