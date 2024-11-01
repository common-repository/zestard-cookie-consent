jQuery(document).ready(function($) {

  

    // Show/Hide button fields setting on document Ready action 

    var accept_onload_val = $("input[type=radio][name='accept_btn_option']:checked").val();
    var reject_onload_val = $("input[type=radio][name='reject_btn_option']:checked").val();
    var read_more_onload_val = $("input[type=radio][name='read_more_option']:checked").val();

      // Show/Hide Accpet button settings
   		if(accept_onload_val == 'true'){
        $('.accept_btn_setting').show();
    	}else{
        $('.accept_btn_setting').hide();  
      }

      // Show/Hide reject Button settings
      if(reject_onload_val == 'true'){
   			$('.reject_btn_setting').show();
   		}else{
   			$('.reject_btn_setting').hide();	
   		}

      // Show/Hide read_more Button settings
   		if(read_more_onload_val == 'true'){
   			$('.read_more_setting').show();
   		}else{
   			$('.read_more_setting').hide();	
   		}

      // Show/Hide bg_color field for accept btn
      var accept_btn_link = $("input[type='radio'][name='accept_btn_or_link_option']:checked").val();
      if(accept_btn_link == 'link'){
        $('.accept_cc_bg_color').hide();
      }

      // Show/Hide bg_color field for reject btn
      var reject_btn_link = $("input[type='radio'][name='reject_btn_or_link_option']:checked").val();
      if(reject_btn_link == 'link'){
        $('.reject_cc_bg_color').hide();
      }

      // Show/Hide bg_color field for read_more btn
      var read_more_btn_link = $("input[type='radio'][name='read_more_btn_or_link_option']:checked").val();
      if(read_more_btn_link == 'link'){
        $('.read_more_cc_bg_color').hide();
      }


  // Tabs onclick event
  	$('.zestard-cookie-consent-tab .tab-links a').on('click', function(e) {
  		var currentAttrValue = $(this).attr('href');

  		// Show/Hide Tabs
  		$('.zestard-cookie-consent-tab ' + currentAttrValue).show().siblings().hide();

  		// Change/remove current tab to active
  		$(this).parent('li').addClass('active').siblings().removeClass('active');

      //Active last tab which was select
      var cookie_name = 'ztpl-tab-select';
      var cookie_value = currentAttrValue; 
      var date = new Date();
      var exdays = 1;

      date.setTime(date.getTime() + (exdays*24*60*60*1000));
      var expires = "expires="+ date.toUTCString();
      document.cookie = cookie_name + "=" + cookie_value + ";" + expires + ";path=/";

  		e.preventDefault();
  	});

    // Display Accept button fields on (on_change) radio button event
   	$('.option_accept_btn input').on('change', function() {
     		var accept_on_change_value = $('input[name=accept_btn_option]:checked', '.option_accept_btn').val();
     		if(accept_on_change_value == 'true'){
     			$('.accept_btn_setting').show();
     		}
     		else{
     			$('.accept_btn_setting').hide();	
     		}
  	});


    // Display Accept button bg_color field on (on_click) radio button event
    $(".accept_btn_or_link_option").on('click' , function(){
      if($(this).val() == 'link'){
        $('.accept_cc_bg_color').hide();
      }
      else{
        $('.accept_cc_bg_color').show();
      }
    });

    // Display Reject button fields on (on_change) radio button event
  	$('.option_reject_btn input').on('change', function() {
     		var reject_on_change_value = $('input[name=reject_btn_option]:checked', '.option_reject_btn').val();
     		if(reject_on_change_value == 'true'){
     			$('.reject_btn_setting').show();
     		}
     		else{
     			$('.reject_btn_setting').hide();	
     		}
  	});

    // Display Reject button bg_color field on (on_click) radio button event
    $(".reject_btn_or_link_option").on('click', function(){
      if($(this).val() == 'link'){
        $('.reject_cc_bg_color').hide();
      }else{
        $('.reject_cc_bg_color').show();
      }
    });

    // Display Read_More button fields on (on_change) radio button event
  	$('.option_read_more_link input').on('change', function() {
   		var read_more_on_change_value = $('input[name=read_more_option]:checked', '.option_read_more_link').val();
   		if(read_more_on_change_value == 'true'){
   			$('.read_more_setting').show();
   		}else{
   			$('.read_more_setting').hide();	
   		}
  	});

    // Display Read_More button bg_color field on (on_click) radio button event
    $(".read_more_btn_or_link_option").on('click',function(){
      if($(this).val() == 'link'){
        $('.read_more_cc_bg_color').hide();
      }else{
        $('.read_more_cc_bg_color').show();
      }
    });

    // Get values of textarea field & other radio button fields on submit button click & if value is true then set that field as required 
    $('.button-primary').on("click", function(){
       
    var textara_value =  $('textarea').val();
    var accept_radio_value = $("input[name='accept_btn_option']:checked").val();
    var reject_radio_value = $("input[name='reject_btn_option']:checked").val();
    var read_more_radio_value = $("input[name='read_more_option']:checked").val();

    //Check cookie message field
    if(textara_value == '')  
    {
      $("textarea").prop('required',true);
    } 

    //Check Accept Button(true/false) field
    if(accept_radio_value == 'true'){
      $(".accept_btn input").prop('required',true);
    } else {
            $(".accept_btn input").prop('required',false);
           }

    //Check Reject Button(true/false) field           
    if(reject_radio_value == 'true'){
      $(".reject_btn input").prop('required',true);
    } else {
            $(".reject_btn input").prop('required',false);
           }

    //Check Read More Button(true/false) field
    if(read_more_radio_value   == 'true'){
      $(".read_more_btn input").prop('required',true);
      $("#url").prop('required',true);
    } else {
            $(".read_more_btn input").prop('required',false);
            $("#url").prop('required',false);
           }
    });

});