<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);

	wp_register_script('default-theme-scripts', get_stylesheet_directory_uri() . '/script.js', array( 'jquery' ), '1.0');
	wp_enqueue_script('default-theme-scripts');
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts' );

//Pour désactiver les titres dans les pages
function ele_disable_page_title( $return ) {
   return false;
}
add_filter( 'hello_elementor_page_title', 'ele_disable_page_title' );
