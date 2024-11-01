<?php 
    
// Get option field values from database                                       
$bar_status_value = get_option('cookie_bar_status');
$cookie_bar_show_value = get_option('cookie_bar_show_in');
$cookie_message = get_option('cookie_message');
$bar_text_size = get_option('bar_text_size');
$bar_bg_color = get_option('bar_bg_color');
$bar_text_color = get_option('bar_text_color');

$accept_btn_option_value = get_option('accept_btn_option');
$accept_btn_or_link_option_value = get_option('accept_btn_or_link_option');
$accept_btn_text = get_option('accept_btn_text');
$accept_btn_text_size = get_option('accept_btn_text_size'); 
$accept_btn_bg_color = get_option('accept_btn_bg_color');
$accept_btn_text_color = get_option('accept_btn_text_color');

$reject_btn_option_value = get_option('reject_btn_option');
$reject_btn_or_link_option_value = get_option('reject_btn_or_link_option');
$reject_btn_text = get_option('reject_btn_text');
$reject_btn_text_size = get_option('reject_btn_text_size');
$reject_btn_bg_color = get_option('reject_btn_bg_color');
$reject_btn_text_color = get_option('reject_btn_text_color');

$read_more_option_value = get_option('read_more_option');
$read_more_btn_or_link_option_value = get_option('read_more_btn_or_link_option');
$read_more_text = get_option('read_more_text');
$read_more_text_size = get_option('read_more_text_size');
$read_more_btn_bg_color = get_option('read_more_btn_bg_color');
$read_more_text_color = get_option('read_more_text_color');
$read_more_url = get_option('read_more_url');

?>

    <div class="tabs zestard-cookie-consent-tab">
        <h2><?php echo __( 'Cookie Consent', 'zestard-cookie-consent' ); ?></h2>
        <ul class="tab-links">
                
        	<li class="<?php if($_COOKIE['ztpl-tab-select'] == '#general_tab' || $_COOKIE['ztpl-tab-select'] == ''){ echo "active";}?>"><a class="cookie-tab-list" href="#general_tab"> 
                <?php echo __( 'General Settings', 'zestard-cookie-consent' ); ?></a>
            </li>
        	<li class="<?php if($_COOKIE['ztpl-tab-select'] == '#customise_tab'){ echo "active";}?>"><a href="#customise_tab"><?php echo __( 'Configure Cookie Consent', 'zestard-cookie-consent' ); ?></a></li>
        </ul>
        <form method="post" action="options.php">
            <?php settings_fields( 'ztpl_cookie_options_group' ); ?>
            <div id="general_tab" style="<?php if($_COOKIE['ztpl-tab-select'] == '#general_tab' || $_COOKIE['ztpl-tab-select'] == ''){ echo "display:block";}else{echo "display:none";}?>">
                    <div class="tab-content">
                        <div class="tab active">
                            <table class="form-table">
                                <tr valign="top">
                                    <th style="width:250px;"><label for="cookie_bar_status"><?php echo __( 'Enable Cookie Bar', 'zestard-cookie-consent' ); ?></label></th>
                                    <td>
                                        <input type="radio" name="cookie_bar_status" value="enable" checked="checked"  <?php  if ($bar_status_value == 'enable'){ ?> checked="checked" <?php } ?>><?php echo __( 'Yes', 'zestard-cookie-consent' ); ?>            
                                        <input type="radio" name="cookie_bar_status" value="disable" <?php if($bar_status_value == 'disable' || $bar_status_value == ''){ ?> checked="checked" <?php } ?>><?php echo __( 'No', 'zestard-cookie-consent' ); ?>                 
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th><label for="cookie_bar_show_in"><?php echo __( 'Show In', 'zestard-cookie-consent' ); ?></label></th>
                                    <td>
                                        <select name="cookie_bar_show_in">

                                            <option value="header"  <?php if($cookie_bar_show_value == 'header'){ ?> selected <?php } ?> ><?php echo __( 'Header', 'zestard-cookie-consent' ); ?></option>
                                            <option value="footer" <?php if($cookie_bar_show_value == 'footer'){ ?> selected <?php } ?>><?php echo __( 'Footer', 'zestard-cookie-consent' ); ?></option>
                                              
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php  submit_button(); ?>
            </div>
        <div id="customise_tab" style="<?php if($_COOKIE['ztpl-tab-select'] == '#customise_tab'){ echo "display:block";}else{echo "display:none";}?>" >
            <div class="tab-content">
                <div class="tab">
                    <table class="form-table">
                        <tbody>
                        <tr>
                            <th style="width:250px;"><label><?php echo __( 'Set Cookie Message', 'zestard-cookie-consent' ); ?></label></th>
                            <td>     
                                <textarea rows="8" cols="90" name="cookie_message" id="message_id"  ><?php if($cookie_message) { echo $cookie_message; }  ?></textarea>    
                            </td>
                        </tr>
                        <tr>
                            <th><label><?php echo __( 'Font Size', 'zestard-cookie-consent' ); ?></label></th>
                            <td>
                                <input type="number" min="12" max="36" name="bar_text_size" value="<?php if($bar_text_size){ echo $bar_text_size; } ?>" ><span><?php echo __( '(Pixels)', 'zestard-cookie-consent' ); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th><label><?php echo __( 'Background Color', 'zestard-cookie-consent' ); ?></label></th>
                            <td>
                                <input type="text" name="bar_bg_color" class="cpa-color-picker" value=" <?php if($bar_bg_color){ echo $bar_bg_color; } ?>" >
                            </td>
                        </tr>
                        <tr>
                            <th><label><?php echo __( 'Text Color', 'zestard-cookie-consent' ); ?></label></th>
                            <td>
                                <input type="text" name="bar_text_color" class="cpa-color-picker" value="<?php if($bar_text_color){ echo $bar_text_color; } ?>" >
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
            <div class="tab-content">
                <div  class="tab">
                    <table class="form-table">
                        <tbody class="option_accept_btn">
                        <tr>
                            <th><h2><?php echo __( 'Accept Button?', 'zestard-cookie-consent' ); ?></h2></th>
                            <td>    
                                <input type="radio" name="accept_btn_option" value="true" checked="checked"  <?php if($accept_btn_option_value == 'true'){ ?> checked="checked" <?php } ?> ><?php echo __( 'Yes', 'zestard-cookie-consent' ); ?>            
                                <input type="radio" name="accept_btn_option"  value="false" <?php  if($accept_btn_option_value == 'false'){ ?> checked="checked" <?php } ?>><?php echo __( 'No', 'zestard-cookie-consent' ); ?>
                            </td>
                        </tr>
                        </tbody >
                        <tbody class="accept_btn_setting">
                        
                        <tr>
                            <th><label><?php echo __( 'Type Of Accept Button?', 'zestard-cookie-consent' ); ?></label></th>
                            <td >    
                                <input  type="radio" name="accept_btn_or_link_option" class="accept_btn_or_link_option" value="button" checked="checked"   <?php if($accept_btn_or_link_option_value == 'button') { ?> checked="checked" <?php } ?> ><?php echo __( 'Button', 'zestard-cookie-consent' ); ?>           
                                <input  type="radio" name="accept_btn_or_link_option" class="accept_btn_or_link_option" value="link" <?php if($accept_btn_or_link_option_value == 'link') { ?> checked="checked" <?php } ?> ><?php echo __( 'Link', 'zestard-cookie-consent' ); ?>
                            </td>
                        </tr>   

                        <tr class="accept_btn btn_txt">
                            <th><label><?php echo __( 'Text', 'zestard-cookie-consent' ); ?></label></th>
                            <td>    
                                <input type="text" maxlength="12" name="accept_btn_text" value="<?php if($accept_btn_text){ echo $accept_btn_text; } ?>" >
                            </td>
                        </tr>
                        <tr class="font_size">
                            <th><label><?php echo __( 'Font Size', 'zestard-cookie-consent' ); ?></label></th>
                            <td>
                                <input type="number" min="12" max="36" name="accept_btn_text_size" value="<?php if($accept_btn_text_size){  echo $accept_btn_text_size; } ?>" ><span><?php echo __( '(Pixels)', 'zestard-cookie-consent' ); ?></span>
                            </td>
                        </tr>
                         <tr class="accept_cc_bg_color">
                            <th><label><?php echo __( 'Background Color', 'zestard-cookie-consent' ); ?></label> </th>
                            <td>
                                <input type="text" name="accept_btn_bg_color" class="cpa-color-picker" value="<?php if($accept_btn_bg_color){ echo $accept_btn_bg_color; } ?>" >
                            </td>
                    </tr>
                        <tr>
                            <th><label><?php echo __( 'Text Color', 'zestard-cookie-consent' ); ?></label></th>
                            <td>
                                <input type="text" name="accept_btn_text_color" class="cpa-color-picker" value="<?php if($accept_btn_text_color){ echo $accept_btn_text_color; } ?>">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-content">
                <div  class="tab">
                    <table class="form-table">
                        <tbody class="option_reject_btn">
                        <tr>
                            <th><h2><?php echo __( 'Reject Button?', 'zestard-cookie-consent' ); ?></h2></th>
                            <td>    
                                <input type="radio" name="reject_btn_option" value="true" checked="checked"  <?php if($reject_btn_option_value == 'true'){ ?> checked="checked" <?php } ?> ><?php echo __( 'Yes', 'zestard-cookie-consent' ); ?>                       
                                <input type="radio" name="reject_btn_option" value="false" <?php  if($reject_btn_option_value == 'false'){ ?> checked="checked" <?php } ?>><?php echo __( 'No', 'zestard-cookie-consent' ); ?>           
                            </td>
                        </tr>
                        </tbody>
                        <tbody class="reject_btn_setting">
                        <tr>
                            <th><label><?php echo __( 'Type Of Reject Button?', 'zestard-cookie-consent' ); ?></label></th>
                            <td >    
                                <input  type="radio" name="reject_btn_or_link_option" class="reject_btn_or_link_option" value="button" checked="checked"   <?php if($reject_btn_or_link_option_value == 'button') { ?> checked="checked" <?php } ?> ><?php echo __( 'Button', 'zestard-cookie-consent' ); ?>                 
                                <input  type="radio" name="reject_btn_or_link_option" class="reject_btn_or_link_option" value="link" <?php if($reject_btn_or_link_option_value  == 'link') { ?> checked="checked" <?php } ?> ><?php echo __( 'Link', 'zestard-cookie-consent' ); ?>           
                            </td>
                        </tr>
                        <tr class="reject_btn btn_txt">
                            <th><label><?php echo __( 'Text', 'zestard-cookie-consent' ); ?></label></th>
                            <td>    
                                <input type="text" maxlength="12" name="reject_btn_text" value="<?php if($reject_btn_text){ echo $reject_btn_text; } ?>" >
                            </td>
                        </tr>
                        <tr class="font_size">
                            <th><label><?php echo __( 'Font Size', 'zestard-cookie-consent' ); ?></label></th>
                            <td>
                                <input type="number" min="12" max="36" name="reject_btn_text_size" value="<?php if($reject_btn_text_size){ echo $reject_btn_text_size; } ?>" ><span><?php echo __( '(Pixels)', 'zestard-cookie-consent' ); ?>           </span>
                            </td>
                        </tr>
                        <tr class="reject_cc_bg_color">
                            <th><label><?php echo __( 'Background Color', 'zestard-cookie-consent' ); ?></label> </th>
                            <td>
                                <input type="text" name="reject_btn_bg_color" class="cpa-color-picker" value="<?php if($reject_btn_bg_color){ echo $reject_btn_bg_color; } ?>" >
                            </td>
                        </tr>
                        <tr>
                            <th><label><?php echo __( 'Text Color', 'zestard-cookie-consent' ); ?></label></th>
                            <td>
                                <input type="text" name="reject_btn_text_color" class="cpa-color-picker" value="<?php if($reject_btn_text_color){ echo $reject_btn_text_color; } ?>" >
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-content">
                <div  class="tab">
                    <table class="form-table">
                        <tbody class="option_read_more_link">
                        <tr>
                            <th><h2><?php echo __( 'Read More Button?', 'zestard-cookie-consent' ); ?></h2></th>
                            <td>    
                                <input type="radio" name="read_more_option" value="true" checked="checked" <?php if($read_more_option_value == 'true'){ ?> checked="checked" <?php } ?> ><?php echo __( 'Yes', 'zestard-cookie-consent' ); ?>                      
                                <input type="radio" name="read_more_option" value="false" <?php if($read_more_option_value == 'false'){ ?> checked="checked" <?php } ?> ><?php echo __( 'No', 'zestard-cookie-consent' ); ?>           
                            </td>
                        </tr>
                        </tbody>
                        <tbody class="read_more_setting">
                        <tr>
                            <th><label><?php echo __( 'Type Of Read More Button?', 'zestard-cookie-consent' ); ?></label></th>
                            <td >    
                                <input  type="radio" name="read_more_btn_or_link_option" class="read_more_btn_or_link_option" value="button" checked="checked"   <?php if($read_more_btn_or_link_option_value == 'button') { ?> checked="checked" <?php } ?> ><?php echo __( 'Button', 'zestard-cookie-consent' ); ?>                     
                                <input  type="radio" name="read_more_btn_or_link_option" class="read_more_btn_or_link_option" value="link" <?php if($read_more_btn_or_link_option_value  == 'link') { ?> checked="checked" <?php } ?> ><?php echo __( 'Link', 'zestard-cookie-consent' ); ?>           
                            </td>
                        </tr>
                        <tr class="read_more_btn btn_txt">
                            <th><label><?php echo __( 'Text', 'zestard-cookie-consent' ); ?></label></th>
                            <td>    
                                <input type="text" maxlength="12" name="read_more_text" value="<?php if($read_more_text){ echo $read_more_text; } ?>" >
                            </td>
                        </tr>
                        <tr class="font_size">
                            <th><label><?php echo __( 'Font Size', 'zestard-cookie-consent' ); ?></label></th>
                            <td>
                                <input type="number" min="12" max="36" name="read_more_text_size" value="<?php if($read_more_text_size){ echo $read_more_text_size; } ?>" ><span><?php echo __( '(Pixels)', 'zestard-cookie-consent' ); ?></span>
                            </td>
                        </tr>
                        <tr class="read_more_cc_bg_color">
                            <th><label><?php echo __( 'Background Color', 'zestard-cookie-consent' ); ?></label> </th>
                            <td>
                                <input type="text" name="read_more_btn_bg_color" class="cpa-color-picker" value="<?php if($read_more_btn_bg_color) {  echo $read_more_btn_bg_color; } ?>"  >
                            </td>
                        </tr>
                        <tr>
                            <th><label><?php echo __( 'Text Color', 'zestard-cookie-consent' ); ?></label> </th>
                            <td>
                                <input type="text" name="read_more_text_color" class="cpa-color-picker" value="<?php if($read_more_text_color) { echo $read_more_text_color; } ?>" >
                            </td>
                        </tr>
                        <tr class="read_more_url">
                            <th><label><?php echo __( 'URL', 'zestard-cookie-consent' ); ?></label></th>
                            <td>
                                <input type="url" id="url" name="read_more_url" placeholder="http://www.example.com" pattern="https?://.+" value="<?php if($read_more_url) { echo $read_more_url; } ?>" >
                            </td>
                        </tr>   
                        </tbody>
                    </table>
                </div>
            </div>
            <?php  submit_button(); ?>
        </div>
        </form>
    </div>
 