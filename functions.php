<?php

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 250, 250, true );


function theme_setup() {

	add_theme_support( 
		'custom-background', 
		array( 'default-color' => 'f9f9f9' ) 
	);

	add_theme_support( 'custom-header' );

}
add_action( 'after_setup_theme', 'theme_setup' );
