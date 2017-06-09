<?php
/**
 * Motion shortcode
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.1
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

 /**
  * Outputs an motion when the [twp-motion] is used
  *
  * @param  [string] $atts     shortcode attributes, required.
  * @param  [string] $content  shortcode content, optional.
  * @return output of shortcode
  * @since  1.0.0
  * @version 1.0.1
  */
function twp_motion( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'motion'         => 'fade',
	), $atts, 'twp-motion' );

	$motion = '';
	if ( 'fade' === $atts['motion'] ) {
		$motion = 'fade-in fade-out';
	}
	elseif ( 'slide' === $atts['motion'] ) {
		$motion = 'slide-in-down slide-out-up';
	}
	$out = '<div id="' . $atts['id'] . '" data-toggler data-animate="' . $motion . '" data-toggle="' . $atts['id'] . '">' . do_shortcode($content) . '</div>';
	return $out;
}
add_shortcode( 'twp-motion', 'twp_motion' );
