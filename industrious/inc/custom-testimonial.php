<?php
// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonial', 'Post Type General Name', 'industrious' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'industrious' ),
		'menu_name' => _x( 'Testimonial', 'Admin Menu text', 'industrious' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'industrious' ),
		'archives' => __( 'Testimonial Archives', 'industrious' ),
		'attributes' => __( 'Testimonial Attributes', 'industrious' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'industrious' ),
		'all_items' => __( 'All Testimonial', 'industrious' ),
		'add_new_item' => __( 'Add New Testimonial', 'industrious' ),
		'add_new' => __( 'Add New', 'industrious' ),
		'new_item' => __( 'New Testimonial', 'industrious' ),
		'edit_item' => __( 'Edit Testimonial', 'industrious' ),
		'update_item' => __( 'Update Testimonial', 'industrious' ),
		'view_item' => __( 'View Testimonial', 'industrious' ),
		'view_items' => __( 'View Testimonial', 'industrious' ),
		'search_items' => __( 'Search Testimonial', 'industrious' ),
		'not_found' => __( 'Not found', 'industrious' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'industrious' ),
		'featured_image' => __( 'Featured Image', 'industrious' ),
		'set_featured_image' => __( 'Set featured image', 'industrious' ),
		'remove_featured_image' => __( 'Remove featured image', 'industrious' ),
		'use_featured_image' => __( 'Use as featured image', 'industrious' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'industrious' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'industrious' ),
		'items_list' => __( 'Testimonial list', 'industrious' ),
		'items_list_navigation' => __( 'Testimonial list navigation', 'industrious' ),
		'filter_items_list' => __( 'Filter Testimonial list', 'industrious' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'industrious' ),
		'description' => __( '', 'industrious' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-cloud',
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
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );
