<?php

/**
 * sport functions and definitions
 */
if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}


define('WPSPORT_DIR_CSS', get_template_directory_uri() . '/assets/css/');
define('WPSPORT_DIR_JS', get_template_directory_uri() . '/assets/js/');
define('WPSPORT_DIR_IMAGE', get_template_directory_uri() . '/assets/img/');
define('WPSPORT_DIR_FONTS', get_template_directory_uri() . '/assets/fonts/');

include_once('inc/functions-modules/gallery.php');
include_once('inc/functions-modules/slider.php');
include_once('inc/menu.php');

/**
 * Enqueue scripts and styles.
 */


add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('bootstrap_css', WPSPORT_DIR_CSS . 'bootstrap.min.css', [], _S_VERSION);
	wp_enqueue_style('fontawesome_css', WPSPORT_DIR_CSS . 'fontawesome/css/all.min.css', [], _S_VERSION);
	wp_enqueue_style('owl_carousel_css', WPSPORT_DIR_CSS . 'owl.carousel.min.css', [], _S_VERSION);
	wp_enqueue_style('main_css', WPSPORT_DIR_CSS . 'main.css', [], _S_VERSION);

	wp_deregister_script('jquery');
	wp_register_script('jquery', WPSPORT_DIR_JS . 'jquery-3.7.1.min.js', false, null, true);

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap_js', WPSPORT_DIR_JS . 'bootstrap.bundle.min.js', [], _S_VERSION, [
		'in_footer' => true,
	]);
	wp_enqueue_script('owl_carousel_js', WPSPORT_DIR_JS . 'owl.carousel.min.js', [], _S_VERSION, [
		'in_footer' => true,
	]);
	wp_enqueue_script('main_js', WPSPORT_DIR_JS . 'main.js', [], _S_VERSION, [
		'in_footer' => true,
	]);
});

add_action('after_setup_theme', function () {
	add_theme_support('post-thumbnails');
	//add_image_size('wptest-reviews-slider', 540, 270, true);

	add_theme_support('post-formats', ['aside', 'video']);
});

add_action(
	'acf/init',
	function () {

		// Check function exists.
		if (function_exists('acf_add_options_page')) {

			// Register options page.
			$option_page = acf_add_options_page(array(
				'page_title'    => __('Theme General Settings'),
				'menu_title'    => __('Theme Settings'),
				'menu_slug'     => 'theme-general-settings',
				'capability'    => 'edit_posts',
				'redirect'      => false
			));
		}
	}
);
