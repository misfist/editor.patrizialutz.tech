<?php
/**
 * GraphQL Functions
 *
 * @package    Core_Functionality
 * @since      0.1.0
 * @license    GPL-2.0+
 */
namespace Core_Functionality\Graphql;

/**
 * Register Field with Graphql
 *
 * @return array $images
 */
function register_types() {

    \register_graphql_field( 'generalSettings', 'customHeaders', [
		'type' => [ 'list_of' => 'String' ],
		'resolve' => function() {
            $images = [];
            if( $image_ids = get_option( 'options_header_images' ) ) {
                $images = array_map(
                    function( $id ) {
                        return wp_get_attachment_image_src( $id, 'full' )[0];
                    }, $image_ids
                );
            }
			return $images;
		}
	]);

}
\add_action( 'graphql_register_types', __NAMESPACE__ . '\register_types' );
