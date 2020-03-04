<?php 


//create admin control panel on wordpress for user input.
add_action( 'admin_menu', 'goh_hfp_setup_menu' );
 
function goh_hfp_setup_menu() {
        add_menu_page( 'Header Footer Plugin', 'Header Footer Plugin', 'manage_options', plugin_dir_path(__FILE__) . 'goh-hfp-acp-page.php' );
}

// take and save the user input from the input form. Remove HTML blocks before displaying.
function goh_hfp_save_form( $input ) {
	$header = $input[ 'goh_hfp_header_data' ];
	esc_html( "header = $header" );

	$footer = $input[ 'goh_hfp_footer_data' ];
	esc_html( "footer = $footer" );

	update_option( 'goh_hfp_header_data', $header );
	update_option( 'goh_hfp_footer_data', $footer );
}
