
   <!-- FOOTER Section
  ================================================== -->
  <footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <p class="signup-message">RECEIVE EXCLUSIVE NEWS AND OFFERS</p>
        </div>
        <div class="col-lg-4">
          <div class="signup-form">
            <input type="text" name="subscriber_email" placeholder="Your Email Address" tabindex="1">
            <a class="btn custom-btn">Sign Up</a>
          </div>
        </div>
        <div class="col-lg-3 col-lg-offset-1 col-sm-1 col-md-offset-1 col-md-3">
          
            <div class="btn-wrapper">
              <a href="#" class="btn-backtotop">
                <span class="copy">Back to the top</span>
                <span class="glyphicon glyphicon-menu-up"></span>
              </a>
            </div>

        </div>
      </div>
    </div>
  </div>

  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="footer-logo">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/LOGO.png">
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="usefullinks">
            <h4>Usefull Links</h4>
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">About</a> Us</li>
              <li><a href="">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="footer-contact-details">
            <h4>Contact Us</h4>
            <ul>
              <li><i class="fa fa-phone"></i> 09876543211 | 09876543211</li>
              <li><i class="fa fa-envelope"></i> mailtoadmin@boracay.com</li>
              <li><i class="fa fa-location-arrow"></i> Boracay, Philipines</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="footer-socials ">
            <h4>Keep In Touch</h4>
            <p>Get updates about our packages and special offer through social media.
              Talk to us. Engage in our conversations.</p>
            <ul>
              <li class="facebook"><a  href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
              <li class="twitter"><a  href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
              <li class="instagram"><a  href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- <p>&copy; 2017 Company, Inc. || <a href="maventechsolutions.ph"><span>Web Design By: MavenTech Solutions</span></a></p> -->
    </div>
  </div>

  </footer>
    <!-- custom Styled Maps JavaScript
    ================================================== -->
    <script>

        var map;
        var pin1 = { lat:11.989495, lng:121.914118 }; //11.989495, 121.914118
        var pin2 = { lat:11.966825, lng:121.922186 }; //11.966825, 121.922186
        var pin3 = { lat:11.947302, lng:121.937936 }; //11.947302, 121.937936 

        var center = { lat:11.970184 , lng:121.922872 };
        function initMap() {

         // Create a new StyledMapType object, passing it an array of styles,
          // and the name to be displayed on the map type control.
          var styledMapType = new google.maps.StyledMapType(
              [
                {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
                {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
                {
                  featureType: 'administrative',
                  elementType: 'geometry.stroke',
                  stylers: [{color: '#ff002d'}]
                },
                {
                  featureType: 'administrative.land_parcel',
                  elementType: 'geometry.stroke',
                  stylers: [{color: '#708394'}]
                },
                {
                  featureType: 'administrative.land_parcel',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#ae9e90'}]
                },
                {
                  featureType: 'landscape.natural',
                  elementType: 'geometry',
                  stylers: [{color: '#91adc8'}]
                },
                {
                  featureType: 'poi',
                  elementType: 'geometry',
                  stylers: [{color: '#dfd2ae'}]
                },
                {
                  featureType: 'poi',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#93817c'}]
                },
                {
                  featureType: 'poi.park',
                  elementType: 'geometry.fill',
                  stylers: [{color: '#40e0d0'}]
                },
                {
                  featureType: 'poi.park',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#40e0d0'}]
                },
                {
                  featureType: 'road',
                  elementType: 'geometry',
                  stylers: [{color: '#f5f1e6'}]
                },
                {
                  featureType: 'road.arterial',
                  elementType: 'geometry',
                  stylers: [{color: '#fdfcf8'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'geometry',
                  stylers: [{color: '#40e0d0'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'geometry.stroke',
                  stylers: [{color: '#40e0d0'}]
                },
                {
                  featureType: 'road.highway.controlled_access',
                  elementType: 'geometry',
                  stylers: [{color: '#e98d58'}]
                },
                {
                  featureType: 'road.highway.controlled_access',
                  elementType: 'geometry.stroke',
                  stylers: [{color: '#db8555'}]
                },
                {
                  featureType: 'road.local',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#806b63'}]
                },
                {
                  featureType: 'transit.line',
                  elementType: 'geometry',
                  stylers: [{color: '#e2ebf0'}]
                },
                {
                  featureType: 'transit.line',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#e2ebf0'}]
                },
                {
                  featureType: 'transit.line',
                  elementType: 'labels.text.stroke',
                  stylers: [{color: '#e2ebf0'}]
                },
                {
                  featureType: 'transit.station',
                  elementType: 'geometry',
                  stylers: [{color: '#e2ebf0'}]
                },
                {
                  featureType: 'water',
                  elementType: 'geometry.fill',
                  stylers: [{color: '#e2ebf0'}]
                },
                {
                  featureType: 'water',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#92998d'}]
                }
              ],
              {name: 'BORACAY HOTEL MAP'});

          // Create a map object, and include the MapTypeId to add
          // to the map type control.
          map = new google.maps.Map(document.getElementById('map'), {
            center: center,
            zoom: 13,
             mapTypeControlOptions: {
              mapTypeIds: ['styled_map','terrain']
            }
          });

        var iconBase = '<?php echo get_template_directory_uri(); ?>/assets/img/Pin1.png';
        var marker1 = new google.maps.Marker({
          position: pin1,
          map: map,
          icon: iconBase
        });

        var iconBase2 = '<?php echo get_template_directory_uri(); ?>/assets/img/Pin2.png';
        var marker2 = new google.maps.Marker({
          position: pin2,
          map: map,
          icon: iconBase2
        });

        var iconBase3 = '<?php echo get_template_directory_uri(); ?>/assets/img/Pin3.png';
        var marker3 = new google.maps.Marker({
          position: pin3,
          map: map,
          icon: iconBase3
        });

        //Associate the styled map with the MapTypeId and set it to display.
          map.mapTypes.set('styled_map', styledMapType);
          map.setMapTypeId('styled_map');
        }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAPAoxjT-elx0tSjQYyN5kwWzby83mWUI&callback=initMap">
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
    <?php
      wp_footer();
    ?>
  </body>
</html>
