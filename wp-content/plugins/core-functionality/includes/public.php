<?php
/**
 * Core Public Functions
 *
 * @package    Core_Functionality
 * @since      0.1.0
 * @license    GPL-2.0+
 */
namespace Patrizia_Lutz\Includes;

/**
 * Enqueue Scripts
 *
 * @uses wp_enqueue_style()
 * @uses wp_enqueue_scripts filter
 *
 * @return null
 */
function enqueue_scripts() {
    \wp_enqueue_style( 'patricia-lutz-custom', PATRICIA_LUTZ_CORE_URL . 'assets/css/public.css' );
}
\add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts' );

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

/**
 * Modify ACF Settings
 * 
 * @return void
 */
function acf_init() {
	\acf_update_setting( 'remove_wp_meta_box', false );	
	\acf_update_setting( 'l10n_textdomain', 'core-functionality' );
	\acf_update_setting( 'save_json', PATRICIA_LUTZ_CORE_DIR . '/data' );
	\acf_update_setting( 'load_json', PATRICIA_LUTZ_CORE_DIR . '/data' );
}
\add_action( 'acf/init', __NAMESPACE__ . '\acf_ini' );

//      company
// 		 url
// 		 location
// 		 start_date
// 		 end_date
// 		 clients

function graphql_register_types() {
	\register_graphql_field( 'Portfolio', 'company', [
       'type' 			=> 'string',
       'description' 	=> __( 'The company worked for', 'core-functionality' ),
       'resolve' 		=> function( $post ) {
			$field = \get_post_meta( $post->ID, 'company', true );
			 return ! empty( $field ) ? $field : '';
       }
    ] );
	\register_graphql_field( 'Portfolio', 'url', [
       'type' 			=> 'string',
       'description' 	=> __( 'The company URL', 'core-functionality' ),
       'resolve' 		=> function( $post ) {
			$field = \get_post_meta( $post->ID, 'url', true );
			 return ! empty( $field ) ? $field : '';
       }
    ] );
	\register_graphql_field( 'Portfolio', 'location', [
       'type' 			=> 'string',
       'description' 	=> __( 'The company location', 'core-functionality' ),
       'resolve' 		=> function( $post ) {
			$field = \get_post_meta( $post->ID, 'location', true );
			 return ! empty( $field ) ? $field : '';
       }
    ] );
	\register_graphql_field( 'Portfolio', 'clients', [
       'type' 			=> 'string',
       'description' 	=> __( 'The clients', 'core-functionality' ),
       'resolve' 		=> function( $post ) {
			$field = \get_post_meta( $post->ID, 'clients', true );
			 return ! empty( $field ) ? $field : '';
       }
    ] );
	\register_graphql_field( 'Portfolio', 'sortOrder', [
       'type' 			=> 'string',
       'description' 	=> __( 'Order to display posts', 'core-functionality' ),
       'resolve' 		=> function( $post ) {
			$field = \get_post_meta( $post->ID, 'sort_order', true );
			return ! empty( $field ) ? $field : '';
       }
    ] );
}
\add_action( 'graphql_register_types', __NAMESPACE__ . '\graphql_register_types' );

\register_meta( 'post', 'sort_order', [
	'object_subtype'	=> 'jetpack-portfolio',
	'single'			=> true,
	'type' 				=> 'number',
	'show_in_rest' 		=> true,
	'show_in_graphql'	=> true
]);

/**
 * Update Post Meta
 * 
 * @param
 * @param
 * @return voide
 */
function save_meta( $post_id, $post ) {
	$post = get_post( $post_id );
// 	$post_type = get_post_type( $post_id );
	if( 'jetpack-portfolio' !== $post->post_type ) {
		return;
	}
	\update_post_meta( $post_id, 'sort_order', $post->menu_order );
}
\add_action( 'save_post', __NAMESPACE__ . '\save_meta', 20, 2 );





// if (isset($_SERVER['HTTP_ORIGIN'])) {
//     //header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
//     header("Access-Control-Allow-Origin: *");
//     header('Access-Control-Allow-Credentials: true');    
//     header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
// }   
// if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
//     if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
//         header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
//     if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
//         header("Access-Control-Allow-Headers:{$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

//     exit(0);
// } 

// add_action( 'rest_api_init', function()
// {
//     header( "Access-Control-Allow-Origin: *" );
// } );

