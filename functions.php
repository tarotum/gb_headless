<?php
/**
 * gb_headless functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gb_headless
 */

add_filter('acf/update_value/name=work_order', 'my_acf_update_value', 10, 3);
function my_acf_update_value($value, $post_id, $field) {
  if (empty($value)) {
    $value = $field['default_value'];
  }
  return $value;
}

add_filter('acf/format_value/name=project', 'empty_project_value', 10, 3);
function empty_project_value($value, $post_id, $field) {
  if (empty($value)) {
    return null;
  }
  return $value;
}

if (!function_exists('acf_nullify_empty')) {
    /**
     * Return `null` if an empty value is returned from ACF.
     *
     * @param mixed $value
     * @param mixed $post_id
     * @param array $field
     *
     * @return mixed
     */
    function acf_nullify_empty($value, $post_id, $field) {
        if (empty($value)) {
            return null;
        }
        return $value;
    }
}

// add_filter('acf/format_value', 'acf_nullify_empty', 100, 3);

function gb_headless_thumbnails() {
    add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link' ) );
}
add_action( 'after_setup_theme', 'gb_headless_thumbnails' );

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
