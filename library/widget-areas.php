<?php
/**
 * Register widget areas
 *
 * @package SolWP
 * @since SolWP 1.0.0
 */

if ( ! function_exists( 'solwp_sidebar_widgets' ) ) :
function solwp_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'solwp' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'solwp' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'solwp' ),
	  'description' => __( 'Drag widgets to this footer container', 'solwp' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'solwp_sidebar_widgets' );
endif;
