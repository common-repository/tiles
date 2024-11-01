<?php
/**
 * Plugin screen action links.
 *
 * @package Tiles
 */

defined( 'ABSPATH' ) || exit;

/**
 * Tiles_Action_Links class.
 */
class Tiles_Action_Links {

	/**
	 * Hook in methods.
	 */
	public static function init() {
		add_action( 'plugin_action_links_' . plugin_basename( TILES_PLUGIN_DIR . 'tiles.php' ), array( __CLASS__, 'plugin_action_links' ) );
	}

	/**
	 * Add links to the settings page to the plugin.
	 *
	 * @param       array|array $actions The plugin.
	 * @return      array
	 */
	public static function plugin_action_links( $actions ) {

		$title    = esc_html__( 'Get more tiles', 'tiles' );

		$url = Tiles()->get_plugin_url(
			'/',
			array(
				'utm_medium'   => 'tiles-plugin',
				'utm_source'   => 'plugins-page',
				'utm_campaign' => 'plugins-action-link',
				'utm_content'  => 'get-more-tiles',
			)
		);

		// Merge and display each link.
		return array_merge(
			$actions,
			array( 'url' => sprintf( '<a href="%s" target="_blank">%s</a>', esc_url( $url ), $title ) ),
		);
	}
}

Tiles_Action_Links::init();
