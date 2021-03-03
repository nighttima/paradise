<?php 
add_action( 'wp_enqueue_scripts', 'paradise_style' );
function paradise_style() {
	//wp_enqueue_style( 'style-2', get_template_directory_uri() . '/assets/css/name.css' );
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	//wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}