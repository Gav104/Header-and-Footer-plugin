<?php 


//create admin control panel on wordpress for user input.
add_action( 'admin_menu', 'test_plugin_setup_menu' );
 
function test_plugin_setup_menu() {
        add_menu_page( 'Test Plugin Page', 'Gavin H&F Plugin', 'manage_options', plugin_dir_path(__FILE__) . 'vfp-first-acp-page.php' );
}

// take the user input from the input form. Remove HTML blocks before displaying.
function gh_vfp_save_form( $input ) {
	$header = $input[ 'gh_vfp_header_data' ];
	echo esc_html( "header = $header" );

	$footer = $input[ 'gh_vfp_footer_data' ];
	echo esc_html( "footer = $footer" );

	update_option( 'gh_vfp_header_data', $header );
	update_option( 'gh_vfp_footer_data', $footer );
}
