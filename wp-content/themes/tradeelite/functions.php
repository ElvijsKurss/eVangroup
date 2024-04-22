<?php

/**
 * TradeElite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage TradeElite
 * @since TradeElite 1.0
 */


if (!function_exists('tradeelite_support')) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since TradeElite 1.0
	 *
	 * @return void
	 */
	function tradeelite_support()
	{
		add_filter('woocommerce_get_image_size_thumbnail', function ($size) {
			return array(
				'width'  => 800,
				'height' => 800,
				'crop'   => 1,
			);
		});
		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Enqueue editor styles.
		add_editor_style('style.css');

		// Experimental support for adding blocks inside nav menus
		add_theme_support('block-nav-menus');

		// Add support for experimental link color control.
		add_theme_support('experimental-link-color');
	}

endif;

add_action('after_setup_theme', 'tradeelite_support');

if (!function_exists('tradeelite_styles')) :

	/**
	 * Enqueue styles.
	 *
	 * @since TradeElite 1.0
	 *
	 * @return void
	 */
	function tradeelite_styles()
	{
		// Enqueue Bootstrap Icons.
		wp_enqueue_style(
			'bootstrap-icons',
			get_template_directory_uri() . '/assets/icons/bootstrap-icons/bootstrap-icons.css',
			array(),
			'1.9.1',
			'all'
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'tradeelite-style',
			get_template_directory_uri() . '/style.css',
			array(),
			tradeelite_file_version('/style.css')
		);
	}

endif;

add_action('wp_enqueue_scripts', 'tradeelite_styles');

if (!function_exists('tradeelite_admin_editor_styles')) :

	/**
	 * Enqueue admin editor styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function tradeelite_admin_editor_styles()
	{
		// Enqueue Bootstrap Icons.
		wp_enqueue_style(
			'bootstrap-icons',
			get_template_directory_uri() . '/assets/icons/bootstrap-icons/bootstrap-icons.css',
			array(),
			'1.9.1',
			'all'
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'tradeelite-admin-style',
			get_template_directory_uri() . '/assets/css/editor.css',
			array(),
			tradeelite_file_version('/assets/css/editor.css')
		);
	}

endif;

add_action('admin_enqueue_scripts', 'tradeelite_admin_editor_styles');

/**
 * Get file version with respect to file modified date.
 */
function tradeelite_file_version($file_path)
{
	// create my own version codes
	return gmdate('ymd-Gis', filemtime(get_theme_file_path($file_path)));
}

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
function evangroup_register_styles()
{
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('evangroup-style', get_template_directory_uri() . "/assets/css/customscss/style.css", null, $version, 'all');
	wp_enqueue_style('evangroup-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css", array(), '4.7.0', 'all');
}
add_action('wp_enqueue_scripts', 'evangroup_register_styles');
function evangroup_register_admin_styles()
{
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('evangroup-style', get_template_directory_uri() . "/assets/css/customscss/style.css", null, $version, 'all');
}
add_action('admin_enqueue_scripts', 'evangroup_register_admin_styles');

function evangroup_register_scripts()
{
	$version = wp_get_theme()->get('Version');

	// Enqueue jQuery first
	wp_enqueue_script('evangroup-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);

	// Enqueue Bootstrap JS
	wp_enqueue_script('evangroup-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('evangroup-jquery'), '4.4.1', true);

	// Enqueue your custom script
	wp_enqueue_script('evangroup-main', get_template_directory_uri() . '/assets/javascript/main.js', array('evangroup-jquery'), $version, true);
}

add_action('wp_enqueue_scripts', 'evangroup_register_scripts');
