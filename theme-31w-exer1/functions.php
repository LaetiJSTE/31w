<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


function mon_31W_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array('search-form') );	
	add_theme_support('custom-background');
	register_nav_menus( array(
		'sidebar_menu' => __( 'Sidebar Menu', 'mon_31W' ),
		'footer_menu'  => __( 'Footer Menu', 'mon_31W' ),
	) );	
}
add_action( 'after_setup_theme', 'mon_31W_setup' );

	function mon_31W_enqueue(){
		wp_enqueue_style(	'mon_31W-style',
							get_stylesheet_uri(),
							array(),
							filemtime(get_template_directory() . '/style.css'));
		wp_enqueue_style(	'31W-google-font', 
						  	'https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap',
						  	false);
	}
	add_action('wp_enqueue_scripts', 'mon_31W_enqueue');




