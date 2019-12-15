<?php
/**
 * gb_headless functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gb_headless
 */

/**
 * Enqueue scripts and styles.
 */
function gb_headless_scripts() {
	wp_enqueue_style( 'gb_headless-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'gb_headless_scripts' );


/**
 * Include config with required plugins
 */
require get_template_directory() . '/inc/plugin-activation.php';

/**
 * Include custom posts
 */
require get_template_directory() . '/inc/custom-posts.php';