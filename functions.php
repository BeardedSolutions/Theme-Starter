<?php

//Get version written in style.css
$theme = wp_get_theme();
define('THEME_VERSION', $theme->Version); 

// Add scripts and stylesheets
function moevyco_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', array(), '4.5.0' );
	wp_enqueue_style('main', get_template_directory_uri().'/style.css', [], THEME_VERSION, 'all');
	wp_enqueue_script( 'fawesome','https://kit.fontawesome.com/9e969584d1.js','',true );
	wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
  	wp_enqueue_script( 'boot2','https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', array( 'jquery' ),'',true );
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/index.js', array(), false, true );
}

add_action( 'wp_enqueue_scripts', 'moevyco_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );

// Featured Images
add_theme_support( 'post-thumbnails' );

//Add SVG Support
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// Menu Support
function register_moevyco_menus() {
    register_nav_menu('primary-menu',__( 'Primary Menu' ));
    register_nav_menu('secondary-menu',__( 'Secondary Menu' ));
}
add_action( 'init', 'register_moevyco_menus' );

//****** WIDGETS ******//

function moevyco_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer 1',
		'id'            => 'footer_1',
    'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4 class="text-white text-uppercase font-weight-light">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Footer 2',
		'id'            => 'footer_2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4 class="text-white text-uppercase font-weight-light">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Footer 3',
		'id'            => 'footer_3',
    'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4 class="text-white text-uppercase font-weight-light">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Footer 4',
		'id'            => 'footer_4',
    'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4 class="text-white text-uppercase font-weight-light">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'moevyco_widgets_init' );


//****** Register Custom Navigation Walker ******//
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//****** ACF Pro Options Page ******//

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}
