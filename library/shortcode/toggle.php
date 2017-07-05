<?php
/**
 * Toggle shortcode
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author Tyler Kemme <dev@tylerkemme.com>
 * @license MIT https://opensource.org/licenses/MIT
 * @version 1.0.4
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

 /**
  * Outputs an toggle when the [twp-toggle] is used
  *
  * @param  [string] $atts    shortcode attributes, required.
  * @param  [string] $content shortcode content, optional.
  * @return output of shortcode
  * @since  1.0.0
  * @version 1.0.4
  */
function twp_toggle( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'position' => 'middle',
	), $atts, 'twp-toggle' );

    $out = '';

    if ( 'first' === $atts['position'] ) {
       $out .= '<ul id="' . $atts['id'] . '" class="menu" data-toggler=".expanded"><li>
			' . do_shortcode($content) . '
		</li>';
	}
    elseif ( 'middle' === $atts['position'] ) {
        $out .= '<li>
			' . do_shortcode($content) . '
		</li>';
	}
    else {
       $out .= '<li>
		    ' . do_shortcode($content) . '
        </li></ul>';
	}

    return $out;
}
add_shortcode( 'twp-toggle', 'twp_toggle' );
