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
	wp_enqueue_style('bootstrap-min-css', get_template_directory_uri(). '/bootstrap/css/bootstrap.beautified.css');
	wp_enqueue_script('bootstrap-min-js', get_template_directory_uri(). '/bootstrap/js/bootstrap.min.js');

	// Color Picker 
	wp_enqueue_style( 'wp-color-picker' );
	
	// Maven Script and style

	wp_enqueue_media();
	wp_enqueue_script('maven-admin-js', get_template_directory_uri(). '/admin/js/admin.js',array( 'wp-color-picker' ), false, true );
	wp_enqueue_style('maven-admin-css', get_template_directory_uri(). '/assets/css/admin-style.css');

}
	

add_action( 'admin_enqueue_scripts', 'admin_scripts' );


/**
 * Maven Theme Settings.
 */
require get_parent_theme_file_path( '/inc/admin-settings.php' );

/**
 * Main menu.
 */
require get_parent_theme_file_path( '/inc/primary-page.php' );
