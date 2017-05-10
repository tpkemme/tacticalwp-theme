<?php
/**
 * Toggle shortcode
 *
 * @package TacticalWP
 * @since 1.0.0
 */

 /**
  * Outputs an toggle when the [twp-toggle] is used
  *
  * @param 	[string] $atts	 [ shortcode attributes, required ]
  * @param 	[string] $option [ shortcode content, optional ]
  * @return	output of shortcode
  * @since 	1.0.0
  * @version 1.0.0
  */
	function twp_toggle( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
	'id' => wp_generate_password( 6, false ),
	'position' => 'middle',
	), $atts, 'twp-toggle' );

$out = '';

if ( $atts['position'] === 'first' ) {
	$out .= '<ul id="' . $atts['id'] . '" class="menu" data-toggler=".expanded"><li>
				' . do_shortcode($content) . '
			</li>';
	}
else if ( $atts['position'] === 'middle' ) {
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

