<?php 

add_action('admin_menu', 'test_plugin_setup_menu');
 
function test_plugin_setup_menu() {
        add_menu_page( 'Test Plugin Page', 'Gavin H&F Plugin', 'manage_options', "very-first-plugin/includes/vfp-first-acp-page.php" );
}