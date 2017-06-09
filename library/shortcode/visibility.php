<?php
/**
 * Visibility shortcode
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.2
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

 /**
  * Outputs an visibility when the [twp-visibility] is used
  *
  * @param  [string] $atts    shortcode attributes, required.
  * @param  [string] $content shortcode content, optional.
  * @return output of shortcode
  * @since  1.0.0
  * @version 1.0.2
  */
function twp_visibility( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'size'       => '',
		'orientation' => '',
		'display'           => 'show',
	), $atts, 'twp-visibility' );

    $size = '';
    if ( '' !== $atts['size'] & 'all' !== $atts['size'] ) {
	       $size = $atts['display'] . '-for-' . $atts['size'];
	   }
    elseif ( 'all' === $atts['size'] ) {
    	$size = $atts['display'];
    	}
    else {
    	$size = '';
	}

    $orientation = '';
    if ( '' !== $atts['orientation'] ) {
    	$orientation = $atts['display'] . '-for-' . $atts['orientation'];
	}
    else {
    	$orientation = '';
	}

    $out = '<span class="' . $size . ' ' . $orientation . '" id="' . $atts['id'] . '">' . do_shortcode($content) . '</span>';
    return $out;
}
add_shortcode( 'twp-visibility', 'twp_visibility' );
