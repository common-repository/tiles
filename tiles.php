<?php
/**
 * Plugin Name:       Tiles
 * Description:       Rapidly <strong>build beautiful websites</strong> with Tiles, the most robust collection of utility block patterns for WordPress.
 * Plugin URI:        https://usetiles.com/?utm_source=wp-plugins&utm_medium=tiles&utm_campaign=plugin-uri&utm_medium=wp-dash
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           1.0.4
 * Author:            UseTiles.com
 * Author URI:        https://usetiles.com/?utm_source=wp-plugins&utm_medium=tiles&utm_campaign=author-uri&utm_medium=wp-dash
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tiles
 *
 * @package           Tiles
 */

if ( ! defined( 'TILES_PLUGIN_FILE' ) ) {
	define( 'TILES_PLUGIN_FILE', __FILE__ );
}

// Include the main Tiles class.
if ( ! class_exists( 'Tiles' ) ) {
        include_once dirname( __FILE__ ) . '/includes/class-tiles.php';
}

/**
 * Returns the main instance of Tiles.
 *
 * @return Tiles
 */
function Tiles() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
	return Tiles::instance();
}

// Global for backwards compatibility.
$GLOBALS['tiles'] = Tiles();
