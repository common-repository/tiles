<?php
/**
 * Tiles setup
 *
 * @package Tiles
 */

defined( 'ABSPATH' ) || exit;

/**
 * Main Tiles class.
 */
final class Tiles {

	/**
	 * The single instance of the class.
	 *
	 * @var self|null
	 */
	protected static $instance = null;

	/**
	 * Main Tiles Instance.
	 *
	 * Ensures only one instance of Tiles is loaded or can be loaded.
	 *
	 * @static
	 * @see Tiles()
	 * @return self Main instance.
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Cloning is forbidden.
	 */
	public function __clone() {
		_doing_it_wrong( __FUNCTION__, __( 'Cloning is fossssrbidden.', 'tiles' ), TILES_VERSION );
	}

	/**
	 * Unserializing instances of this class is forbidden.
	 */
	public function __wakeup() {
		_doing_it_wrong( __FUNCTION__, __( 'Unserializing instances of this class is forbidden.', 'tiles' ), TILES_VERSION );
	}

	/**
	 * Tiles Constructor.
	 */
	public function __construct() {
		$this->define_constants();
		$this->includes();
		$this->init_hooks();
	}

	/**
	 * Init Tiles when WordPress Initialises.
	 */
	public function init() {
		$this->load_plugin_textdomain();
	}

	/**
	 * Hook into actions and filters.
	 */
	private function init_hooks() {
		add_action( 'init', array( $this, 'init' ), 0 );
	}

	/**
	 * Define constant if not already set.
	 *
	 * @param string      $name  Constant name.
	 * @param string|bool $value Constant value.
	 */
	private function define( $name, $value ) {
		if ( ! defined( $name ) ) {
			define( $name, $value );
		}
	}

	/**
	 * Define Tiles Constants.
	 */
	private function define_constants() {
		$this->define( 'TILES_ABSPATH', dirname( TILES_PLUGIN_FILE ) . '/' );
		$this->define( 'TILES_PLUGIN_BASE', plugin_basename( __FILE__ ) );
		$this->define( 'TILES_PLUGIN_BASENAME', plugin_basename( TILES_PLUGIN_FILE ) );
		$this->define( 'TILES_PLUGIN_DIR', plugin_dir_path( TILES_PLUGIN_FILE ) );
		$this->define( 'TILES_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
		$this->define( 'TILES_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
		$this->define( 'TILES_VERSION', '1.0.5' );
		$this->define( 'TILES_WEBSITE', 'https://usetiles.com/' );
	}

	/**
	 * Include required core files used in admin and on the frontend.
	 */
	public function includes() {
		include_once TILES_ABSPATH . 'includes/class-tiles-scripts.php';
		include_once TILES_ABSPATH . 'includes/class-tiles-register-patterns.php';
		include_once TILES_ABSPATH . 'includes/class-tiles-register-categories.php';
		include_once TILES_ABSPATH . 'includes/class-tiles-colors.php';
		include_once TILES_ABSPATH . 'includes/class-tiles-font-sizes.php';
		include_once TILES_ABSPATH . 'includes/class-tiles-action-links.php';
	}

	/**
	 * Get the url of assets for patterns.
	 *
	 * @param string $asset Asset.
	 */
	public static function get_asset( $asset, $type = '.jpg' ) {
                return esc_url( plugin_dir_url( TILES_PLUGIN_FILE ) . 'images/' . $asset . $type );
	}

	/**
	 * Get a standard placeholder alt text for assets.
	 *
	 * @param string $text Alternative text.
	 */
	public static function get_alt_text() {
		return esc_attr__( 'Placeholder image, from the Tiles WordPress plugin', 'tiles' );
	}

	/**
	 * Returns a URL that points to the Tiles website.
	 *
	 * @since 1.0.0
	 * @param string|string $path A URL path to append to the store URL.
	 * @param array|array   $params An array of key/value params to add to the query string.
	 * @return string
	 */
	public function get_plugin_url( $path = '', $params = array() ) {

		$url = trailingslashit( TILES_WEBSITE . $path ) . '?' . http_build_query( $params, '', '&#038;' );

		return $url;
	}

	/**
	 * Load localisation data.
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain( 'tiles', false, dirname( TILES_PLUGIN_BASENAME ) . '/languages/' );
	}

	/**
	 * Enqueue JavaScript localization data.
	 */
	public function load_block_localization() {
		if ( function_exists( 'wp_set_script_translations' ) ) {
			wp_set_script_translations( 'tiles-editor', 'tiles', TILES_PLUGIN_DIR . '/languages' );
		}
	}
}
