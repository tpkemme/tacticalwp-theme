<?php
/**
 * Switch shortcode
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
  * Outputs an switch when the [twp-switch] is used
  *
  * @param  [string] $atts     shortcode attributes, required.
  * @param  [string] $content  shortcode content, optional.
  * @return output of shortcode
  * @since  1.0.0
  * @version 1.0.2
  */
function twp_switch( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'size'  => 'small',
	), $atts, 'twp-switch' );

	$out = '';
	$out .= '<div class="switch ' . $atts['size'] . '">
			<input class="switch-input" id="' . $atts['id'] . '" type="checkbox" name="' . $atts['id'] . '"">
			<label class="switch-paddle" for="' . $atts['id'] . '">
				<span class="show-for-sr">Tiny Sandwiches Enabled</span>
			</label>
		</div>';
	return $out;
}
add_shortcode( 'twp-switch', 'twp_switch' );
