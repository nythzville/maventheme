jQuery(function($) {

    var scrolldown = 0;
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > scrolldown) {
            $('.navbar-fixed-top').addClass('sticky-nav');
            
        } else {
            $('.navbar-fixed-top').removeClass('sticky-nav');
        }
    });

    $(document).ready(function() {
     	var duration = 600;
        $('.btn-backtotop').click(function(event) {
          event.preventDefault();
          $('html, body').animate({scrollTop: 0}, duration);
          return false;
        })
      });
   
});