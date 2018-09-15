<?php
/**
 * Custom post types for this theme.
 *
 * @package WP_Ogitive
 */

// Register Custom Post Type
function custom_post_type() {

	// $labels = array(
	// 	'name'                => _x( 'Custom Post Type', 'Post Type General Name', 'wpog' ),
	// 	'singular_name'       => _x( 'Custom Post Type', 'Post Type Singular Name', 'wpog' ),
	// 	'menu_name'           => __( 'Custom Post Type', 'wpog' ),
	// 	'parent_item_colon'   => __( 'Custom Post Type parent:', 'wpog' ),
	// 	'all_items'           => __( 'All Items', 'wpog' ),
	// 	'view_item'           => __( 'View Item', 'wpog' ),
	// 	'add_new_item'        => __( 'Add New Item', 'wpog' ),
	// 	'add_new'             => __( 'Add Item', 'wpog' ),
	// 	'edit_item'           => __( 'Edit Item', 'wpog' ),
	// 	'update_item'         => __( 'Update Item', 'wpog' ),
	// 	'search_items'        => __( 'Search Item', 'wpog' ),
	// 	'not_found'           => __( 'Item is not found', 'wpog' ),
	// 	'not_found_in_trash'  => __( 'Item is not found in trash', 'wpog' ),
	// );
	// $args = array(
	// 	'label'               => __( 'cpt', 'wpog' ),
	// 	'description'         => __( 'Description', 'wpog' ),
	// 	'labels'              => $labels,
	// 	'supports'            => array( 'title', 'editor', 'thumbnail', ),
	// 	// 'taxonomies'          => array( 'custom_taxnomy' ),	
	// 	'hierarchical'        => false,
	// 	'public'              => true,
	// 	'show_ui'             => true,
	// 	'show_in_menu'        => true,
	// 	'show_in_nav_menus'   => true,
	// 	'show_in_admin_bar'   => true,
	// 	'menu_position'       => 100,
	// 	'menu_icon'           => 'dashicons-slides',
	// 	'can_export'          => true,
	// 	'has_archive'         => true,
	// 	'exclude_from_search' => false,
	// 	'publicly_queryable'  => true,
	// 	'capability_type'     => 'post',
	// );
	// register_post_type( 'cpt', $args );

	$labels = array(
		'name'                => _x( 'Tutorial', 'Post Type General Name', 'wpog' ),
		'singular_name'       => _x( 'Tutorial', 'Post Type Singular Name', 'wpog' ),
		'menu_name'           => __( 'Tutorial', 'wpog' ),
		'parent_item_colon'   => __( 'Slide parent:', 'wpog' ),
		'all_items'           => __( 'All Tutorial', 'wpog' ),
		'view_item'           => __( 'View Tutorial', 'wpog' ),
		'add_new_item'        => __( 'Add New Tutorial', 'wpog' ),
		'add_new'             => __( 'Add Tutorial', 'wpog' ),
		'edit_item'           => __( 'Edit Tutorial', 'wpog' ),
		'update_item'         => __( 'Update Tutorial', 'wpog' ),
		'search_items'        => __( 'Search Tutorial', 'wpog' ),
		'not_found'           => __( 'Tutorial is not found', 'wpog' ),
		'not_found_in_trash'  => __( 'Tutorial is not found in trash', 'wpog' ),
	);
	$args = array(
		'label'               => __( 'tutorial', 'wpog' ),
		'description'         => __( 'tutorial description', 'wpog' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor','thumbnail' ),
		// 'taxonomies'          => array( 'custom_taxnomy' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-images-alt2',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'tutorial', $args );


}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );