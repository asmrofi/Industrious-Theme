<?php
// Register Custom Post Type Highlights
function create_highlights_cpt() {

	$labels = array(
		'name' => _x( 'Highlights', 'Post Type General Name', 'industrious' ),
		'singular_name' => _x( 'Highlights', 'Post Type Singular Name', 'industrious' ),
		'menu_name' => _x( 'Highlights', 'Admin Menu text', 'industrious' ),
		'name_admin_bar' => _x( 'Highlights', 'Add New on Toolbar', 'industrious' ),
		'archives' => __( 'Highlights Archives', 'industrious' ),
		'attributes' => __( 'Highlights Attributes', 'industrious' ),
		'parent_item_colon' => __( 'Parent Highlights:', 'industrious' ),
		'all_items' => __( 'All Highlights', 'industrious' ),
		'add_new_item' => __( 'Add New Highlights', 'industrious' ),
		'add_new' => __( 'Add New', 'industrious' ),
		'new_item' => __( 'New Highlights', 'industrious' ),
		'edit_item' => __( 'Edit Highlights', 'industrious' ),
		'update_item' => __( 'Update Highlights', 'industrious' ),
		'view_item' => __( 'View Highlights', 'industrious' ),
		'view_items' => __( 'View Highlights', 'industrious' ),
		'search_items' => __( 'Search Highlights', 'industrious' ),
		'not_found' => __( 'Not found', 'industrious' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'industrious' ),
		'featured_image' => __( 'Featured Image', 'industrious' ),
		'set_featured_image' => __( 'Set featured image', 'industrious' ),
		'remove_featured_image' => __( 'Remove featured image', 'industrious' ),
		'use_featured_image' => __( 'Use as featured image', 'industrious' ),
		'insert_into_item' => __( 'Insert into Highlights', 'industrious' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Highlights', 'industrious' ),
		'items_list' => __( 'Highlights list', 'industrious' ),
		'items_list_navigation' => __( 'Highlights list navigation', 'industrious' ),
		'filter_items_list' => __( 'Filter Highlights list', 'industrious' ),
	);
	$args = array(
		'label' => __( 'Highlights', 'industrious' ),
		'description' => __( '', 'industrious' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-album',
		'supports' => array('title', 'editor', 'revisions'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'highlights', $args );

}
add_action( 'init', 'create_highlights_cpt', 0 );
