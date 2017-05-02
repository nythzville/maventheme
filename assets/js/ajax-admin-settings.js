jQuery.noConflict();
jQuery(function ($) {	
  /* 
	*	Saving General Settings
	*
	*/
	$('#frm-general-settings').submit(function(e){
    
    var formData = $(this).serialize();
    var request_data = {
      action: 'save_general_settings',
      security : Maven.security,  
      data: formData,
    };
    
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
  * Saving Color Settings
  *
  */
  $('#frm-color-settings').submit(function(e){
    
    var formData = $(this).serialize();
    var request_data = {
      action: 'save_color_settings',
      security : Maven.security,  
      data: formData,
    };
    
    $.post(Maven.ajaxurl,formData)
    .done(function(data){
      
      console.log(data);
    })
    .fail(function(data){
      console.log(data);

    });

    e.preventDefault();
  
  });

});