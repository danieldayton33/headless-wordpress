<?php

function dd_setup_headless_theme() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'dd_setup_headless_theme' );


add_action(
	'init',
	function () {
		register_nav_menu( 'main-nav', __( 'Main Nav' ) );
	}
);

// Register Custom Post Types
require_once __DIR__ . '/custom-post-types.php';
add_action(
	'init',
	function () {
		if ( function_exists( 'acf_add_options_page' ) ) {
			acf_add_options_page(
				array(
					'page_title'      => 'Theme Settings',
					'menu_title'      => 'Theme Settings',
					'menu_slug'       => 'theme-settings',
					'capability'      => 'edit_posts',
					'redirect'        => false,
					'show_in_graphql' => true,
					'type'            => 'options_page',
				)
			);
		}
	}
);
