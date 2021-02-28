<?php
/**
 * Core Public Functions
 *
 * @package    Core_Functionality
 * @since      0.1.0
 * @license    GPL-2.0+
 */
namespace Core_Functionality\Includes;

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

