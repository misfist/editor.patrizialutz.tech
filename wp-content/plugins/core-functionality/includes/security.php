<?php
/**
 * Core Security Functions
 *
 * @package    Core_Functionality
 * @since      0.1.0
 * @license    GPL-2.0+
 */
namespace Core_Functionality\Security;

 /**
  * Hide WP version strings from scripts and styles
  *
  * @since      0.1.0
  *
  * @uses       script_loader_src
  * @uses       style_loader_src
  *
  * @param      {string} $src
  * @return     {string} $src   Modified to remove version
  */
 function remove_wp_version_strings( $src ) {
      global $wp_version;
      parse_str( parse_url( $src, PHP_URL_QUERY ), $query );
      if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
          $src = \remove_query_arg( 'ver', $src );
      }
      return $src;
  }
  \add_filter( 'script_loader_src', __NAMESPACE__ . '\remove_wp_version_strings' );
  \add_filter( 'style_loader_src', __NAMESPACE__ . '\remove_wp_version_strings' );

/**
 * Hide WP version strings from generator meta tag
 *
 * @since   0.1.0
 *
 * @uses    the_generator
 *
 * @param   void
 * @return  {string} Empty string
 */
function remove_wp_version_meta_tag() {
   return '';
}
\add_filter( 'the_generator', __NAMESPACE__ . '\remove_wp_version_meta_tag' );

/**
 * Set Response Headers
 * 
 * @since   0.1.1
 *
 * @return void
 */
function set_response_headers() {
    \remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
    \add_filter( 'rest_pre_serve_request', function ( $value ) {
        header( 'Access-Control-Allow-Origin: *' );
		header( 'Access-Control-Allow-Methods: POST, GET, OPTIONS' );
        header( 'Access-Control-Allow-Credentials: true' );
		// header( 'Allow: POST, GET, OPTIONS' );
        return $value;
    } );
}
\add_action( 'rest_api_init', 'set_response_headers', 15 );
