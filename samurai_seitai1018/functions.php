<?php
add_theme_support('post-thumbnails');

function cptui_register_my_cpts_information() {

	/**
	 * Post Type: informations.
	 */

	$labels = [
		"name" => esc_html__( "informations", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "information", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "informations", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "information", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "information", $args );
}

add_action( 'init', 'cptui_register_my_cpts_information' );

function setup_theme() {
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');