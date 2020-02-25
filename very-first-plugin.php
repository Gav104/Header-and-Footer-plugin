<?php
/*
Plugin Name: Very First Plugin
Plugin URI: https://www.gavinohanlon.com/
Description: This is the first attempt at a plugin.
Version: 2.0
Author: Gavin O Hanlon
*/


require_once plugin_dir_path(__FILE__) . 'includes/vfp-functions.php';



add_action("wp_head", "vfp_header_add_text");
 

function vfp_header_add_text()
{
  echo wp_unslash (get_option('gh_vfp_header_data'));
}

// Hook the 'wp_footer' action hook, add the function named 'mfp_Add_Text' to it
add_action("wp_footer", "vfp_footer_add_text");
 
// Define 'mfp_Add_Text'
function vfp_footer_add_text() {
  echo wp_unslash (get_option('gh_vfp_footer_data'));
}

