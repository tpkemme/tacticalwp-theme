<?php
/**
 * Change the class for sticky posts to .wp-sticky to avoid conflicts with Foundation's Sticky plugin
 *
 * @package SolWP
 * @since SolWP 2.2.0
 */

if ( ! function_exists( 'solwp_sticky_posts' ) ) :
function solwp_sticky_posts( $classes ) {
	if ( in_array( 'sticky', $classes, true ) ) {
	    $classes = array_diff($classes, array('sticky'));
	    $classes[] = 'wp-sticky';
	}
	return $classes;
}
add_filter('post_class','solwp_sticky_posts');

endif;
