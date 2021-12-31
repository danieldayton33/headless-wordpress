<?php

function register_book_post_type() {
	$labels = array(
		'name'          => __( 'Books', 'dd' ),
		'singular_name' => __( 'Books', 'dd' ),
	);

	$args = array(
		'label'                 => __( 'Books', 'dd' ),
		'labels'                => $labels,
		'description'           => '',
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_rest'          => true,
		'rest_base'             => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'has_archive'           => false,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'delete_with_user'      => false,
		'exclude_from_search'   => false,
		'capability_type'       => 'post',
		'map_meta_cap'          => true,
		'hierarchical'          => false,
		'query_var'             => true,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'menu_icon'             => 'dashicons-book',
		'show_in_graphql'       => true,
		'graphql_single_name'   => 'book',
		'graphql_plural_name'   => 'books',
	);

	register_post_type( 'books', $args );
}


add_action( 'init', 'register_book_post_type' );

