<?php

add_action( 'wp_enqueue_scripts', 'fenomen_style' );
add_action( 'wp_enqueue_scripts', 'fenomen_scripts' );
add_action( 'after_setup_theme', 'coffe_setup_theme' );
function coffe_setup_theme() {
	register_nav_menu('menu-header', 'Menu navigation');
}


function fenomen_style() {
   // wp_enqueue_style('magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}


function fenomen_scripts() {
   wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
   wp_enqueue_script( 'libs-script', get_template_directory_uri() .'/assets/js/libs.min.js', array(jquery), null, true );
   wp_enqueue_script( 'main-script', get_template_directory_uri() .'/assets/js/main.js', array(jquery), null, true );
}

