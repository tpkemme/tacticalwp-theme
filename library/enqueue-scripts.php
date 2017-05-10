<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @param   $hook    [ string ] [ hook used so javascript is only enqueued on correct admin page ]
 * @package TacticalWP
 * @since TacticalWP 1.0.0
 */

/**
 * [twp_admin_scripts enqueues all necessary styles and scripts for wp-admin]
 *
 * @param  [type] $hook [description]
 * @return [type]       [description]
 */
if ( ! function_exists( 'twp_scripts' ) ) :
	function twp_admin_scripts( $hook ) {

		// Settings page for TWP Theme
		if ( $hook === 'toplevel_page_twp_options' ) {

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
 * [twp_scripts enqueues all necessary styles and scripts for front-end pages]
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
