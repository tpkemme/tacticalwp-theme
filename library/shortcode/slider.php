<?php
/**
 * Slider shortcode
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
  * Outputs an slider when the [twp-slider] is used
  *
  * @param 	[string] $atts	  shortcode attributes, required.
  * @param 	[string] $content shortcode content, optional.
  * @return	output of shortcode
  * @since 	1.0.0
  * @version 1.0.0
  */
function twp_slider( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'type'	=> 'horizontal',
		'initial'	=> '50',
		'total'		 => '100',
	), $atts, 'twp-slider' );

	$type = '';
	if ( 'vertical' !== $atts['type'] ) {
		$type = '';
		$data_type = 'data-slider-handle';
		$vertical = 'false';
	}
	else {
		$type = $atts['type'];
		$data_type = 'data-slider-handle';
		$vertical = 'true';
	}
	$out = '';
	$out .= '<div class="slider ' . $type . '" data-slider="' . $atts['id'] . '" id="' . $atts['id'] . '" data-initial-start=' . $atts['initial'] . ' data-end="' . $atts['total'] . '" data-vertical="' . $vertical . '">
				<span class="slider-handle" ' . $data_type . ' role="slider"></span>
				<span class="slider-fill" data-slider-fill></span>
				<input id="' . $atts['initial'] . '" name="' . $atts['initial'] . '" type="hidden">
			</div>';
	return $out;
}
add_shortcode( 'twp-slider', 'twp_slider' );
