<?php
/**
 * Testimonial shortcode
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.3
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

 /**
  * Outputs an testimonial when the [twp-testimonial] is used
  *
  * @param  [string] $atts     shortcode attributes, required.
  * @param  [string] $content  shortcode content, optional.
  * @return output of shortcode
  * @since  1.0.0
  * @version 1.0.3
  */
function twp_testimonial( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'rating'   => '5',
		'img'      => get_template_directory_uri() . '/assets/images/icons/testimonial.png',
		'position' => 'middle',
		'buttons'  => 'true',
		'center'   => 'true',
	), $atts, 'twp-testimonial' );

	$out = '';

	if ( 'first' === $atts['position'] ) {
		$out .= '<div id="' . $atts['id'] . '" class="orbit" role="region" data-orbit>
			<ul class="orbit-container">';
		if ( 'true' === $atts['buttons'] ) {
			$out .= '<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
				<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>';
		}
		$out .= '<li class="is-active orbit-slide">';
		if ( 'true' === $atts['buttons'] ) {
			$out .= '<div class="text-center">';
		}
		else {
			$out .= '<div>';
		}
		$count = intval($atts['rating']);
		while ( $count > 0 ) {
			$out .= '<img class="orbit-rating" src="' . $atts['img'] . '" />';
			$count--;
		}
		$out .= do_shortcode($content) . '</div></li>';
		}
	elseif ( 'middle' === $atts['position'] ) {
		$out .= '<li class="is-active orbit-slide">';
		if ( 'true' === $atts['center'] ) {
			$out .= '<div class="text-center">';
		}
		else {
			$out .= '<div>';
		}
		$count = intval($atts['rating']);
		while ( $count > 0 ) {
			$out .= '<img class="orbit-rating" src="' . $atts['img'] . '" />';
			$count--;
		}
		$out .= do_shortcode($content) . '</div></li>';
		}
	else {
		$out .= '<li class="is-active orbit-slide">';
		if ( 'true' === $atts['center'] ) {
			$out .= '<div class="text-center">';
		}
		else {
			$out .= '<div>';
		}
		$count = intval($atts['rating']);
		while ( $count > 0 ) {
			$out .= '<img class="orbit-rating" src="' . $atts['img'] . '" />';
			$count--;
		}
		$out .= do_shortcode($content) . '</div></li></ul></div>';
	}// End if().

	return $out;
}
add_shortcode( 'twp-testimonial', 'twp_testimonial' );
