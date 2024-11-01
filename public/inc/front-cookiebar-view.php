<?php           

    // Get option fields from database 

    $cookie_bar_status = sanitize_text_field(get_option('cookie_bar_status'));

    $cookie_bar_show_in = sanitize_text_field(get_option('cookie_bar_show_in'));

    $cookie_message = sanitize_text_field(get_option('cookie_message'));

    $bar_text_size = sanitize_text_field(get_option('bar_text_size'));

    $bar_bg_color = sanitize_hex_color(get_option('bar_bg_color'));

    $bar_text_color = sanitize_hex_color(get_option('bar_text_color'));

    $accept_btn_option = sanitize_text_field(get_option('accept_btn_option'));

    $accept_btn_or_link_option = sanitize_text_field(get_option('accept_btn_or_link_option'));

    $accept_btn_text = sanitize_text_field(get_option('accept_btn_text'));

    $accept_btn_text_size = sanitize_text_field(get_option('accept_btn_text_size'));

    $accept_btn_bg_color = sanitize_hex_color(get_option('accept_btn_bg_color'));

    $accept_btn_text_color = sanitize_hex_color(get_option('accept_btn_text_color'));

    $reject_btn_option = sanitize_text_field(get_option('reject_btn_option'));

    $reject_btn_or_link_option = sanitize_text_field(get_option('reject_btn_or_link_option'));

    $reject_btn_text = sanitize_text_field(get_option('reject_btn_text'));

    $reject_btn_text_size = sanitize_text_field(get_option('reject_btn_text_size'));

    $reject_btn_bg_color = sanitize_hex_color(get_option('reject_btn_bg_color'));

    $reject_btn_text_color = sanitize_hex_color(get_option('reject_btn_text_color'));

    $read_more_option = sanitize_text_field(get_option('read_more_option'));

    $read_more_btn_or_link_option = sanitize_text_field(get_option('read_more_btn_or_link_option'));

    $read_more_text = sanitize_text_field(get_option('read_more_text'));

    $read_more_text_size = sanitize_text_field(get_option('read_more_text_size'));

    $read_more_btn_bg_color = sanitize_hex_color(get_option('read_more_btn_bg_color'));

    $read_more_text_color = sanitize_hex_color(get_option('read_more_text_color'));

    $read_more_url = esc_url(get_option('read_more_url'));

?>

<?php

    // Set Elements structure and set value for cookie bar in front side

    //if(htmlspecialchars($_COOKIE['Zestard_Cookie_Consent']) == '' && htmlspecialchars($_COOKIE['Zestard_Cookie_Consent']) == NULL) {
    if( empty($_COOKIE['Zestard_Cookie_Consent']) ) {

        if($cookie_bar_status == 'enable'){ ?>

            <div id="cookie_consent_bar" style="background-color: <?php echo esc_attr($bar_bg_color); ?>; font-size: <?php echo esc_attr($bar_text_size).'px'; ?>; color: <?php echo esc_attr($bar_text_color); ?>; <?php if($cookie_bar_show_in == 'footer') {  ?> bottom: 0px; <?php } else { ?> top: 0px; <?php } ?> position: fixed; display: block; "><span><?php echo sanitize_text_field($cookie_message) ?></span>

                <?php   if($accept_btn_option =='true'){ 

                    if($accept_btn_or_link_option == 'button') { 

                ?>

                    <a type="button" id="cookie_accept_btn"  href="javascript:void(0)" onclick="ZTPL_setCookie('Zestard Cookie Consent', 'ztpl-cookie-accept', '30');" style="color: <?php echo esc_attr($accept_btn_text_color) ?>; background-color: <?php echo esc_attr($accept_btn_bg_color) ?>; font-size: <?php echo esc_attr($accept_btn_text_size).'px'; ?>; text-decoration-line: none "><?php echo sanitize_text_field($accept_btn_text); ?>  </a> 

                <?php }else{ ?>

                    <a target="_blank" href="javascript:void(0)" onclick="ZTPL_setCookie('Zestard Cookie Consent', 'ztpl-cookie-accept', '30');" style="color:<?php echo esc_attr($accept_btn_text_color) ?>; font-size: <?php echo esc_attr($accept_btn_text_size).'px'; ?>; border-bottom: 1px solid <?php echo esc_attr($accept_btn_text_color)  ?>; " ><?php echo sanitize_text_field($accept_btn_text); ?></a>

                <?php }

                    }

                    if($reject_btn_option =='true'){ 

                        if($reject_btn_or_link_option == 'button'){
                ?>

                    <a type="button" id="cookie_reject_button" target="_self" href="javascript:void(0)" onclick="ZTPL_rejectCookie();"  style="color: <?php echo esc_attr($reject_btn_text_color) ?>; background-color: <?php echo esc_attr($reject_btn_bg_color) ?>; font-size: <?php echo esc_attr($reject_btn_text_size).'px'; ?>; text-decoration-line: none "><?php echo sanitize_text_field($reject_btn_text); ?></a>
                
                <?php }else{ ?>

                    <a target="_blank" href="javascript:void(0)" onclick="ZTPL_rejectCookie();" style="color:<?php echo esc_attr($reject_btn_text_color) ?>; font-size: <?php echo esc_attr($reject_btn_text_size).'px'; ?>; border-bottom: 1px solid <?php echo esc_attr($reject_btn_text_color)  ?>; " ><?php echo sanitize_text_field($reject_btn_text); ?></a>

                <?php }

                    }

                    if($read_more_option =='true') { 

                        if($read_more_btn_or_link_option == 'button') {
                ?>

                    <a type="button" id="cookie_read_more_button" target="_blank" href="<?php echo esc_url($read_more_url); ?>" style="color: <?php echo esc_attr($read_more_text_color) ?>; background-color: <?php echo esc_attr($read_more_btn_bg_color) ?>; font-size: <?php echo esc_attr($read_more_text_size).'px'; ?>; text-decoration-line: none " ><?php echo sanitize_text_field($read_more_text); ?></a></div>

                <?php }else{ ?>

                    <a target="_blank" href="<?php echo esc_url($read_more_url); ?>" style="color:<?php echo esc_attr($read_more_text_color) ?>; font-size: <?php echo esc_attr($read_more_text_size).'px'; ?>; border-bottom: 1px solid <?php echo esc_attr($read_more_text_color)  ?>; " ><?php echo sanitize_text_field($read_more_text); ?></a></div>

                <?php } 

                }

            }

        }