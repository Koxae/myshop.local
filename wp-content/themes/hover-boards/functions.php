<?php
/**
 * Hover Boards functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hover Boards
 */

if ( ! function_exists( 'hover_boards_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hover_boards_setup() {

		load_theme_textdomain( 'hover-boards', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'woocommerce' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Enqueue editor styles.
		// add_editor_style( 'style.css' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}
endif;
add_action( 'after_setup_theme', 'hover_boards_setup' );

/**
 * Enqueue scripts and styles.
 */
function hover_boards_scripts() {
	wp_enqueue_style('hover-boards-style', get_stylesheet_uri(), array() );
	wp_enqueue_script( 'jquery-wow', esc_url(get_template_directory_uri()) . '/js/wow.js', array('jquery'),wp_get_theme()->get( 'Version' ) ,true );
	wp_enqueue_style( 'animate-css', esc_url(get_template_directory_uri()).'/css/animate.css', array(), wp_get_theme()->get('Version') );
	wp_enqueue_style( 'owl.carousel-style', get_template_directory_uri().'/css/owl.carousel.css', array(), wp_get_theme()->get('Version') );
	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri(). '/js/owl.carousel.js', array('jquery'),wp_get_theme()->get( 'Version' ) ,true );
	wp_enqueue_script( 'hover-boards-custom-scripts', get_template_directory_uri() . '/js/custom.js', array('jquery'),wp_get_theme()->get( 'Version' ) ,true );
	wp_style_add_data( 'hover-boards-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'hover_boards_scripts' );

/**
 * Enqueue block editor style
 */
function hover_boards_block_editor_styles() {
	wp_enqueue_style( 'hover-boards-block-patterns-style-editor', get_theme_file_uri( '/css/block-editor.css' ), array(), wp_get_theme()->get('Version') );	
}
add_action( 'enqueue_block_editor_assets', 'hover_boards_block_editor_styles' );

function hover_boards_init_setup() {

	define('HOVER_BOARDS_BUY_NOW',__('https://www.vwthemes.com/products/hover-boards-wordpress-theme','hover-boards'));
	define('HOVER_BOARDS_SUPPORT',__('https://wordpress.org/support/theme/hover-boards/','hover-boards'));
	define('HOVER_BOARDS_REVIEW',__('https://wordpress.org/support/theme/hover-boards/reviews/','hover-boards'));
	define('HOVER_BOARDS_LIVE_DEMO',__('https://www.vwthemes.net/hover-boards/','hover-boards'));
	define('HOVER_BOARDS_PRO_DOC',__('https://preview.vwthemesdemo.com/docs/hover-boards-pro/','hover-boards'));
	define('HOVER_BOARDS_FREE_DOC',__('https://preview.vwthemesdemo.com/docs/hover-boards-free-doc/','hover-boards'));
	define('HOVER_BOARDS_THEME_BUNDLE_BUY_NOW',__('https://www.vwthemes.com/products/wp-theme-bundle','hover-boards'));
	define('HOVER_BOARDS_THEME_BUNDLE_DOC',__('https://preview.vwthemesdemo.com/docs/theme-bundle/','hover-boards'));

	// Add block patterns
	require get_template_directory() . '/inc/block-patterns.php';

	/**
	 * Section Pro
	 */
	require get_template_directory() . '/inc/section-pro/customizer.php';

	/**
	 * TGM
	 */
	require_once get_template_directory() . '/inc/tgm/plugin-activation.php';

	/**
	 * notice
	 */
	require get_template_directory() . '/inc/core/activation-notice.php';

	/**
	 * Load core file.
	 */
	require_once get_template_directory() . '/inc/core/theme-info.php';

	require_once get_template_directory() . '/inc/core/template-functions.php';

}
add_action( 'after_setup_theme', 'hover_boards_init_setup' );

/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {

    wp_enqueue_script('admin-notice-script', get_template_directory_uri() . '/inc/core/js/admin-notice-script.js', ['jquery'], null, true);
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_plugin_nonce'),
        'redirectUrl' => admin_url('themes.php?page=hover-boards-info'),
    ]);
});

add_action('wp_ajax_check_plugin_activation', function () {
    if (!isset($_POST['plugin']) || empty($_POST['plugin'])) {
        wp_send_json_error(['message' => 'Missing plugin identifier']);
    }

    include_once ABSPATH . 'wp-admin/includes/plugin.php';

    // Map plugin identifiers to their main files
    $hover_boards_plugin_map = [
		'woocommerce'                  => 'woocommerce/woocommerce.php',
        'ibtana'               		   => 'ibtana-visual-editor/plugin.php',
        'ibtana-ecommerce'   		   => 'ibtana-ecommerce-product-addons/plugin.php'
    ];

    $hover_boards_requested_plugin = sanitize_text_field($_POST['plugin']);

    if (!isset($hover_boards_plugin_map[$hover_boards_requested_plugin])) {
        wp_send_json_error(['message' => 'Invalid plugin']);
    }

    $hover_boards_plugin_file = $hover_boards_plugin_map[$hover_boards_requested_plugin];
    $hover_boards_is_active   = is_plugin_active($hover_boards_plugin_file);

    wp_send_json_success(['active' => $hover_boards_is_active]);
});
add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );


function hover_boards_dismissed_notice() {
	 update_option( 'hover_boards_admin_notice', true );
    wp_die();
}
add_action( 'wp_ajax_hover_boards_dismissed_notice', 'hover_boards_dismissed_notice' );