<?php

include_once( dirname(__FILE__) . '/wp/accordion.php');
include_once( dirname(__FILE__) . '/wp/container.php');
include_once( dirname(__FILE__) . '/wp/empty-separator.php');
include_once( dirname(__FILE__) . '/wp/featured_1.php');
include_once( dirname(__FILE__) . '/wp/full_column.php');
include_once( dirname(__FILE__) . '/wp/one_fourth.php');
include_once( dirname(__FILE__) . '/wp/one_half.php');
include_once( dirname(__FILE__) . '/wp/one_sixth.php');
include_once( dirname(__FILE__) . '/wp/one_third.php');
include_once( dirname(__FILE__) . '/wp/one_twelves.php');
include_once( dirname(__FILE__) . '/wp/tab.php');
include_once( dirname(__FILE__) . '/wp/tabgroup.php');
include_once( dirname(__FILE__) . '/wp/two_third.php');

add_action( 'wp_enqueue_scripts', 'tr_deprecated_shortcodes_styles' );
function tr_deprecated_shortcodes_styles() {

	wp_enqueue_style('the-retailer-deprecated-shortcode-styles',
		plugins_url( 'assets/css/shortcodes.css', __FILE__ ),
		NULL
	);
}
