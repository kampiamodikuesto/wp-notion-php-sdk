<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wm79.it
 * @since             1.0.0
 * @package           Wp_Notion_Php_Sdk
 *
 * @wordpress-plugin
 * Plugin Name:       WP Notion PHP SDK
 * Plugin URI:        https://https://github.com/kampiamodikuesto/wp-notion-php-sdk
 * Description:       Plugin to integrate Notion PHP SDK library at https://github.com/mariosimao/notion-sdk-php
 * Version:           1.0.0
 * Author:            WM79
 * Author URI:        https://wm79.it/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-notion-php-sdk
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
define( 'WP_NOTION_PHP_SDK_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-notion-php-sdk-activator.php
 */
function activate_wp_notion_php_sdk() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-notion-php-sdk-activator.php';
	Wp_Notion_Php_Sdk_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-notion-php-sdk-deactivator.php
 */
function deactivate_wp_notion_php_sdk() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-notion-php-sdk-deactivator.php';
	Wp_Notion_Php_Sdk_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_notion_php_sdk' );
register_deactivation_hook( __FILE__, 'deactivate_wp_notion_php_sdk' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-notion-php-sdk.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_notion_php_sdk() {

	$plugin = new Wp_Notion_Php_Sdk();
	$plugin->run();

}
run_wp_notion_php_sdk();
