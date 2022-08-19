<?php
/**
 * Sets up singlelevel block, does not format frontend
 *
 * @package blocks/singlelevel
 **/

namespace PMPro\blocks\singlelevelname;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

// Only load if Gutenberg is available.
if ( ! function_exists( 'register_block_type' ) ) {
	return;
}

add_action( 'init', __NAMESPACE__ . '\register_dynamic_block' );
/**
 * Register the dynamic block.
 *
 * @since 2.1.0
 *
 * @return void
 */
function register_dynamic_block() {

	// Hook server side rendering into render callback.
	register_block_type( 'pmpro/single-level-name', [
		'render_callback' => __NAMESPACE__ . '\render_dynamic_block',
	] );
}

/**
 * Server rendering for singlelevel block.
 *
 * @param array $attributes contains text, level, and css_class strings.
 * @return string
 **/
function render_dynamic_block( $attributes, $content ) {

    return do_blocks( $content );
    
}
