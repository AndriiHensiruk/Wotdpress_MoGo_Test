<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');

add_action( 'wp_enqueue_scripts',function () {


	wp_enqueue_style( 'fonts', get_template_directory_uri() .'/assets/fonts/fonts.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() .'/assets/scss/css/style.css' );
	wp_enqueue_style( 'icon', get_template_directory_uri() .'/assets/img/atom.svg' );


	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery',  get_template_directory_uri() . '/assets/js/jquery-3.6.1.min.js');

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js');
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js');
	wp_enqueue_script( 'anonymous', 'https://kit.fontawesome.com/cb3098e1fc.js');
});


add_theme_support('title-tag');
add_theme_support('custom-logo');

?>