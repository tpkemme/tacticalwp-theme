<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.0
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

if ( ! function_exists( 'twp_theme_support' ) ) :
function twp_theme_support() {
		// Add language support
		load_theme_textdomain( 'twp', get_template_directory() . '/languages' );

		// Switch default core markup for search form, comment form, and comments to output valid HTML5
		add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		) );

			// Add menu support
			add_theme_support( 'menus' );

			// Let WordPress manage the document title
			add_theme_support( 'title-tag' );

			// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
			add_theme_support( 'post-thumbnails' );

			// RSS thingy
			add_theme_support( 'automatic-feed-links' );

			// Add post formats support: http://codex.wordpress.org/Post_Formats
			add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

			// Declare WooCommerce support per http://docs.woothemes.com/document/third-party-custom-theme-compatibility/
			add_theme_support( 'woocommerce' );

			// Add twp.css as editor style https://codex.wordpress.org/Editor_Style
			add_editor_style( 'assets/stylesheets/twp.css' );
}

add_action( 'after_setup_theme', 'twp_theme_support' );
endif;
