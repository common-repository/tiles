<?php
/**
 * Register Tiles font sizes.
 *
 * @package Tiles
 */

defined( 'ABSPATH' ) || exit;

/**
 * Tiles_Font_Sizes class.
 */
class Tiles_Font_Sizes {

	/**
	 * Hook in methods.
	 */
	public static function init() {
		add_action( 'init', array( __CLASS__, 'colors' ) );
	}

	/**
	 * Custom font sizes for use in the editor.
	 * These should match the font-size variables added in src/style.scss
	 *
	 * @param       array|array $actions The plugin.
	 * @return      array
	 * @link      https://wordpress.org/gutenberg/handbook/reference/theme-support/
	 */
	public static function colors() {

		$theme = get_theme_support( 'editor-font-sizes' );

		$tiles = [
				[
					'name'      => __( 'XS', 'tiles' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'tiles' ),
					'slug'      => 'tiles-xs',
					'size'      => 'clamp(calc(var(--tiles-font-size-xs) * 1rem), calc(1rem + calc(calc(var(--max) * 2) * 1vw)), calc(var(--max) * calc(var(--tiles-font-size-scale) * 1.75 * 1rem)))',
				],
				[
					'name'      => __( 'SM', 'tiles' ),
					'shortName' => esc_html_x( 'SM', 'Font size', 'tiles' ),
					'slug'      => 'tiles-sm',
					'size'      => 'clamp(calc(var(--tiles-font-size-sm) * 1rem), calc(1rem + calc(calc(var(--max) * 2) * 1vw)), calc(var(--max) * calc(var(--tiles-font-size-scale) * 1.75 * 1rem)))',
				],
				[
					'name'      => __( 'MD', 'tiles' ),
					'shortName' => esc_html_x( 'MD', 'Font size', 'tiles' ),
					'slug'      => 'tiles-md',
					'size'      => 'clamp(calc(var(--tiles-font-size-md) * 1rem), calc(1rem + calc(calc(var(--max) * 2) * 1vw)), calc(var(--max) * calc(var(--tiles-font-size-scale) * 1.75 * 1rem)))',
				],
				[
					'name'      => __( 'LG', 'tiles' ),
					'shortName' => esc_html_x( 'SM', 'Font size', 'tiles' ),
					'slug'      => 'tiles-lg',
					'size'      => 'clamp(calc(var(--tiles-font-size-lg) * 1rem), calc(1rem + calc(calc(var(--max) * 2) * 1vw)), calc(var(--max) * calc(var(--tiles-font-size-scale) * 1.75 * 1rem)))',
				],
				[
					'name'      => __( 'XL', 'tiles' ),
					'shortName' => esc_html_x( 'SM', 'Font size', 'tiles' ),
					'slug'      => 'tiles-xl',
					'size'      => 'clamp(calc(var(--tiles-font-size-xl) * 1rem), calc(1rem + calc(calc(var(--max) * 2) * 1vw)), calc(var(--max) * calc(var(--tiles-font-size-scale) * 1.75 * 1rem)))',
				],
				[
					'name'      => __( '2XL', 'tiles' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'tiles' ),
					'slug'      => 'tiles-xxl',
					'size'      => 'clamp(calc(var(--tiles-font-size-xxl) * 1rem), calc(1rem + calc(calc(var(--max) * 2) * 1vw)), calc(var(--max) * calc(var(--tiles-font-size-scale) * 1.75 * 1rem)))',
				],
				[
					'name'      => __( '3XL', 'tiles' ),
					'shortName' => esc_html_x( '3XL', 'Font size', 'tiles' ),
					'slug'      => 'tiles-xxxl',
					'size'      => 'clamp(calc(var(--tiles-font-size-xxxl) * 1rem), calc(1rem + calc(calc(var(--max) * 2) * 1vw)), calc(var(--max) * calc(var(--tiles-font-size-scale) * 1.75 * 1rem)))',
				],
			];

		// We'll use this by default...
		$mergedFontSizes = array_merge( $theme[0], $tiles );

		// ...and have an option to override the theme's color palette
		$tilesFontSizes = $tiles;

		add_theme_support( 'editor-font-sizes', $tilesFontSizes );
	}
}

Tiles_Font_Sizes::init();
