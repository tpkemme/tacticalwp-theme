<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.2
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

if ( ! function_exists( 'twp_scripts' ) ) :
	/**
	 * Function twp_admin_scripts enqueues all necessary styles and scripts for wp-admin.
	 *
	 * @param  string $hook hook of the page attempting to enqueue scripts/styles.
	 * @return void
	 */
	function twp_admin_scripts( $hook ) {

		// Settings page for TWP Theme
		if ( 'toplevel_page_twp_options' === $hook ) {

			// Enqueue the main Stylesheet.
		  wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/stylesheets/twp.css', array(), false, 'all' );

			// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
			wp_enqueue_script( 'jquery' );

			// If you'd like to cherry-pick the twp components you need in your project, head over to gulpfile.js and see lines 35-54.
			// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
			wp_enqueue_script( 'twp-js', get_template_directory_uri() . '/assets/javascript/twp.js', array('jquery'), false, false );

			// Add the comment-reply library on pages where it is necessary
			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
		}

		// Enqueue CSS containing admin overrides
		wp_enqueue_style( 'admin-stylesheet', get_template_directory_uri() . '/assets/admin/admin.css', array(), false, 'all' );
		wp_enqueue_style( 'tinymce-stylesheet', get_template_directory_uri() . '/assets/admin/tinymce-custom-stylesheet.css', array(), false, true );

	}
	add_action( 'admin_enqueue_scripts', 'twp_admin_scripts' );

endif;


/**
 * Function twp_scripts enqueues all necessary styles and scripts for front-end pages
 */
if ( ! function_exists( 'twp_scripts' ) ) :
	function twp_scripts() {

		// Enqueue the main Stylesheet.
		wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/stylesheets/twp.css', array(), '2.9.0', 'all' );

		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		wp_enqueue_script( 'jquery');
		// If you'd like to cherry-pick the twp components you need in your project, head over to gulpfile.js and see lines 35-54.
		// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
		wp_enqueue_script( 'twp-js', get_template_directory_uri() . '/assets/javascript/twp.js', array('jquery'), '2.1.0', false );

		// Add the comment-reply library on pages where it is necessary
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

    wp_enqueue_style( 'tinymce-stylesheet', get_template_directory_uri() . '/assets/admin/tinymce-custom-stylesheet.css', array(), '2.9.0', true );

	}
	add_action( 'wp_enqueue_scripts', 'twp_scripts' );

endif;

/**
 * Registers an editor stylesheet for the TWP.
 */
function twp_add_editor_styles() {
    wp_enqueue_style( 'tinymce-stylesheet', get_template_directory_uri() . '/assets/admin/tinymce-custom-stylesheet.css' );
}
add_action( 'admin_init', 'twp_add_editor_styles' );

/**
 * Adds support for browser-sync if enabled in Advanced Settings
 */
function twp_add_browser_sync() {
	if ( twp_get_option( 'twp_advanced_browser_sync' ) === 'yes' ) {
		wp_enqueue_script( 'comment-reply', get_site_url() . '/browser-sync/browser-sync-client.js?v=2.18.8', array(), null, false);
	}
}
add_action( 'twp_before_closing_body', 'twp_add_browser_sync' );
