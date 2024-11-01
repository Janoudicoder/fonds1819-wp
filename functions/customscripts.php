<?php

//VOEG EIGEN SCRIPTS TOE AAN WORDPRESS
function sitework_scripts() {
	//CSS SCRIPTS
	wp_enqueue_style( 'tailwind-dist', get_stylesheet_directory_uri() . '/css/tailwind-dist.css', array(), null);
    wp_enqueue_style( 'stylesheet.min', get_stylesheet_directory_uri() . '/css/stylesheet.css', array(), null);
	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/fa/css/all.min.css', array(), null);
	wp_enqueue_style( 'magnific-popup', get_stylesheet_directory_uri() . '/magnific/magnific-popup.css', array(), null);
	// js scripts
   	wp_enqueue_script('sitework-dist', get_template_directory_uri() . '/jquery/sitework-dist.js', array('jquery'),null, true);
}
add_action( 'wp_enqueue_scripts', 'sitework_scripts' );