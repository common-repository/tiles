<?php
/**
 * Register Tiles color palette.
 *
 * @package Tiles
 */

defined( 'ABSPATH' ) || exit;

/**
 * Tiles_Colors class.
 */
class Tiles_Colors {

	/**
	 * Hook in methods.
	 */
	public static function init() {
		add_action( 'init', array( __CLASS__, 'colors' ) );
	}

	/**
	 * Custom colors for use in the editor.
	 * These should match the color variables added in src/style.scss
	 *
	 * @param     array|array $actions The plugin.
	 * @return    array
	 * @link      https://wordpress.org/gutenberg/handbook/reference/theme-support/
	 */
	public static function colors() {

		$theme = get_theme_support( 'editor-color-palette' );

		$tiles = [
				[
					'name' => __( 'Mono Dark', 'tiles' ),
					'slug' => 'tiles-mono-dark',
					'color' => '#111',
				],
				[
					'name' => __( 'Mono Light', 'tiles' ),
					'slug' => 'tiles-mono-light',
					'color' => '#ffffff',
				],
				[
					'name' => __( 'Primary', 'tiles' ),
					'slug' => 'tiles-primary',
					'color' => '#15444d',
				],
				[
					'name' => __( 'Secondary', 'tiles' ),
					'slug' => 'tiles-secondary',
					'color' => '#4e5d58',
				],
				[
					'name' => __( 'Tertiary', 'tiles' ),
					'slug' => 'tiles-tertiary',
					'color' => '#686261',
				],
				[
					'name' => __( 'Quaternary', 'tiles' ),
					'slug' => 'tiles-quaternary',
					'color' => '#8c6e64',
				],
				[
					'name' => __( 'Quinary', 'tiles' ),
					'slug' => 'tiles-quinary',
					'color' => '#cab7b1',
				],
				[
					'name' => __( 'Senary', 'tiles' ),
					'slug' => 'tiles-senary',
					'color' => '#73767f',
				],
				[
					'name' => __( 'Septenary', 'tiles' ),
					'slug' => 'tiles-septenary',
					'color' => '#F4F4F4',
				],
			];

		// We'll use this by default...
		$mergedColors = array_merge( $theme[0], $tiles );

		// ...and have an option to override the theme's color palette
		$tilesColors = $tiles;

		add_theme_support( 'editor-color-palette', $mergedColors );
	}
}

Tiles_Colors::init();
