<?php
/**
 * Core Public Functions
 *
 * @package    Core_Functionality
 * @since      0.1.1
 * @license    GPL-2.0+
 */
namespace Core_Functionality\Custom_Fields;

/**
 * Register Custom Fields
 * 
 * @since   0.1.0
 *
 * @return void
 */
if( function_exists( '\acf_add_local_field_group' ) ) {

	$graphql_field_name = 'acf';

	\acf_add_local_field_group( array(
		'key' => 'group_skills_group',
		'title' => __( 'Expertise', 'core-functionality' ),
		'fields' => array(
			array(
				'key' => 'field_skills_group',
				'label' => __( 'Skills', 'core-functionality' ),
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
				'button_label' => __( 'Add Section', 'core-functionality' ),
				'sub_fields' => array(
					array(
						'key' => 'field_section',
						'label' => __( 'Section', 'core-functionality' ),
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
						'label' => __( 'Skills', 'core-functionality' ),
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
								'label' => __( 'Skill', 'core-functionality' ),
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
								'label' => __( 'Rating', 'core-functionality' ),
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
		'graphql_field_name' => $graphql_field_name,
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
   
	\acf_add_local_field_group( array(
		'key' => 'group_project_details',
		'title' => __( 'Project Details', 'core-functionality' ),
		'fields' => array(
			array(
				'key' => 'field_company',
				'label' => __( 'Company', 'core-functionality' ),
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
				'label' => __( 'URL', 'core-functionality' ),
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
				'label' => __( 'Location', 'core-functionality' ),
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
				'label' => __( 'Start Date', 'core-functionality' ),
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
				'label' => __( 'End Date', 'core-functionality' ),
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
				'label' => __( 'Clients', 'core-functionality' ),
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
						'label' => __( 'Name', 'core-functionality' ),
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
						'label' => __( 'URL', 'core-functionality' ),
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
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'project',
				),
			),
		),
	   'show_in_graphql' => 1,
	   'graphql_field_name' => $graphql_field_name,
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	\acf_add_local_field_group(array(
		'key' => 'group_response_details',
		'title' => __( 'Response Details', 'core-functionality' ),
		'fields' => array(
			array(
				'key' => 'field_name',
				'label' => __( 'Name', 'core-functionality' ),
				'name' => 'name',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'show_in_graphql' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_email',
				'label' => __( 'Email', 'core-functionality' ),
				'name' => 'email',
				'type' => 'email',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'show_in_graphql' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '@',
				'append' => '',
			),
			array(
				'key' => 'field_ip',
				'label' => __( 'IP', 'core-functionality' ),
				'name' => 'ip',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'show_in_graphql' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'form-response',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest'	=> true,
		'show_in_graphql' => 1,
		'graphql_field_name' => $graphql_field_name,
	));
}

\register_meta( 'post', 'name', [
	'object_subtype' 	=> 'form-response',
	'show_in_rest' 		=> true,
	'single'			=> true,
	'update_callback' 	=> function ( $value, $object, $field ) {
		return \update_post_meta( $object->ID, $field, \sanitize_text_field( $value ) );
	},
]);

\register_meta( 'post', 'email', [
	'object_subtype' 	=> 'form-response',
	'show_in_rest' 		=> true,
	'single'			=> true,
	'update_callback' 	=> function ( $value, $object, $field ) {
		return \update_post_meta( $object->ID, $field, sanitize_email( $value) );
	}

]);

\register_meta( 'post', 'ip', [
	'object_subtype' 	=> 'form-response',
	'show_in_rest' 		=> true,
	'single'			=> true,
	'update_callback' 	=> function ( $value, $object, $field ) {
		return \update_post_meta( $object->ID, $field, \sanitize_text_field( $value ) );
	},
]);

/**
 * Register Fields with GraphQL
 *
 * @return void
 */
function register_fields_graphql() {
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
\add_action( 'graphql_register_types', __NAMESPACE__ . '\register_fields_graphql' );

/**
 * Modify ACF Settings
 * 
 * @return void
 */
function acf_init() {
	\acf_update_setting( 'remove_wp_meta_box', false );	
	\acf_update_setting( 'l10n_textdomain', 'core-functionality' );
	// \acf_update_setting( 'save_json', PATRICIA_LUTZ_CORE_DIR . '/data' );
	// \acf_update_setting( 'load_json', PATRICIA_LUTZ_CORE_DIR . '/data' );
}
\add_action( 'acf/init', __NAMESPACE__ . '\acf_init' );


/**
 * Register Custom Fields with Meta Boxes
 *
 * @param array $meta_boxes
 * @return array $meta_boxes
 */
function add_custom_fields( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'      => __( 'Project Details', 'core-functionality' ),
        'id'         => 'projects',
        'post_types' => ['project', 'jetpack-portfolio'],
        'fields'     => [
            [
                'name' => __( 'Company', 'core-functionality' ),
                'id'   => $prefix . 'company',
                'type' => 'text',
            ],
            [
                'name' => __( 'URL', 'core-functionality' ),
                'id'   => $prefix . 'url',
                'type' => 'url',
            ],
            [
                'name' => __( 'Location', 'core-functionality' ),
                'id'   => $prefix . 'location',
                'type' => 'text',
            ],
            [
                'name' => __( 'Start Date', 'core-functionality' ),
                'id'   => $prefix . 'start_date',
                'type' => 'date',
            ],
            [
                'name' => __( 'End Date', 'core-functionality' ),
                'id'   => $prefix . 'end_date',
                'type' => 'date',
            ],
            [
                'name'        => __( 'Clients', 'core-functionality' ),
                'group_title' => 'Client',
                'id'          => $prefix . 'clients',
				'type' => 'group',
				'clone'  => true,
				'sort_clone' => true,
				'collapsible' => true,
				'default_state' => 'collapsed',
				'save_state' => true,
                'add_button'  => __( 'Add Client', 'core-functionality' ),
                'fields'      => [
                    [
                        'name'    => __( 'Name', 'core-functionality' ),
                        'id'      => $prefix . 'name',
                        'type'    => 'text',
                        'columns' => 6,
                    ],
                    [
                        'name'    => __( 'URL', 'core-functionality' ),
                        'id'      => $prefix . 'url',
                        'type'    => 'url',
                        'columns' => 6,
                    ],
                ],
            ],
        ],
    ];

    return $meta_boxes;
}
// \add_filter( 'rwmb_meta_boxes', __NAMESPACE__ . '\add_custom_fields' );

