<?php

/**
 * Plugin Name:       		The Retailer Deprecated Features
 * Plugin URI:        		https://theretailer.wp-theme.design/
 * Description:       		Old features of The Retailer theme that are no longer used.
 * Version:           		1.2
 * Author:            		GetBowtied
 * Author URI:				https://getbowtied.com
 * Text Domain:				the-retailer-deprecated
 * Domain Path:				/languages/
 * Requires at least: 		5.0
 * Tested up to: 			5.3
 *
 * @package  The Retailer Deprecated
 * @author   GetBowtied
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

if ( ! function_exists( 'is_plugin_active' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

// Plugin Updater
require 'core/updater/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://raw.githubusercontent.com/getbowtied/the-retailer-deprecated/master/core/updater/assets/plugin.json',
	__FILE__,
	'the-retailer-deprecated'
);

global $theme;
$theme = wp_get_theme();

if ( $theme->template == 'theretailer') {
	include_once( dirname(__FILE__) . '/includes/shortcodes/shortcodes.php');
	include_once( dirname(__FILE__) . '/includes/templates/index.php');
}
