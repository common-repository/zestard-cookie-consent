<?php
	// get current site URL
	$default_site_url = get_site_url();


	// Add option to database on plugin installation 

	add_option( 'cookie_bar_status');
	add_option( 'cookie_bar_show_in','footer','','');
	add_option( 'cookie_message','This website uses cookie to generate better navigation for you in future.','','');
	add_option( 'bar_text_size','18','','');
	add_option( 'bar_bg_color','#000000','','');
	add_option( 'bar_text_color','#ffffff','','');
	add_option( 'accept_btn_option');
	add_option( 'accept_btn_or_link_option');
	add_option( 'accept_btn_text','Accept','','');
	add_option( 'accept_btn_text_size','18','','');
	add_option( 'accept_btn_bg_color','#0066bf','','');
	add_option( 'accept_btn_text_color','#ffffff','','');
	add_option( 'reject_btn_option');
	add_option( 'reject_btn_or_link_option');
	add_option( 'reject_btn_text','Reject','','');
	add_option( 'reject_btn_text_size','18','','');
	add_option( 'reject_btn_bg_color','#0066bf','','');
	add_option( 'reject_btn_text_color','#ffffff','','');
	add_option( 'read_more_option');
	add_option( 'read_more_btn_or_link_option');
	add_option( 'read_more_text','Read More','','');
	add_option( 'read_more_text_size','18','','');
	add_option( 'read_more_btn_bg_color','#0066bf','','');
	add_option( 'read_more_text_color','#ffffff','','');
	add_option( 'read_more_url',$default_site_url,'','');


	//Register a setting and its data.
	register_setting( 'ztpl_cookie_options_group', 'cookie_bar_status', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'cookie_bar_show_in', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'cookie_message', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'bar_text_size', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'bar_bg_color', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'bar_text_color', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'accept_btn_option', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'accept_btn_or_link_option', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'accept_btn_text', 'ztpl_cookie_callback' ); 
	register_setting( 'ztpl_cookie_options_group', 'accept_btn_text_size', 'ztpl_cookie_callback' );   
	register_setting( 'ztpl_cookie_options_group', 'accept_btn_bg_color', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'accept_btn_text_color', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'reject_btn_option', 'ztpl_cookie_callback' ); 
	register_setting( 'ztpl_cookie_options_group', 'reject_btn_or_link_option', 'ztpl_cookie_callback' );  
    register_setting( 'ztpl_cookie_options_group', 'reject_btn_text', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'reject_btn_text_size', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'reject_btn_bg_color', 'ztpl_cookie_callback' );    
  	register_setting( 'ztpl_cookie_options_group', 'reject_btn_text_color', 'ztpl_cookie_callback' ); 
	register_setting( 'ztpl_cookie_options_group', 'read_more_option', 'ztpl_cookie_callback' );   
	register_setting( 'ztpl_cookie_options_group', 'read_more_btn_or_link_option', 'ztpl_cookie_callback' );
   	register_setting( 'ztpl_cookie_options_group', 'read_more_text', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'read_more_text_size', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'read_more_btn_bg_color', 'ztpl_cookie_callback' );
	register_setting( 'ztpl_cookie_options_group', 'read_more_text_color', 'ztpl_cookie_callback' );    
    register_setting( 'ztpl_cookie_options_group', 'read_more_url', 'ztpl_cookie_callback' ); 

?>