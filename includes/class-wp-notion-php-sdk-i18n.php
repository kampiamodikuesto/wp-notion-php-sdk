<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wm79.it
 * @since      1.0.0
 *
 * @package    Wp_Notion_Php_Sdk
 * @subpackage Wp_Notion_Php_Sdk/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Notion_Php_Sdk
 * @subpackage Wp_Notion_Php_Sdk/includes
 * @author     WM79 <kampiamodikuesto@gmail.com>
 */
class Wp_Notion_Php_Sdk_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-notion-php-sdk',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
