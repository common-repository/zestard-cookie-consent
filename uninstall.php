<?php

/**
* trigger this file on plugin uninstallation
*
*  @package            Zestard_Cookie_Consent
*/

// Security check to prevent unauthorised user
if( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}


// Delete option field from data base on uninstallation of plugin
delete_option( 'cookie_bar_status' ); 
delete_option( 'cookie_bar_show_in' ); 
delete_option( 'cookie_message' ); 
delete_option( 'bar_text_size' ); 
delete_option( 'bar_bg_color' ); 
delete_option( 'bar_text_color' ); 
delete_option( 'accept_btn_option' );
delete_option( 'accept_btn_or_link_option' ); 
delete_option( 'accept_btn_text' ); 
delete_option( 'accept_btn_text_size' ); 
delete_option( 'accept_btn_bg_color' );
delete_option( 'accept_btn_text_color' ); 
delete_option( 'reject_btn_option' ); 
delete_option( 'reject_btn_or_link_option' );
delete_option( 'reject_btn_text' ); 
delete_option( 'reject_btn_text_size' ); 
delete_option( 'reject_btn_bg_color' ); 
delete_option( 'reject_btn_text_color' ); 
delete_option( 'read_more_option' ); 
delete_option( 'read_more_btn_or_link_option' );
delete_option( 'read_more_text' ); 
delete_option( 'read_more_text_size' );
delete_option( 'read_more_btn_bg_color' ); 
delete_option( 'read_more_text_color' ); 
delete_option( 'read_more_url' ); 
?>