<?php
/*
Plugin Name: Use GA Debug JavaScript
Description: Hooks into `woocommerce_google_analytics_script_src` and returns a value to use the debug code from GA. See https://developers.google.com/analytics/devguides/collection/analyticsjs/debugging
Plugin URI: https://www.yourwoosite.com
Version: 0.1b
Author: Hiro
Author URI: https://www.yourwoosite.com
*/


add_filter( 'woocommerce_google_analytics_script_src', 'hiro_use_ga_debug_src' );

function hiro_use_ga_debug_src() {
	return '//www.google-analytics.com/analytics_debug.js';
}
