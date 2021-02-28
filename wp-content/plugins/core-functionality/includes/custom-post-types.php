<?php
/**
 * Core Public Functions
 *
 * @package    Core_Functionality
 * @since      0.1.1
 * @license    GPL-2.0+
 */
namespace Core_Functionality\Custom_Post_Types;

/**
 * Register Responses
 * 
 * @since   0.1.1
 *
 * @return void
 */
function register_response() {

	$labels = array(
		'name'                  => _x( 'Responses', 'Response General Name', 'core-functionality' ),
		'singular_name'         => _x( 'Response', 'Response Singular Name', 'core-functionality' ),
		'menu_name'             => __( 'Responses', 'core-functionality' ),
		'name_admin_bar'        => __( 'Response', 'core-functionality' ),
		'archives'              => __( 'Response Archives', 'core-functionality' ),
		'attributes'            => __( 'Response Attributes', 'core-functionality' ),
		'parent_item_colon'     => __( 'Parent Response:', 'core-functionality' ),
		'all_items'             => __( 'All Responses', 'core-functionality' ),
		'add_new_item'          => __( 'Add New Response', 'core-functionality' ),
		'add_new'               => __( 'Add New', 'core-functionality' ),
		'new_item'              => __( 'New Response', 'core-functionality' ),
		'edit_item'             => __( 'Edit Response', 'core-functionality' ),
		'update_item'           => __( 'Update Response', 'core-functionality' ),
		'view_item'             => __( 'View Response', 'core-functionality' ),
		'view_items'            => __( 'View Responses', 'core-functionality' ),
		'search_items'          => __( 'Search Response', 'core-functionality' ),
		'not_found'             => __( 'Not found', 'core-functionality' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'core-functionality' ),
		'featured_image'        => __( 'Featured Image', 'core-functionality' ),
		'set_featured_image'    => __( 'Set featured image', 'core-functionality' ),
		'remove_featured_image' => __( 'Remove featured image', 'core-functionality' ),
		'use_featured_image'    => __( 'Use as featured image', 'core-functionality' ),
		'insert_into_item'      => __( 'Insert into item', 'core-functionality' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'core-functionality' ),
		'items_list'            => __( 'Responses list', 'core-functionality' ),
		'items_list_navigation' => __( 'Responses list navigation', 'core-functionality' ),
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
		'rest_base'				=> 'responses',
		'show_in_graphql'		=> true,
		'graphql_single_name'	=> 'response',
		'graphql_plural_name'	=> 'responses'
	);
	\register_post_type( 'form-response', $args );

}
\add_action( 'init', __NAMESPACE__ . '\register_response', 0 );

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
		'show_in_graphql'		=> true,
		'graphql_single_name'	=> 'project',
		'graphql_plural_name'	=> 'projects'

	);
	\register_post_type( 'project', $args );

}
\add_action( 'init', __NAMESPACE__ . '\register_project', 0 );

/**
 * Add Portfolio to GraphQl
 * 
 * @param array $args
 * @param string $post_type
 * @return array $args - maybe modified
 */
function register_post_type_args( $args, $post_type ) {
	if ( 'jetpack-portfolio' === $post_type ) { 
		$args['show_in_graphql'] = true;
		$args['graphql_single_name'] = 'portfolio';
		$args['graphql_plural_name'] = 'portfolios';
		$args['supports'][] = 'page-attributes';
	}

	return $args;
}
add_filter( 'register_post_type_args', __NAMESPACE__ . '\register_post_type_args', 10, 2 );

/**
 * Register Portfolio Taxonomy to GraphQL
 * 
 * @param array $args
 * @param string $taxonomy
 * @return array $args maybe modified
 */
function register_taxonomy_args( $args, $taxonomy ) {
	if ( 'jetpack-portfolio-type' === $taxonomy ) {
		$args['show_in_graphql'] = true;
		$args['graphql_single_name'] = 'portfolioType';
		$args['graphql_plural_name'] = 'portfolioTypes';
	}
	
	if ( 'jetpack-portfolio-tag' === $taxonomy ) {
		$args['show_in_graphql'] = true;
		$args['graphql_single_name'] = 'portfolioTag';
		$args['graphql_plural_name'] = 'portfolioTags';
	}

	return $args;
}
\add_filter( 'register_taxonomy_args', __NAMESPACE__ . '\register_taxonomy_args', 10, 2 );
