<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @param   $hook    [ string ] [ hook used so javascript is only enqueued on correct admin page ]
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_admin_scripts( $hook ) {
		if( $hook === 'toplevel_page_solwp_options' ){
			// Enqueue the main Stylesheet.
			wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/stylesheets/foundation.css', array(), '2.9.0', 'all' );

			// Enqueue the Material Design Stylesheet.
			wp_enqueue_style( 'material-design-stylesheet', get_template_directory_uri() . '/assets/components/material-foundation/css/material-foundation.css', array(), '2.9.0', 'all' );

			// Deregister the jquery version bundled with WordPress.
			wp_deregister_script( 'jquery' );

			// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
			wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

			// If you'd like to cherry-pick the foundation components you need in your project, head over to gulpfile.js and see lines 35-54.
			// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
			wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/javascript/foundation.js', array('jquery'), '2.9.0', true );

			// Add the comment-reply library on pages where it is necessary
			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
		}
	}
	add_action( 'admin_enqueue_scripts', 'foundationpress_admin_scripts' );
endif;

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {
		// Enqueue the main Stylesheet.
		wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/stylesheets/foundation.css', array(), '2.9.0', 'all' );

		// Enqueue the Material Design Stylesheet.
		wp_enqueue_style( 'material-design-stylesheet', get_template_directory_uri() . '/assets/components/material-foundation/css/material-foundation.css', array(), '2.9.0', 'all' );

		// Deregister the jquery version bundled with WordPress.
		wp_deregister_script( 'jquery' );

		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

		// If you'd like to cherry-pick the foundation components you need in your project, head over to gulpfile.js and see lines 35-54.
		// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
		wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/javascript/foundation.js', array('jquery'), '2.9.0', true );

		// Add the comment-reply library on pages where it is necessary
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;
