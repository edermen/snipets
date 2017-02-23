<?php
/**
 * User: DEVELOPER-ONE
 * Date: 23.02.2017
 * Time: 9:47
 */

// Enque scripts
function theme_add_scripts(){
	wp_enqueue_script( 'montage', get_template_directory_uri() . '/js/jquery.montage.min.js', array('jquery'), '3.3.7', true );
}
add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );

// admin script
function theme_admin_add_scripts() {
	wp_enqueue_style( 'some-admin', get_template_directory_uri() . '/inc/css/admin-style.css', array(), '1.0' );
}
add_action( 'admin_enqueue_scripts', 'theme_admin_add_scripts' );