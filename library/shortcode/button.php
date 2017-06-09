<?php
/**
 * Button shortcode
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
  * Outputs an button when the [twp-button] is used
  *
  * @param  [string] $atts     shortcode attributes, required.
  * @param  [string] $content  shortcode content, optional.
  * @return output of shortcode
  * @since  1.0.0
  * @version 1.0.0
  */
function twp_button( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'type'       => 'primary',
		'size'       => 'default',
		'toggle'   => '',
	), $atts, 'twp-button' );

	$size = '';

	if ( 'default' !== $atts['size'] ) {
		$size = $atts['size'];
	}

	$toggle = '';

	if ( '' !== $atts['toggle'] ) {
		$toggle = 'data-toggle="' . $atts['toggle'] . '"';
	}

	$out = '<button type="button" ' . $toggle . ' class="' . $atts['type'] . ' button ' . $size . '">' . do_shortcode($content) . '</button>';
	return $out;
}
add_shortcode( 'twp-button', 'twp_button' );
