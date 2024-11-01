<?php
/**
 * Pattern categories.
 *
 * @package Tiles
 */

defined( 'ABSPATH' ) || exit;

/**
 * Tiles_Register_Categories class.
 */
class Tiles_Register_Categories {

	/**
	 * Hook in methods.
	 */
	public static function init() {
		add_action( 'init', array( __CLASS__, 'registration' ) );
	}

	/**
	 * Register categories.
	 */
	public static function registration() {

		if ( ! function_exists( 'register_block_pattern_category' ) ) {
			return;
		}

		// Main parent category
		register_block_pattern_category( 'tiles', array( 'label' => __( 'Tiles', 'tiles' ) ) );
	}
}

Tiles_Register_Categories::init();
