<?php
/*
Plugin Name: Header Footer Plugin
Plugin URI: https://www.gavinohanlon.com/
Description: This plugin inserts data into the header and footer area.
Version: 3.2
Author: Gavin O Hanlon
*/

// select functions file.
require_once plugin_dir_path(__FILE__) . 'includes/goh-hfp-functions.php';


//select header action and add user input data.
add_action( 'wp_head', 'goh_hfp_header_add_text' );
 
// remove slashes and retrieve the option.
function goh_hfp_header_add_text() {
  echo wp_unslash ( get_option ( 'goh_hfp_header_data' ));
}

//select footer action and add user input data.
add_action( 'wp_footer', 'goh_hfp_footer_add_text' );
 
// remove slashes and retrieve the option.
function goh_hfp_footer_add_text() {
  echo wp_unslash ( get_option ( 'goh_hfp_footer_data' ));
}
