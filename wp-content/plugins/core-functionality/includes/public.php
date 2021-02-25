<?php
/**
 * Core Public Functions
 *
 * @package    Patricia_Lutz_Core_Functionality
 * @subpackage Patricia_Lutz_Core_Functionality\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

/**
 * Enqueue Scripts
 *
 * @uses wp_enqueue_style()
 * @uses wp_enqueue_scripts filter
 *
 * @return null
 */
function patricia_lutz_core_enqueue_scripts() {
    wp_enqueue_style( 'patricia-lutz-custom', PATRICIA_LUTZ_CORE_URL . 'assets/css/public.css' );
}
add_action( 'wp_enqueue_scripts', 'patricia_lutz_core_enqueue_scripts' );

/**
 * Add Portfolio to GraphQl
 * 
 * @param array $args
 * @param string $post_type
 * @return array $args - maybe modified
 */
function patricia_lutz_core_register_post_type_args( $args, $post_type ) {
	if ( 'jetpack-portfolio' === $post_type ) { 
		$args['show_in_graphql'] = true;
		$args['graphql_single_name'] = 'portfolio';
		$args['graphql_plural_name'] = 'portfolios';
		$args['supports'][] = 'page-attributes';
	}

	return $args;
}
add_filter( 'register_post_type_args', 'patricia_lutz_core_register_post_type_args', 10, 2 );

/**
 * Register Portfolio Taxonomy to GraphQL
 * 
 * @param array $args
 * @param string $taxonomy
 * @return array $args maybe modified
 */
function patrizia_lutz_core_register_taxonomy_args( $args, $taxonomy ) {
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
add_filter( 'register_taxonomy_args', 'patrizia_lutz_core_register_taxonomy_args', 10, 2 );

/**
 * Modify ACF Settings
 * 
 * @return void
 */
function patrizia_lutz_core_acf_init() {
	acf_update_setting( 'remove_wp_meta_box', false );	
	acf_update_setting( 'l10n_textdomain', 'core-functionality' );
	acf_update_setting( 'save_json', PATRICIA_LUTZ_CORE_DIR . '/data' );
	acf_update_setting( 'load_json', PATRICIA_LUTZ_CORE_DIR . '/data' );
}
add_action( 'acf/init', 'patrizia_lutz_core_acf_ini' );

//      company
// 		 url
// 		 location
// 		 start_date
// 		 end_date
// 		 clients

function patrizia_lutz_core_graphql_register_types() {
	register_graphql_field( 'Portfolio', 'company', [
       'type' 			=> 'string',
       'description' 	=> __( 'The company worked for', 'core-functionality' ),
       'resolve' 		=> function( $post ) {
			$field = get_post_meta( $post->ID, 'company', true );
			 return ! empty( $field ) ? $field : '';
       }
    ] );
	register_graphql_field( 'Portfolio', 'url', [
       'type' 			=> 'string',
       'description' 	=> __( 'The company URL', 'core-functionality' ),
       'resolve' 		=> function( $post ) {
			$field = get_post_meta( $post->ID, 'url', true );
			 return ! empty( $field ) ? $field : '';
       }
    ] );
	register_graphql_field( 'Portfolio', 'location', [
       'type' 			=> 'string',
       'description' 	=> __( 'The company location', 'core-functionality' ),
       'resolve' 		=> function( $post ) {
			$field = get_post_meta( $post->ID, 'location', true );
			 return ! empty( $field ) ? $field : '';
       }
    ] );
	register_graphql_field( 'Portfolio', 'clients', [
       'type' 			=> 'string',
       'description' 	=> __( 'The clients', 'core-functionality' ),
       'resolve' 		=> function( $post ) {
			$field = get_post_meta( $post->ID, 'clients', true );
			 return ! empty( $field ) ? $field : '';
       }
    ] );
	register_graphql_field( 'Portfolio', 'sortOrder', [
       'type' 			=> 'string',
       'description' 	=> __( 'Order to display posts', 'core-functionality' ),
       'resolve' 		=> function( $post ) {
			$field = get_post_meta( $post->ID, 'sort_order', true );
			return ! empty( $field ) ? $field : '';
       }
    ] );
}
add_action( 'graphql_register_types', 'patrizia_lutz_core_graphql_register_types' );

/**
 * Update Post Meta
 * 
 * @param
 * @param
 * @return voide
 */
function patrizia_lutz_core_save_meta( $post_id, $post ) {
	$post = get_post( $post_id );
// 	$post_type = get_post_type( $post_id );
	if( 'jetpack-portfolio' !== $post->post_type ) {
		return;
	}
	update_post_meta( $post_id, 'sort_order', $post->menu_order );
}
add_action( 'save_post', 'patrizia_lutz_core_save_meta', 20, 2 );

register_meta( 'post', 'sort_order', [
	'object_subtype'	=> 'jetpack-portfolio',
	'single'			=> true,
	'type' 				=> 'number',
	'show_in_rest' 		=> true,
	'show_in_graphql'	=> true
]);


 if( function_exists( 'acf_add_local_field_group' ) ) {

 acf_add_local_field_group( array(
 	'key' => 'group_skills_group',
 	'title' => __( 'Expertise', 'patrizialutz' ),
 	'fields' => array(
 		array(
 			'key' => 'field_skills_group',
 			'label' => __( 'Skills', 'patrizialutz' ),
 			'name' => 'skills_group',
 			'type' => 'repeater',
 			'instructions' => '',
 			'required' => 0,
 			'conditional_logic' => 0,
 			'wrapper' => array(
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'collapsed' => 'field_section',
 			'min' => 0,
 			'max' => 0,
 			'layout' => 'row',
 			'button_label' => __( 'Add Section', 'patrizialutz' ),
 			'sub_fields' => array(
 				array(
 					'key' => 'field_section',
 					'label' => __( 'Section', 'patrizialutz' ),
 					'name' => 'section',
 					'type' => 'text',
 					'instructions' => '',
 					'required' => 0,
 					'conditional_logic' => 0,
 					'wrapper' => array(
 						'width' => '',
 						'class' => '',
 						'id' => '',
 					),
 					'default_value' => '',
 					'placeholder' => '',
 					'prepend' => '',
 					'append' => '',
 					'maxlength' => '',
 				),
 				array(
 					'key' => 'field_skills',
 					'label' => __( 'Skills', 'patrizialutz' ),
 					'name' => 'skills',
 					'type' => 'repeater',
 					'instructions' => '',
 					'required' => 0,
 					'conditional_logic' => 0,
 					'wrapper' => array(
 						'width' => '',
 						'class' => '',
 						'id' => '',
 					),
 					'collapsed' => 'field_skill',
 					'min' => 0,
 					'max' => 0,
 					'layout' => 'table',
 					'button_label' => __( 'Add Skill' ),
 					'sub_fields' => array(
 						array(
 							'key' => 'field_skill',
 							'label' => __( 'Skill', 'patrizialutz' ),
 							'name' => 'skill',
 							'type' => 'text',
 							'instructions' => '',
 							'required' => 0,
 							'conditional_logic' => 0,
 							'wrapper' => array(
 								'width' => '',
 								'class' => '',
 								'id' => '',
 							),
 							'default_value' => '',
 							'placeholder' => '',
 							'prepend' => '',
 							'append' => '',
 							'maxlength' => '',
 						),
 						array(
 							'key' => 'field_rating',
 							'label' => __( 'Rating', 'patrizialutz' ),
 							'name' => 'rating',
 							'type' => 'range',
 							'instructions' => '',
 							'required' => 0,
 							'conditional_logic' => 0,
 							'wrapper' => array(
 								'width' => '',
 								'class' => '',
 								'id' => '',
 							),
 							'default_value' => '',
 							'min' => '',
 							'max' => 5,
 							'step' => '',
 							'prepend' => '',
 							'append' => '',
 						),
 					),
 				),
 			),
 		),
 	),
 	'location' => array(
 		array(
 			array(
 				'param' => 'post_type',
 				'operator' => '==',
 				'value' => 'page',
 			),
 		),
 	),
	'show_in_graphql' => 1,
	'graphql_field_name' => 'acf',
 	'menu_order' => 0,
 	'position' => 'normal',
 	'style' => 'default',
 	'label_placement' => 'top',
 	'instruction_placement' => 'label',
 	'hide_on_screen' => '',
 	'active' => 1,
 	'description' => '',
 ));

 acf_add_local_field_group( array(
 	'key' => 'group_project_details',
 	'title' => __( 'Project Details', 'patrizialutz' ),
 	'fields' => array(
 		array(
 			'key' => 'field_company',
 			'label' => __( 'Company', 'patrizialutz' ),
 			'name' => 'company',
 			'type' => 'text',
 			'instructions' => '',
 			'required' => 0,
 			'conditional_logic' => 0,
 			'wrapper' => array(
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'default_value' => '',
 			'placeholder' => '',
 			'prepend' => '',
 			'append' => '',
 			'maxlength' => '',
 		),
 		array(
 			'key' => 'field_url',
 			'label' => __( 'URL', 'patrizialutz' ),
 			'name' => 'url',
 			'type' => 'url',
 			'instructions' => '',
 			'required' => 0,
 			'conditional_logic' => 0,
 			'wrapper' => array(
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'default_value' => '',
 			'placeholder' => '',
 		),
 		array(
 			'key' => 'field_location',
 			'label' => __( 'Location', 'patrizialutz' ),
 			'name' => 'location',
 			'type' => 'text',
 			'instructions' => '',
 			'required' => 0,
 			'conditional_logic' => 0,
 			'wrapper' => array(
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'default_value' => '',
 			'placeholder' => '',
 			'prepend' => '',
 			'append' => '',
 			'maxlength' => '',
 		),
 		array(
 			'key' => 'field_start_date',
 			'label' => __( 'Start Date', 'patrizialutz' ),
 			'name' => 'start_date',
 			'type' => 'date_picker',
 			'instructions' => '',
 			'required' => 0,
 			'conditional_logic' => 0,
 			'wrapper' => array(
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'display_format' => 'm/d/Y',
 			'return_format' => 'd/m/Y',
 			'first_day' => 1,
 		),
 		array(
 			'key' => 'field_end_date',
 			'label' => __( 'End Date', 'patrizialutz' ),
 			'name' => 'end_date',
 			'type' => 'date_picker',
 			'instructions' => '',
 			'required' => 0,
 			'conditional_logic' => 0,
 			'wrapper' => array(
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'display_format' => 'm/d/Y',
 			'return_format' => 'd/m/Y',
 			'first_day' => 1,
 		),
 		array(
 			'key' => 'field_clients',
 			'label' => __( 'Clients', 'patrizialutz' ),
 			'name' => 'clients',
 			'type' => 'repeater',
 			'instructions' => '',
 			'required' => 0,
 			'conditional_logic' => 0,
 			'wrapper' => array(
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'collapsed' => 'field_client_name',
 			'min' => 0,
 			'max' => 0,
 			'layout' => 'table',
 			'button_label' => '',
 			'sub_fields' => array(
 				array(
 					'key' => 'field_client_name',
 					'label' => __( 'Name', 'patrizialutz' ),
 					'name' => 'client_name',
 					'type' => 'text',
 					'instructions' => '',
 					'required' => 0,
 					'conditional_logic' => 0,
 					'wrapper' => array(
 						'width' => '',
 						'class' => '',
 						'id' => '',
 					),
 					'default_value' => '',
 					'placeholder' => '',
 					'prepend' => '',
 					'append' => '',
 					'maxlength' => '',
 				),
 				array(
 					'key' => 'field_client_url',
 					'label' => __( 'URL', 'patrizialutz' ),
 					'name' => 'client_url',
 					'type' => 'url',
 					'instructions' => '',
 					'required' => 0,
 					'conditional_logic' => 0,
 					'wrapper' => array(
 						'width' => '',
 						'class' => '',
 						'id' => '',
 					),
 					'default_value' => '',
 					'placeholder' => '',
 				),
 			),
 		),
 	),
 	'location' => array(
 		array(
 			array(
 				'param' => 'post_type',
 				'operator' => '==',
 				'value' => 'jetpack-portfolio',
 			),
 		),
 	),
	'show_in_graphql' => 1,
	'graphql_field_name' => 'acf',
 	'menu_order' => 0,
 	'position' => 'normal',
 	'style' => 'default',
 	'label_placement' => 'top',
 	'instruction_placement' => 'label',
 	'hide_on_screen' => '',
 	'active' => 1,
 	'description' => '',
 ));

}

add_action( 'rest_api_init', function () {
    add_action( 'rest_pre_serve_request', function () {
        header( 'Access-Control-Allow-Origin: *' );
		header( 'Access-Control-Allow-Methods: POST, GET, OPTIONS' );
		header( 'Allow: POST, GET, OPTIONS' );
    } );
}, 15 );

if (isset($_SERVER['HTTP_ORIGIN'])) {
    //header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Credentials: true');    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
}   
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers:{$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
} 

// add_action( 'rest_api_init', function()
// {
//     header( "Access-Control-Allow-Origin: *" );
// } );

