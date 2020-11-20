<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Работы.
	 */

	$labels = [
		"name" => __( "Работы", "gb_headless" ),
		"singular_name" => __( "Работа", "gb_headless" ),
	];

	$args = [
		"label" => __( "Работы", "gb_headless" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "work",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "work", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "post-formats" ],
	];

	register_post_type( "work", $args );

	/**
	 * Post Type: Отзывы клиентов.
	 */

	$labels = [
		"name" => __( "Отзывы клиентов", "gb_headless" ),
		"singular_name" => __( "Отзыв Клиента", "gb_headless" ),
	];

	$args = [
		"label" => __( "Отзывы клиентов", "gb_headless" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "client_review",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "client_review", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "client_review", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
