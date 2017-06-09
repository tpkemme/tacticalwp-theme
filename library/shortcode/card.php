<?php
/**
 * Cards shortcode
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.0
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

 /**
  * Outputs an card when the [twp-card] is used
  *
  * @param  [string] $atts     shortcode attributes, required.
  * @param  [string] $content  shortcode content, optional.
  * @return output of shortcode
  * @since  1.0.0
  * @version 1.0.0
  */
function twp_card( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'type'   => 'primary',
		'center' => 'false',
		'title'  => '',
		'img'    => '',
		'height' => '',
	), $atts, 'twp-card' );

	$center = '';
	if ( 'false' === $atts['center'] ) {
		$center = '';
	}
	else {
		$center = 'text-center';
	}

	$height = '';
	if ( '' === $atts['height'] ) {
		$height = '';
	}
	else {
		$height = $atts['height'];
	}

	if ( '' !== $height ) {
		$out = '<div class="card ' . $atts['type'] . ' ' . $center . '" style="height:' . $height . '" id="' . $atts['id'] . '">';
	}
	else {
		$out = '<div class="card ' . $atts['type'] . ' ' . $center . '" id="' . $atts['id'] . '">';
	}

	if ( '' !== $atts['title'] ) {
		$out .= '<div class="card-divider"><p>' . $atts['title'] . '</p></div>';
	}
	if ( '' !== $atts['img'] ) {
		$out .= '<p><img src="' . $atts['img'] . '" /></p>';
	}
	$out .= '<div class="card-content">' . do_shortcode($content) . '</div>';

	return $out . '</div>';
}
add_shortcode( 'twp-card', 'twp_card' );
