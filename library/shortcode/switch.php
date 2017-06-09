<?php
/**
 * Switch shortcode.
 *
<<<<<<< HEAD
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.0
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

 /**
  * Outputs an switch when the [twp-switch] is used
  *
  * @param 	[string] $atts	   shortcode attributes, required.
  * @param 	[string] $content  shortcode content, optional.
  * @return	output of shortcode
  * @since 	1.0.0
  * @version 1.0.0
  */
function twp_switch( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'size'	=> 'small',
	), $atts, 'twp-switch' );
=======
 * @since 1.0.0
 */

    /**
     * Outputs an switch when the [twp-switch] is used.
     *
     * @param [string] $atts   [ shortcode attributes, required ]
     * @param [string] $option [ shortcode content, optional ]
     *
     * @return output of shortcode
     *
     * @since 	1.0.0
     *
     * @version 1.0.0
     */
    function twp_switch( $atts, $content = '' ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'size' => 'small',
    ), $atts, 'twp-switch');
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470

	$out = '';
	$out .= '<div class="switch ' . $atts['size'] . '">
			<input class="switch-input" id="' . $atts['id'] . '" type="checkbox" name="' . $atts['id'] . '"">
			<label class="switch-paddle" for="' . $atts['id'] . '">
				<span class="show-for-sr">Tiny Sandwiches Enabled</span>
			</label>
		</div>';
<<<<<<< HEAD
	return $out;
}
add_shortcode( 'twp-switch', 'twp_switch' );
=======

return $out;
    }
    add_shortcode('twp-switch', 'twp_switch');
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
