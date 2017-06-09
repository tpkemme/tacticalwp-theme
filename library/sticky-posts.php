<?php
/**
 * Change the class for sticky posts to .wp-sticky to avoid conflicts with Foundation's Sticky plugin.
 *
<<<<<<< HEAD
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.0
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
=======
 * @since TacticalWP 2.2.0
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
 */
if ( ! function_exists('twp_sticky_posts') ) :
function twp_sticky_posts( $classes ) {
		if (in_array('sticky', $classes, true) ) {
			$classes = array_diff($classes, array('sticky'));
			$classes[] = 'wp-sticky';
			}

		return $classes;
}
add_filter('post_class', 'twp_sticky_posts');

endif;
