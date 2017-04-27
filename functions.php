<?php


if ( ! isset( $content_width ) ) {
	$content_width = 660;
}



if ( ! function_exists( 'Maven_setup' ) ) :

function Maven_setup() {
	
	include get_template_directory().'/widgets.php';

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'maven' ),
		'social'  => __( 'Social Links Menu', 'maven' ),
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

}

add_action( 'after_setup_theme', 'Maven_setup' );

endif; // Maven Site setup

function admin_scripts(){
	wp_enqueue_style('bootstrap-min-css', get_template_directory_uri(). '/bootstrap/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap-min-js', get_template_directory_uri(). '/bootstrap/js/bootstrap.min.js');

	// Color Picker 
	wp_enqueue_style( 'wp-color-picker' );
	
	// Maven Script and style

	wp_enqueue_media();
	wp_enqueue_script('maven-admin-js', get_template_directory_uri(). '/admin/js/admin.js',array( 'wp-color-picker' ), false, true );
	wp_enqueue_style('maven-admin-css', get_template_directory_uri(). '/bootstrap/css/maven-admin.css');


}
	

add_action( 'admin_enqueue_scripts', 'admin_scripts' );


/*
* Theme Settings
*/
function add_settings_menu() {
	add_menu_page('Maven Settings', 'Maven Settings', 1, 'maven-settings', 'maven_settings', 'dashicons-admin-generic', 2);
}
add_action('admin_menu', 'add_settings_menu');

function maven_settings(){
	?>
	<div class="wrap">
		<h2>Maven Theme Settings</h2>
		<div id="poststuff">
			<div id="post-body" class="metabox-holder columns-2">
				<div id="post-body-content">
					<div class="row">
						
						<div class="col-xs-12 col-sm-12 col-md-12"> <!-- required for floating -->
						  <!-- Nav tabs -->
						  <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
						    <li class="active"><a href="#home" data-toggle="tab">General Settings</a></li>
						    <li><a href="#color" data-toggle="tab">Colors & Fonts</a></li>
						    <li><a href="#footer" data-toggle="tab">Footer</a></li>
						    <li><a href="#google-services" data-toggle="tab">Google Services</a></li>
						  </ul>
						</div>
						<div class="col-xs-12">
						    <!-- Tab panes -->
						    <div class="tab-content">
						      	<!-- First Tab -->
						      	<div class="tab-pane active" id="home">
						      		<div class="row">
						      			<div class="col-md-8">
											<aside class="panel panel-default">

												<div class="panel-body">
													<form id="frm-general-settings" class="form-label-left maven-form">
												      	<div class="form-group">
														    <label for="theme-type">Theme Type</label>
														    <p><small>Select Theme for major appearance of the website.</small></p>
														    <select class="form-control" id="theme-type" name="theme-type">
														    	<option value="portfolio">Portfolio</option>
														    	<option value="hospitality">Hospitality</option>
														    	<option value="realestate">Real Estate</option>

														    </select>
														    
														</div>
														<div class="form-group">
														    <label for="theme-type">Logo</label>
														    <p><small>Upload a logo image, or enter the URL or ID of an image if its already uploaded. The themes default logo gets applied if the input field is left blank.</small></p>
													    	<div class="logo-container">
														    	<div class="row">
														    		<div class="col-md-8">
															    		<input type="text" name="logo_url" class="form-control custom-img-url">
														    		</div>
														    		<div class="columns-4">
														    			<button class="btn btn-info upload-button" >Upload Image</button>
															    		<button class="btn btn-warning remove-image hidden" >Remove Image</button>
														    		</div>	
														    	</div>
														    	<div class="row">
														    		<div class="col-md-12">
															    		<div class="custom-img-container"></div>
														    		</div>
													    		</div>
													    	</div>
														</div>
														<div class="form-group">
														    <label for="theme-type">Favicon</label>
														    <p><small>Specify a favicon for your site. Accepted formats: .ico, .png, .gif </small></p>
													    	<div class="logo-container">
														    	<div class="row">
														    		<div class="col-md-8">
															    		<input type="text" name="favicon_url" class="form-control custom-img-url">
														    		</div>
														    		<div class="columns-4">
														    			<button class="btn btn-info upload-button" >Upload Image</button>
															    		<button class="btn btn-warning remove-image hidden" >Remove Image</button>
														    		</div>	
														    	</div>
														    	<div class="row">
														    		<div class="col-md-12">
															    		<div class="custom-img-container"></div>
														    		</div>
													    		</div>
													    	</div>
														</div>
														<div class="ln_solid"></div>
														<div class="form-group">
															<div class="col-md-6 col-sm-6 col-xs-12">
				                                                <button type="submit" class="btn btn-success">Save Changes</button>
				                                            </div>
														</div>
											      	</form>	
												</div>
										      	
										    </aside>
										</div>	
						      		</div>
							      	
							    </div>
							    <!-- / First tab --> 
							    
							    <!-- Second Tab -->
							    <div class="tab-pane" id="color">
							      	<div class="row">
						      			<div class="col-md-8">
											<aside class="panel panel-default">

												<div class="panel-body">
											      	<form id="frm-color" class="form-label-left maven-form">
												      	<div class="form-group row">
												      		<div class="col-md-6">
												      			<label for="theme-type">Primary Color</label>
												      			<p><small>Most Dominant Color on your website.</small></p>
												      		</div>
												      		<div class="col-md-6">
												      			<input type="text" class="form-control maven-colorpicker" name="anchor-color" value="#999999">
												      		</div>
												      	</div>
												      	<div class="form-group row">
												      		<div class="col-md-6">
												      			<label for="theme-type">Background Color</label>
													      		<p><small>Select website background color.</small></p>

												      		</div>
												      		<div class="col-md-6">
												      			<input type="text" class="form-control maven-colorpicker" name="anchor-color" value="#999999">
												      		</div>

												      	</div>
												      	<div class="form-group row">
												      		<div class="col-md-6">
												      			<label for="theme-type">Defualt Font Color</label>
												      			<p><small>Anchor link colors</small></p>

												      		</div>
												      		<div class="col-md-6">

												      			<input type="text" class="form-control maven-colorpicker" name="anchor-color" value="#999999">
												      		</div>

												      	</div>
												      	<div class="ln_solid"></div>
														<div class="form-group">
															<div class="col-md-6 col-sm-6 col-xs-12">
				                                                <button type="submit" class="btn btn-success">Save Changes</button>
				                                            </div>
														</div>
											      	</form>

											    </div>
											</aside>
										</div>
									</div>
							    </div>
							    <!-- / Second Tab -->

							    <!-- Third Tab -->
							    <div class="tab-pane" id="footer">
							    	<div class="row">
						      			<div class="col-md-8">
											<aside class="panel panel-default">

												<div class="panel-body">
													<form id="frm-general-settings" class="form-label-left maven-form">
														<div class="form-group">
														    <label for="theme-type">Footer Columns</label>
														    <p><small>How many columns should be displayed in your footer.</small></p>
														    <select class="form-control" id="theme-type" name="theme-type">
														    	<option value="1">1</option>
														    	<option value="2">2</option>
														    	<option value="3">3</option>
														    	<option value="4">4</option>
														    </select>
														    
														</div>
												      	<div class="form-group">
														    <label for="theme-type">Copyright Content</label>
														    <p><small>Add a custom copyright text at the bottom of your site. eg:</small></p>
														    <input type="text" name="footer_content" class="form-control">
														    
														</div>
														<div class="ln_solid"></div>
														<div class="form-group">
															<div class="col-md-6 col-sm-6 col-xs-12">
				                                                <button type="submit" class="btn btn-success">Save Changes</button>
				                                            </div>
														</div>
											      	</form>	
												</div>
										      	
										    </aside>
										</div>	
						      		</div>
							    </div>
							    <!-- / Third Tab -->

							    <!-- Fourth Tab -->
							    <div class="tab-pane" id="google-services">
							    	<div class="row">
						      			<div class="col-md-8">
											<aside class="panel panel-default">

												<div class="panel-body">
													<form id="frm-general-settings" class="form-label-left maven-form">
												      	<div class="form-group">
														    <label for="theme-type">Google Map API</label>
														    <input type="text" name="g_api" class="form-control">
														    
														</div>
														<div class="ln_solid"></div>
														<div class="form-group">
															<div class="col-md-6 col-sm-6 col-xs-12">
				                                                <button type="submit" class="btn btn-success">Save Changes</button>
				                                            </div>
														</div>
											      	</form>	
												</div>
										      	
										    </aside>
										</div>	
						      		</div>
							    </div>
							    <!-- / Fourth Tab -->

							    <!-- / Tab panes -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<br class="clear">
		</div>

	<?php
}