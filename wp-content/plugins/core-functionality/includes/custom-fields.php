<?php
/**
 * Core Public Functions
 *
 * @package    Core_Functionality
 * @since      0.1.1
 * @license    GPL-2.0+
 */
namespace Patrizia_Lutz\Custom_Fields;

/**
 * Register Custom Fields
 * 
 * @since   0.1.0
 *
 * @return void
 */
if( function_exists( '\acf_add_local_field_group' ) ) {

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