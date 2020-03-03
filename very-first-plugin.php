<?php
/*
Plugin Name: Header Footer Plugin
Plugin URI: https://www.gavinohanlon.com/
Description: This plugin inserts data into header and footer area.
Version: 3.0
Author: Gavin O Hanlon
*/

// select functions file.
require_once plugin_dir_path(__FILE__) . 'includes/vfp-functions.php';


//select header action and add user input data.
add_action( 'wp_head', 'vfp_header_add_text' );
 
// remove slashes and retrieve the option.
function vfp_header_add_text()
{
  echo wp_unslash (get_option( 'gh_vfp_header_data' ));
}

//select footer action and add user input data.
add_action( 'wp_footer', 'vfp_footer_add_text' );
 
// remove slashes and retrieve the option.
function vfp_footer_add_text() {
  echo wp_unslash (get_option( 'gh_vfp_footer_data' ));
}
