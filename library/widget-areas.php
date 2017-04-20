<?php
/**
 * Register widget areas
 *
 * @package TacticalWP
 * @since TacticalWP 1.0.0
 */

if ( ! function_exists( 'twp_sidebar_widgets' ) ) :
function twp_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'twp' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'twp' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'twp' ),
	  'description' => __( 'Drag widgets to this footer container', 'twp' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'twp_sidebar_widgets' );
endif;
