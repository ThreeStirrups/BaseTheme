<?php

//* Enqueue Lato Google font
add_action( 'wp_enqueue_scripts', 'base_theme_styles_scripts' );
function base_theme_styles_scripts() {
	wp_enqueue_style( 'google-font-lato', '//fonts.googleapis.com/css?family=Lato:300,700', array(), CHILD_THEME_VERSION );
    // Loads our main stylesheet.
    wp_enqueue_style( 'base-theme-style', get_stylesheet_uri() );
}

// Add .entry to post class
add_filter('post_class', 'add_entry_class');
function add_entry_class($classes) {
    $classes[] = 'entry';
    return $classes;
}

//register header right widget