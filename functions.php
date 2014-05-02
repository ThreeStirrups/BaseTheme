<?php

//* Enqueue Lato Google font
add_action( 'wp_enqueue_scripts', 'base_theme_google_fonts' );
function base_theme_google_fonts() {
	wp_enqueue_style( 'google-font-lato', '//fonts.googleapis.com/css?family=Lato:300,700', array(), CHILD_THEME_VERSION );
}

//register header right widget