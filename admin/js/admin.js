jQuery.noConflict();

jQuery(function ($) {

	var frame;
		

   	$('.maven-colorpicker').wpColorPicker();
  	
  	/* 
  	* Upload Logo
	*
  	*/
  	$('.upload-button').click( function(e){

        e.preventDefault();
  		
	    var metaBox = $(this).closest('.logo-container'), // Your meta box id here
      	addImgLink = metaBox.find('.upload-button'),
      	delImgLink = metaBox.find( '.remove-image'),
      	imgContainer = metaBox.find( '.custom-img-container'),
      	imgUrlInput = metaBox.find( '.custom-img-url' );

	    // Create a new media frame
	    frame = wp.media({
	      title: 'Select or Upload Media',
	      button: {
	        text: 'Use this image'
	      },
	      multiple: false  // Set to true to allow multiple files to be selected
	    });

	    // When an image is selected in the media frame...
	    frame.on( 'select', function() {
	      
		    // Get media attachment details from the frame state
		    var attachment = frame.state().get('selection').first().toJSON();

		    // Send the attachment URL to our custom image input field.
		    imgContainer.append( '<img src="'+attachment.url+'" alt="" style="max-width:100%;"/>' );

		    // Send the attachment id to our hidden input
		    imgUrlInput.val( attachment.url );

		    // Hide the add image link
		    addImgLink.addClass( 'hidden' );

		    // Unhide the remove image link
		    delImgLink.removeClass( 'hidden' );
	    });

	    // Finally, open the modal on click
	    frame.open();

    });
     // DELETE IMAGE LINK
  	$('.remove-image').on( 'click', function( event ){

  		var metaBox = $(this).closest('.logo-container'), // Your meta box id here
      	addImgLink = metaBox.find('.upload-button'),
      	delImgLink = metaBox.find( '.remove-image'),
      	imgContainer = metaBox.find( '.custom-img-container'),
      	imgUrlInput = metaBox.find( '.custom-img-url' );

	    event.preventDefault();

	    // Clear out the preview image
	    imgContainer.html( '' );

	    // Un-hide the add image link
	    addImgLink.removeClass( 'hidden' );

	    // Hide the delete image link
	    delImgLink.addClass( 'hidden' );

	    // Delete the image id from the hidden input
	    imgUrlInput.val( '' );

  	});
	
});