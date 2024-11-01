<?php
/**
 * Tiles scripts.
 *
 * @package Tiles
 */

defined( 'ABSPATH' ) || exit;

/**
 * Tiles_Scripts class.
 */
class Tiles_Scripts {

	/**
	 * Hook in methods.
	 */
	public static function init() {
		add_action( 'init', array( __CLASS__, 'registration' ) );
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'styles' ) );
		add_action( 'enqueue_block_editor_assets', array( __CLASS__, 'enqueue_editor_assets' ) );
	}

	/**
	 * Register styles and scripts.
	 */
	public static function registration() {

		// Return early if this function does not exist.
		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}

		wp_register_style(
			'tiles-editor',
			self::asset_url() . '/build/tiles-editor.css',
			array(),
			self::asset_file( 'tiles-editor', 'version' )
		);

		wp_register_style(
			'tiles-style',
			self::asset_url() . '/build/tiles-style.css',
			array(),
			self::asset_file( 'tiles-style', 'version' )
		);
	}

	public static function enqueue_editor_assets() {
		wp_enqueue_style( 'tiles-editor' );
		wp_enqueue_style( 'tiles-style' );
	}

	/**
	 * Enqueue styles on the tiles post type.
	 *
	 * @return void
	 */
	public static function styles() {
		wp_enqueue_style( 'tiles-style' );
	}

	/**
	 * Get asset URL.
	 */
	public static function asset_url() {
		return untrailingslashit( plugins_url( '/', dirname( __FILE__ ) ) );
	}

	/**
	 * Get asset file.
	 *
	 * @param string $handle Ass handle to reference.
	 * @param string $key What do we want to return: version or dependencies.
	 */
	public static function asset_file( $handle, $key ) {
		$default_asset_file = array(
			'dependencies' => array(),
			'version'      => TILES_VERSION,
		);

		$asset_filepath = TILES_PLUGIN_DIR . "/build/{$handle}.asset.php";
		$asset_file     = file_exists( $asset_filepath ) ? include $asset_filepath : $default_asset_file;

		if ( 'version' === $key ) {
			return $asset_file['version'];
		}

		if ( 'dependencies' === $key ) {
			return $asset_file['dependencies'];
		}
	}
}

Tiles_Scripts::init();
