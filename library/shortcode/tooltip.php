<?php
/**
 * Tooltip shortcode.
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
  * Outputs an tooltip when the [twp-tooltip] is used
  *
  * @param 	[string] $atts	   shortcode attributes, required.
  * @param 	[string] $content  shortcode content, optional.
  * @return	output of shortcode
  * @since 	1.0.0
  * @version 1.0.0
  */
function twp_tooltip( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
    	'id' => wp_generate_password( 6, false ),
    	'title'		 => 'title',
	), $atts, 'twp-tooltip' );

    $out = '<span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex=1 title="' . $atts['title'] . '">' . do_shortcode($content) . '</span>';
    return $out;
}
add_shortcode( 'twp-tooltip', 'twp_tooltip' );
=======
 * @since 1.0.0
 */

    /**
     * Outputs an tooltip when the [twp-tooltip] is used.
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
    function twp_tooltip( $atts, $content = '' ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'title' => 'title',
    ), $atts, 'twp-tooltip');

$out = '<span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex=1 title="' . $atts['title'] . '">' . do_shortcode($content) . '</span>';

return $out;
    }
    add_shortcode('twp-tooltip', 'twp_tooltip');
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
