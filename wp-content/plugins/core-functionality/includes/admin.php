<?php
/**
 * Core Admin Functions
 *
 * @package    Core_Functionality
 * @since      0.1.0
 * @license    GPL-2.0+
 */
namespace Core_Functionality\Admin;

if( function_exists( '\acf_add_options_page' ) ) {
    \acf_add_options_page( array(
        'page_title' => __('Site Settings', 'core-functionality'),
        'menu_title' => __('Site Settings', 'core-functionality'),
        'menu_slug' => 'site-settings',
        'capability' => 'manage_options',
        'position' => '1',
        'parent_slug' => 'options-general.php',
        // 'icon_url' => '',
        // 'redirect' => false,
        // 'post_id' => 'options',
        'autoload' => true,
        'update_button' => __('Update', 'core-functionality'),
        'updated_message' => __('Settings Updated', 'core-functionality'),
    ));
}


if( function_exists( '\acf_add_local_field_group' ) ) {
    \acf_add_local_field_group( array(
        'key' => 'group_site_options',
        'title' => __( 'Site Options', 'core-functionality' ),
        'fields' => array(
            array(
                'key' => 'field_header_images',
                'label' => __( 'Header Images', 'core-functionality' ),
                'name' => 'header_images',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'show_in_graphql' => 1,
                'acfe_repeater_stylised_button' => 1,
                'collapsed' => 'field_header_image',
                'min' => 0,
                'max' => 0,
                'layout' => 'row',
                'button_label' => __( 'Add Image', 'core-functionality' ),
                'sub_fields' => array(
                    array(
                        'key' => 'field_header_image',
                        'label' => __( 'Header Image', 'core-functionality' ),
                        'name' => 'header_image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'show_in_graphql' => 1,
                        'uploader' => 'wp',
                        'acfe_thumbnail' => 0,
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'site-settings',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_graphql' => 1,
        'graphql_field_name' => 'siteOptions',
    ));
}