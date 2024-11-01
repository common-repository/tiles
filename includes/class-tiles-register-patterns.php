<?php
/**
 * Register tiles (block patterns)
 *
 * @package Tiles
 */

defined( 'ABSPATH' ) || exit;

/**
 * Tiles_Register_Patterns class.
 */
class Tiles_Register_Patterns {

	/**
	 * Hook in methods.
	 */
	public static function init() {
		add_action( 'init', array( __CLASS__, 'registration' ) );
	}

	/**
	 * Register tiles (patterns).
	 */
	public static function registration() {

                if ( ! function_exists( 'register_block_pattern' ) ) {
			return;
		}

		$path = TILES_PLUGIN_DIR . 'includes/patterns/';

		$tiles = array(
			'fullwidth-cta',
			'join-our-team',
			'offset-gallery',
                        'three-steps',
			'right-stats',
		);

		foreach ( $tiles as $tile ) {

			if ( file_exists( $path . $tile . '.php' ) ) {
				register_block_pattern(
					'tiles/' . $tile . '.php',
					require_once __DIR__ . '/patterns/' . $tile . '.php'
				);
			}
		}
	}
}

Tiles_Register_Patterns::init();
