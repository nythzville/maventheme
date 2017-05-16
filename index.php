<?php
get_header();
?>

    <!-- Carousel
    ================================================== -->
   <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/slider1.jpg');"></div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/slider2.jpg');"></div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/slider3.jpg');"></div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>


    <!-- Home WELCOME and FEATURE Section
    ================================================== -->

    
    <div class="homePage-mainContent">
      <div class="container">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-6">
          <div class="welcomebox">
            <h1>Welcome to Boracay</h1>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>

            <div class="featsListing">
              <ul>
                <li><i class="flaticon-cocktail"></i><a href="#">Cocktail</a></li>
                <li><i class="flaticon-bed"></i><a href="#">Rooms</a></li>
                <li><i class="flaticon-garlands"></i><a href="#">Festivals</a></li>
                <li><i class="flaticon-car"></i><a href="#">Transport</a></li>
                <li><i class="flaticon-restaurant"></i><a href="#">Dining</a></li>
                <li><i class="flaticon-photo-camera"></i><a href="#">Camera</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.col-lg-6 -->

        <div class="col-lg-6">
          <div class="featGallery">
            <div class="col-sm-4">
              <div class="feat-prev">
                <a href="#" >
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feat1.png" alt="Feature Boracay HOTEL feat 1" class="img-responsive">
                  <span class="play-btn"><i class="fa fa-play"></i></span>
                </a>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="feat-prev">
                <a href="#" >
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feat2.png" alt="Feature Boracay HOTEL feat 2" class="img-responsive">
                  <span class="play-btn"><i class="fa fa-play"></i></span>
                </a>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="feat-prev">
                <a href="#" >
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feat3.png" alt="Feature Boracay HOTEL feat 3" class="img-responsive">
                  <span class="play-btn"><i class="fa fa-play"></i></span>
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="feat-text">
              <p>Civitatis mala quid, dixisset liquidae nomine quot appetendum ingenii ferrentur nasci conspiratione, fore aiunt leniter, plerique stabilitas consequi tempora appetendi maledicta elegans praetermittenda iucunditas, quale sitne concursionibus detractis faciendum meliore timidiores vivendum, nesciunt, futuros conveniunt asperum viam peccant vult pauca iuberet, praetorem propterea firme augeri terminari perdiderunt alias praesenti saperet, graeci fingi declinabunt synephebos cognita.</p>

              <p>Civitatis mala quid, dixisset liquidae nomine quot appetendum ingenii ferrentur nasci conspiratione, fore aiunt leniter, plerique stabilitas consequi tempora appetendi maledicta elegans praetermittenda iucunditas.</p>
            </div>
          </div>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-sm-12">
          <?php do_shortcode('[show_quiz]'); ?>
        </div>
      </div>
     </div><!-- /.container -->
  </div>


  <!-- Home ABOUT US Section
  ================================================== -->

  <div class="aboutSection">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="heading_group text-center">
              <div class="background_title">WELCOME</div>
              <h2>BORACAY HOTEL</h2>
              <span class="subtitle">ONE OF THE BEST PLACES TO RELAX &amp; ENJOY </span> 
            </div>

            <div class="homeAboutcontent">
              <p>Civitatis mala quid, dixisset liquidae nomine quot appetendum ingenii ferrentur nasci conspiratione, fore aiunt leniter, plerique stabilitas consequi tempora appetendi maledicta elegans appetendi maledicta elegans praetermittenda iucunditas, quale sitne concursionibus detractis faciendum meliore timidiores vivendum, nesciunt, futuros conveniunt praetermittenda iucunditas, quale sitne concursionibus appetendi maledicta elegans praetermittenda iucunditas, quale sitne concursionibus detractis faciendum meliore timidiores vivendum, nesciunt, futuros conveniunt detractis faciendum appetendi maledicta elegans praetermittenda iucunditas, quale sitne concursionibus detractis faciendum meliore timidiores vivendum, nesciunt, futuros conveniunt meliore timidiores vivendum, nesciunt, futuros conveniunt asperum viam peccant appetendi maledicta elegans praetermittenda iucunditas, quale sitne concursionibus detractis faciendum meliore timidiores vivendum, nesciunt, futuros conveniunt asperum vult pauca iuberet, praetorem propterea firme augeri terminari perdiderunt alias praesenti saperet, graeci fingi declinabunt synephebos cognita. appetendi maledicta elegans praetermittenda iucunditas, quale sitne concursionibus detractis faciendum meliore timidiores vivendum, nesciunt, futuros conveniunt</p>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Home MAP Section
  ================================================== -->

  <div class="homeMap">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
            <div class="heading_group text-center">
              <div class="background_title alt">MAP</div>
              <h2>BORACAY HOTEL</h2>
              <span class="subtitle">ONE OF THE BEST PLACES TO RELAX &amp; ENJOY </span> 
            </div>

            <div class="col-md-12">
              <div class="mapcontent">
                <ul class="ext-featuer-list">
                  <li>
                    <div class="ext-feature clearfix">
                      <div class="ft-icon"><i class="fa fa-sitemap"></i></div>
                      <h3 class="ft-title">Comments
                        <strong>Management</strong></h3>
                      <p class="ft-desc">Privavisse pertinacia quanta, periculum benivolentiam vitium alterum prorsus nostrum afferat molestiae, quiete numen scribimus nosque frui duce, eorum nec displicet iis gratissimo, fastidii.</p>
                      <!-- <div class="join-line" style="height: 70px; margin-top: -20px;"></div> -->
                    </div>
                  </li>
                  <li>
                    <div class="ext-feature clearfix">
                      <div class="ft-icon"><i class="fa fa-shopping-cart"></i></div>
                      <h3 class="ft-title">Online
                        <strong>Shop</strong></h3>
                      <p class="ft-desc">Privavisse pertinacia quanta, periculum benivolentiam vitium alterum prorsus nostrum afferat molestiae, quiete numen scribimus nosque frui duce, eorum nec displicet iis gratissimo, fastidii.</p>
                      <!-- <div class="join-line" style="height: 70px; margin-top: -20px;"></div> -->
                    </div>
                  </li>
                  <li>
                    <div class="ext-feature clearfix">
                      <div class="ft-icon"><i class="fa fa-file-text"></i></div>
                      <h3 class="ft-title">To Do
                        <strong>List</strong></h3>
                      <p class="ft-desc">Privavisse pertinacia quanta, periculum benivolentiam vitium alterum prorsus nostrum afferat molestiae, quiete numen scribimus nosque frui duce, eorum nec displicet iis gratissimo, fastidii.</p>
                      <!-- <div class="join-line" style="height: 60px; margin-top: -59px;"></div> -->
                    </div>
                  </li>
                </ul>
              </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
          <div id="map"></div>     
        </div>
      </div>
    </div>
  </div>

  <!-- Home CTA Section
  ================================================== -->
  <div class="homeCTA">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ctacontent">
            <div class="row">
              <div class="col-md-9"><p>Get in touch for SPECIAL HOLIDAY RATES!</p></div>
              <div class="col-md-3">
              <a class="btn custom-btn" href="#"><span>TALK TO US</span></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Home SOCIAL MEDIA GALLERY Section
  ================================================== -->
  <div class="homesocialgallery parallax">
  <div class="overlay-bg"></div>
    <div class="container">

      <div class='row'>
        <div class="col-lg-12">
          <div class="smg-contnet">
            <h2>LIVE from #BORACAY</h2>

            <div class="row ">
              <div class='col-sm-3 smg-img-list'>
                <img class='img-responsive' alt="BoracayHOTEL live 1" src='<?php echo get_template_directory_uri(); ?>/assets/img/feat1.png'>
              </div>
              <div class='col-sm-3 smg-img-list'>
                <img class='img-responsive' alt="BoracayHOTEL live 2" src='<?php echo get_template_directory_uri(); ?>/assets/img/slider1.jpg'>
              </div>
              <div class='col-sm-3 smg-img-list'>
                <img class='img-responsive' alt="BoracayHOTEL live 3" src='<?php echo get_template_directory_uri(); ?>/assets/img/feat2.png'>
              </div>
              <div class='col-sm-3 smg-img-list'>
                <img class='img-responsive' alt="BoracayHOTEL live 4" src='<?php echo get_template_directory_uri(); ?>/assets/img/slider2.jpg'>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

<?php get_footer() ?>