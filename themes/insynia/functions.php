<?php
/**
 * Insynia functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Insynia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 1.0.0
 */
function insynia_setup() {
	/*
	 * Make the theme available for translation.
	 */
	load_theme_textdomain( 'insynia', get_template_directory() . '/languages' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for post thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Add support for automatic feed links.
	 */
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	/*
	 * Add support for responsive embedded content.
	 */
	add_theme_support( 'responsive-embeds' );

	/*
	 * Add support for custom logo.
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Register primary navigation menu.
	 */
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'insynia' ),
			'footer'  => esc_html__( 'Footer Menu', 'insynia' ),
		)
	);
}
add_action( 'after_setup_theme', 'insynia_setup' );

/**
 * Enqueues theme stylesheet.
 *
 * @since 1.0.0
 */
function insynia_enqueue_styles() {
	wp_enqueue_style(
		'insynia-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'insynia_enqueue_styles' );

/**
 * Sets the content width in pixels.
 *
 * @global int $content_width
 *
 * @since 1.0.0
 */
function insynia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'insynia_content_width', 800 );
}
add_action( 'after_setup_theme', 'insynia_content_width', 0 );
