<?php
/**
 * Accordion shortcode
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
  * Outputs an accordion when the [twp-accordion]
  *
  * @param  [string] $atts     shortcode attributes, required.
  * @param  [string] $content  shortcode content, optional.
  * @return output of shortcode
  * @since  1.0.0
  * @version 1.0.4
  */
function twp_accordion( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'position' => 'middle',
		'title'      => 'Accordion Title',
		'type'       => 'default',
		'close-all' => 'true',
		'multi-expand' => 'true',
	), $atts, 'twp-accordion' );

	$out = '';

	$type = '';
	$type_end = '';

	if ( 'default' !== $atts['type'] ) {
		$type = '<' . $atts['type'] . '>';
		$type_end = '</' . $atts['type'] . '>';
	}

	if ( 'first' === $atts['position'] ) {
		$out = '
			<ul  class="accordion" data-accordion role="tablist" data-allow-all-closed="' . $atts['close-all'] . '" data-multi-expand="' . $atts['multi-expand'] . '">
				<li class="accordion-item" data-accordion-item>

					<a href="#' . $atts['id'] . '" role="tab" class="accordion-title" id="' . $atts['id'] . '-heading" aria-controls="' . $atts['id'] . '">' . $type . $atts['title'] . $type_end . '</a>

					<div id="' . $atts['id'] . '" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="' . $atts['id'] . '-heading">
						' . do_shortcode($content) . '
					</div>
				</li>';
	}
	elseif ( 'middle' === $atts['position'] ) {
		$out = '
			<li class="accordion-item" data-accordion-item>

				<a href="#' . $atts['id'] . '" role="tab" class="accordion-title" id="' . $atts['id'] . '-heading" aria-controls="' . $atts['id'] . '">' . $type . $atts['title'] . $type_end . '</a>

				<div id="' . $atts['id'] . '" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="' . $atts['id'] . '-heading">
					' . do_shortcode($content) . '
				</div>
			</li>';
	}
	else {
		$out = '
				<li class="accordion-item" data-accordion-item>

					<a href="#' . $atts['id'] . '" role="tab" class="accordion-title" id="' . $atts['id'] . '-heading" aria-controls="' . $atts['id'] . '">' . $type . $atts['title'] . $type_end . '</a>

					<div id="' . $atts['id'] . '" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="' . $atts['id'] . '-heading">
						' . do_shortcode($content) . '
					</div>
				</li>
			</ul>';
	}// End if().
	return $out;
}
add_shortcode( 'twp-accordion', 'twp_accordion' );
