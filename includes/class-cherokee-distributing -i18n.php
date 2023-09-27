<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://gpeterson@moxcar.com
 * @since      1.0.0
 *
 * @package    Cherokee_Distributing
 * @subpackage Cherokee_Distributing/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cherokee_Distributing
 * @subpackage Cherokee_Distributing/includes
 * @author     Gino Peterson <gpeterson@moxcar.com>
 */
class Cherokee_Distributing_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cherokee-distributing ',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
