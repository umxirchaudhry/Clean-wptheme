<?php

function clean_files() {
	wp_enqueue_style( 'Custom-Google-Font', '' );
	wp_enqueue_script( 'font-awesome', '//kit.fontawesome.com/a3112015b5.js' );
	wp_enqueue_style( 'theme_main_css', 'get_stylesheet_uri()');
	wp_enqueue_style( 'bs4-css', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
	wp_enqueue_script( 'B4-jquery', '/code.jquery.com/jquery-3.3.1.slim.min.js');
	// wp_enqueue_script( 'B4-popper', '/code.jquery.com/jquery-3.3.1.slim.min.js');
	wp_enqueue_script( 'B4-js', '/code.jquery.com/jquery-3.3.1.slim.min.js');
	

}

add_action('wp_enqueue_scripts', 'clean_files' );

function clean_features () {
	add_theme_support( 'title-tag' );

}

add_action('after_setup_theme', 'clean_features' );

?>