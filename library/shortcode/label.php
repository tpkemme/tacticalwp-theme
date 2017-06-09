<?php
/**
 * Label shortcode.
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
  * Outputs an label when the [twp-label] is used
  *
  * @param 	[string] $atts	   shortcode attributes, required.
  * @param 	[string] $content  shortcode content, optional.
  * @return	output of shortcode
  * @since 	1.0.0
  * @version 1.0.0
  */
function twp_label( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'type'		 => 'primary',
	), $atts, 'twp-label' );

	$out = '<span class="' . $atts['type'] . ' label">' . do_shortcode($content) . '</span>';
	return $out;
}
add_shortcode( 'twp-label', 'twp_label' );
=======
 * @since 1.0.0
 */

    /**
     * Outputs an label when the [twp-label] is used.
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
    function twp_label( $atts, $content = '' ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'type' => 'primary',
    ), $atts, 'twp-label');

$out = '<span class="' . $atts['type'] . ' label">' . do_shortcode($content) . '</span>';

return $out;
    }
    add_shortcode('twp-label', 'twp_label');
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
