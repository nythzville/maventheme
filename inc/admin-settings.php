<?php
/*
* Theme Settings
*/

function add_settings_menu() {
	add_menu_page('Maven Settings', 'Maven Settings', 1, 'maven-settings', 'maven_settings', 'dashicons-admin-generic', 2);
}

add_action('admin_menu', 'add_settings_menu');


// Ajax saving Scripts
wp_enqueue_script( 'ajax-admin-settings', get_template_directory_uri() . '/assets/js/ajax-admin-settings.js', array('jquery'), '1.0', true );
wp_localize_script( 'ajax-admin-settings', 'Maven', array(
// URL to wp-admin/admin-ajax.php to process the request
'ajaxurl' => admin_url( 'admin-ajax.php' ),
// generate a nonce with a unique ID "myajax-post-comment-nonce"
// so that you can check it later when an AJAX request is sent
'security' => wp_create_nonce( 'random-security-string' )
	));

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
						    <li><a href="#appearance" data-toggle="tab">Appearance</a></li>
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
														    <select class="form-control" id="theme-type" name="theme_type">
														    <?php $theme_type = get_option('theme_type'); ?>
														    	<option value="portfolio" <?php echo ($theme_type == "portfolio") ? "selected" : "" ?>>Portfolio</option>
														    	<option value="hospitality" <?php echo ($theme_type == "hospitality") ? "selected" : "" ?>>Hospitality</option>
														    	<option value="realestate" <?php echo ($theme_type == "realestate") ? "selected" : "" ?>>Real Estate</option>

														    </select>
														    
														</div>
														<div class="form-group">
															<?php
															/* 
															*	Get Logo URL
															*/
															$logo_url = get_option('logo_url');
															?>
														    <label for="theme-type">Logo</label>
														    <p><small>Upload a logo image, or enter the URL of an image if its already uploaded. The themes default logo gets applied if the input field is left blank.</small></p>
													    	<div class="logo-container">
														    	<div class="row">
														    		<div class="col-md-8">
															    		<input type="text" name="logo_url" class="form-control custom-img-url" value="<?php echo $logo_url ?>">
														    		</div>
														    		<div class="columns-4">
														    			<button class="btn btn-info upload-button <?php echo ($logo_url != "")? "hidden" : "" ?>">Upload Image</button>
															    		<button class="btn btn-warning remove-image <?php echo ($logo_url != "")? "" : "hidden" ?>" >Remove Image</button>
														    		</div>	
														    	</div>
														    	<div class="row">
														    		<div class="col-md-12">
															    		<div class="custom-img-container"><img src="<?php echo get_option('logo_url'); ?>" alt="" style="max-width:100%;"></div>
														    		</div>
													    		</div>
													    	</div>
														</div>
														<div class="form-group">
															<?php
															/*
															*	Get Favicon URL
															*/
															$favicon_url = get_option('favivon_url');
															?>
														    <label for="theme-type">Favicon</label>
														    <p><small>Specify a favicon for your site. Accepted formats: .ico, .png, .gif </small></p>
													    	<div class="logo-container">
														    	<div class="row">
														    		<div class="col-md-8">
															    		<input type="text" name="favicon_url" class="form-control custom-img-url" value="<?php echo $favicon_url ?>">
														    		</div>
														    		<div class="columns-4">
														    			<button class="btn btn-info upload-button <?php echo ($favicon_url != "")? "hidden" : "" ?>">Upload Image</button>
															    		<button class="btn btn-warning remove-image <?php echo ($favicon_url != "")? "" : "hidden" ?>" >Remove Image</button>
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
														    <label for="custom-css">Custom CSS</label>

															<textarea class="custom-css" name="custom_css" rows="10" class="form-control"><?php echo get_option('custom_css'); ?></textarea>
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
							    <div class="tab-pane" id="appearance">
							      	<div class="row">
						      			<div class="col-md-8">
											<aside class="panel panel-default">

												<div class="panel-body">
											      	<form id="frm-color-settings" class="form-label-left maven-form">
												      	<div class="form-group row">
												      		<div class="col-md-6">
												      			<label for="primary_colortheme">Primary Color</label>
												      			<p><small>Most Dominant Color on your website.</small></p>
												      		</div>
												      		<div class="col-md-6">
												      			<input type="text" class="form-control maven-colorpicker" name="primary_color" value="#999999">
												      		</div>
												      	</div>
												      	<div class="form-group row">
												      		<div class="col-md-6">
												      			<label for="maven_background_color">Background Color</label>
													      		<p><small>Select website background color.</small></p>

												      		</div>
												      		<div class="col-md-6">
												      			<input type="text" class="form-control maven-colorpicker" name="maven_background_color" value="#999999">
												      		</div>

												      	</div>
												      	<div class="form-group row">
												      		<div class="col-md-6">
												      			<label for="maven_font_color">Defualt Font Color</label>
												      			<p><small>Anchor link colors</small></p>

												      		</div>
												      		<div class="col-md-6">
												      			<input type="text" class="form-control maven-colorpicker" name="maven_font_color" value="#999999">
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

/** 
* Saving General Settings
*/
function save_general_settings(){

	// Saving theme Type
	if(isset($_REQUEST['theme_type'])){
		update_option( 'theme_type', $_REQUEST['theme_type']);
	}

	// Saving Logo URL
	if(isset($_REQUEST['logo_url'])){
		update_option( 'logo_url', $_REQUEST['logo_url']);
	}
	
	// Saving Favicon URL
	if(isset($_REQUEST['favicon_url'])){
		update_option( 'favicon_url', $_REQUEST['favicon_url']);
	}

	// Saving Custom CSS
	if(isset($_REQUEST['custom_css'])){
		update_option( 'custom_css', $_REQUEST['custom_css']);
	}

	exit();
}

/** 
* Saving Color Settings
*/
function save_color_settings(){

	// Saving Primary Color
	// if(isset($_REQUEST['primary_color'])){
	// 	update_option( 'primary_color', $_REQUEST['primary_color']);
	// }

	// // Saving Background Color
	// if(isset($_REQUEST['maven_background_color'])){
	// 	update_option( 'maven_background_color', $_REQUEST['maven_background_color']);
	// }
	
	// // Saving font Color
	// if(isset($_REQUEST['maven_font_color'])){
	// 	update_option( 'maven_font_color', $_REQUEST['maven_font_color']);
	// }
	var_dump($_REQUEST);

	exit();
}

add_action( 'wp_ajax_save_color_settings','save_color_settings');