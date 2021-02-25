<?php
/**
 * Core Public Functions
 *
 * @package    Core_Functionality
 * @since      0.1.1
 * @license    GPL-2.0+
 */
namespace Patrizia_Lutz\Custom_Post_Types;

/**
 * Register Forms
 * 
 * @since   0.1.1
 *
 * @return void
 */
function register_form() {

	$labels = array(
		'name'                  => _x( 'Forms', 'Form General Name', 'core-functionality' ),
		'singular_name'         => _x( 'Form', 'Form Singular Name', 'core-functionality' ),
		'menu_name'             => __( 'Forms', 'core-functionality' ),
		'name_admin_bar'        => __( 'Form', 'core-functionality' ),
		'archives'              => __( 'Form Archives', 'core-functionality' ),
		'attributes'            => __( 'Form Attributes', 'core-functionality' ),
		'parent_item_colon'     => __( 'Parent Form:', 'core-functionality' ),
		'all_items'             => __( 'All Forms', 'core-functionality' ),
		'add_new_item'          => __( 'Add New Form', 'core-functionality' ),
		'add_new'               => __( 'Add New', 'core-functionality' ),
		'new_item'              => __( 'New Form', 'core-functionality' ),
		'edit_item'             => __( 'Edit Form', 'core-functionality' ),
		'update_item'           => __( 'Update Form', 'core-functionality' ),
		'view_item'             => __( 'View Form', 'core-functionality' ),
		'view_items'            => __( 'View Forms', 'core-functionality' ),
		'search_items'          => __( 'Search Form', 'core-functionality' ),
		'not_found'             => __( 'Not found', 'core-functionality' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'core-functionality' ),
		'featured_image'        => __( 'Featured Image', 'core-functionality' ),
		'set_featured_image'    => __( 'Set featured image', 'core-functionality' ),
		'remove_featured_image' => __( 'Remove featured image', 'core-functionality' ),
		'use_featured_image'    => __( 'Use as featured image', 'core-functionality' ),
		'insert_into_item'      => __( 'Insert into item', 'core-functionality' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'core-functionality' ),
		'items_list'            => __( 'Forms list', 'core-functionality' ),
		'items_list_navigation' => __( 'Forms list navigation', 'core-functionality' ),
		'filter_items_list'     => __( 'Filter items list', 'core-functionality' ),
	);
	$args = array(
		'label'                 => __( 'Response', 'core-functionality' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-feedback',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	\register_post_type( 'form-response', $args );

}
\add_action( 'init', __NAMESPACE__ . '\register_form', 0 );

/**
 * Register Project Post Type
 * 
 * @since   0.1.1
 *
 * @return void
 */
function register_project() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'core-functionality' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'core-functionality' ),
		'menu_name'             => __( 'Projects', 'core-functionality' ),
		'name_admin_bar'        => __( 'Project', 'core-functionality' ),
		'archives'              => __( 'Project Archives', 'core-functionality' ),
		'attributes'            => __( 'Project Attributes', 'core-functionality' ),
		'parent_item_colon'     => __( 'Parent Project:', 'core-functionality' ),
		'all_items'             => __( 'All Projects', 'core-functionality' ),
		'add_new_item'          => __( 'Add New Project', 'core-functionality' ),
		'add_new'               => __( 'Add New', 'core-functionality' ),
		'new_item'              => __( 'New Project', 'core-functionality' ),
		'edit_item'             => __( 'Edit Project', 'core-functionality' ),
		'update_item'           => __( 'Update Project', 'core-functionality' ),
		'view_item'             => __( 'View Project', 'core-functionality' ),
		'view_items'            => __( 'View Projects', 'core-functionality' ),
		'search_items'          => __( 'Search Project', 'core-functionality' ),
		'not_found'             => __( 'Not found', 'core-functionality' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'core-functionality' ),
		'featured_image'        => __( 'Featured Image', 'core-functionality' ),
		'set_featured_image'    => __( 'Set featured image', 'core-functionality' ),
		'remove_featured_image' => __( 'Remove featured image', 'core-functionality' ),
		'use_featured_image'    => __( 'Use as featured image', 'core-functionality' ),
		'insert_into_item'      => __( 'Insert into item', 'core-functionality' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'core-functionality' ),
		'items_list'            => __( 'Projects list', 'core-functionality' ),
		'items_list_navigation' => __( 'Projects list navigation', 'core-functionality' ),
		'filter_items_list'     => __( 'Filter items list', 'core-functionality' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'core-functionality' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rest_base'             => 'projects',
	);
	\register_post_type( 'project', $args );

}
\add_action( 'init', __NAMESPACE__ . '\register_project', 0 );