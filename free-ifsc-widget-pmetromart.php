<?php
/*
Plugin Name: Free IFSC Widget – PMetroMart
Plugin URI: https://pmetromart.in/ifsc/embed/
Description: Free IFSC Code Lookup Widget for WordPress. Embed IFSC search easily using iframe.
Version: 1.0.0
Requires at least: 5.0
Tested up to: 6.9
Author: PMetroMart
Author URI: https://pmetromart.in
License: GPLv2 or later
*/

if ( ! defined( 'ABSPATH' ) ) exit;

function pmetromart_ifsc_widget_shortcode() {
    return '<iframe src="https://pmetromart.in/ifsc/widget/" style="width:100%;height:450px;border:0;border-radius:12px;"></iframe>';
}

add_shortcode('ifsc_widget', 'pmetromart_ifsc_widget_shortcode');
