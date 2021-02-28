<?php
/**
 * Core Performance Functions
 *
 * @package    Core_Functionality
 * @since      0.1.0
 * @license    GPL-2.0+
 */
namespace Core_Functionality\Performance;

/**
 * Remove query strings from static resources
 *
 * @since   0.1.0
 *
 * @uses    script_loader_src filter
 * @uses    style_loader_src filter
 *
 * @param   {string} $src
 * @return  {string} $parts[0]
 */
 function remove_script_version( $src ){
     $parts = explode( '?ver', $src );
     return $parts[0];
 }
//  \add_filter( 'script_loader_src', __NAMESPACE__ . '\remove_script_version', 15, 1 );
//  \add_filter( 'style_loader_src', __NAMESPACE__ . '\remove_script_version', 15, 1 );
