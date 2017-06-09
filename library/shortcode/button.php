<?php
/**
 * Button shortcode.
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
  * Outputs an button when the [twp-button] is used
  *
  * @param 	[string] $atts	   shortcode attributes, required.
  * @param 	[string] $content  shortcode content, optional.
  * @return	output of shortcode
  * @since 	1.0.0
  * @version 1.0.0
  */
function twp_button( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'type'		 => 'primary',
		'size'		 => 'default',
		'toggle'   => '',
	), $atts, 'twp-button' );
=======
 * @since 1.0.0
 */

    /**
     * Outputs an button when the [twp-button] is used.
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
    function twp_button( $atts, $content = '' ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'type' => 'primary',
    'size' => 'default',
    'toggle' => '',
    ), $atts, 'twp-button');
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470

	$size = '';

<<<<<<< HEAD
	if ( 'default' !== $atts['size'] ) {
		$size = $atts['size'];
=======
if ($atts['size'] !== 'default' ) {
	$size = $atts['size'];
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
	}

	$toggle = '';

<<<<<<< HEAD
	if ( '' !== $atts['toggle'] ) {
		$toggle = 'data-toggle="' . $atts['toggle'] . '"';
	}

	$out = '<button type="button" ' . $toggle . ' class="' . $atts['type'] . ' button ' . $size . '">' . do_shortcode($content) . '</button>';
	return $out;
}
add_shortcode( 'twp-button', 'twp_button' );
=======
if ($atts['toggle'] !== '' ) {
	$toggle = 'data-toggle="' . $atts['toggle'] . '"';
	}

$out = '<button type="button" ' . $toggle . ' class="' . $atts['type'] . ' button ' . $size . '">' . do_shortcode($content) . '</button>';

return $out;
    }
    add_shortcode('twp-button', 'twp_button');
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
