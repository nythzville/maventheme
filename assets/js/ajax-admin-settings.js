jQuery.noConflict();
jQuery(function ($) {	
  /* 
	*	Saving General Settings
	*
	*/
	$('#frm-general-settings').submit(function(e){
    
    var formData = $(this).serialize();
    
    formData += '&action=save_general_settings';
    formData += '&security='+ Maven.security;  
  
		$.post(Maven.ajaxurl, formData)

		.done(function(response){
			if (response == "saved") {
        $('#notice-container').html('<div id="message" class="updated notice notice-success is-dismissible"><p>Settings updated.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>');
        window.scrollTo(200,0);
      }
		})
		.fail(function(data){
			console.log(data);

		});


		e.preventDefault();
	
	});


  /* 
  * Saving Color Settings
  *
  */
  $('#frm-color-settings').submit(function(e){
    
    var formData = $(this).serialize();
      
    formData += '&action=save_color_settings';
    formData += '&security='+ Maven.security;  
    
    $.post(Maven.ajaxurl,formData)
    .done(function(data){
      
      console.log(data);
    })
    .fail(function(data){
      console.log(data);

    });

    e.preventDefault();
  
  });

  /* 
  * Saving Footer Settings
  *
  */
  $('#frm-footer-settings').submit(function(e){
    
    var formData = $(this).serialize();
      
    formData += '&action=save_footer_settings';
    formData += '&security='+ Maven.security;  
    
    $.post(Maven.ajaxurl,formData)
    .done(function(data){
      
      console.log(data);
    })
    .fail(function(data){
      console.log(data);

    });

    e.preventDefault();
  
  });

  $('.notice-dismiss').click(function(){
    $(this).nearest('.message').nearest('#notice-container').html('');
  });

});