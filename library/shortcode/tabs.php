<?php
/**
 * Tabs shortcode
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
  * Outputs an tabs when the [twp-tabs]
  *
  * @param 	[string] $atts	   shortcode attributes, required.
  * @param 	[string] $content  shortcode content, optional.
  * @return	output of shortcode
  * @since 	1.0.0
  * @version 1.0.0
  */
function twp_tabs( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'position' => 'middle',
		'title'		 => 'false',
		'size'		 => 'medium',
	), $atts, 'twp-tabs' );

	$out = '';

	if ( 'first' === $atts['position']  && 'true' === $atts['title'] ) {
		$out .= '
			<ul  class="tabs" id="' . $atts['id'] . '-tabs" data-responsive-accordion-tabs="accordion ' . $atts['size'] . '-tabs">
				<li class="tabs-title is-active">
					<a href="#' . $atts['id'] . '" >' . do_shortcode($content) . '</a>
				</li>';
	}
	elseif ( 'middle' === $atts['position'] && 'true' === $atts['title'] ) {
		$out .= '<li class="tabs-title">
				<a href="#' . $atts['id'] . '" >' . do_shortcode($content) . '</a>
			</li>';
	}
	elseif ( 'last' === $atts['position'] && 'true' === $atts['title'] ) {
		$out .= '<li class="tabs-title">
				<a href="#' . $atts['id'] . '" >' . do_shortcode($content) . '</a>
			</li></ul>';
	}
	elseif ( 'first' === $atts['position'] && 'false' === $atts['title'] ) {
		$out .= '
			<div data-tabs-content="' . $atts['id'] . '-tabs" class="tabs-content">
				<div class="tabs-panel is-active" id="' . $atts['id'] . '">
					' . do_shortcode($content) . '
				</div>';
	}
	elseif ( 'middle' === $atts['position'] && 'false' === $atts['title'] ) {
		$out .= '
			<div class="tabs-panel" id="' . $atts['id'] . '">
				' . do_shortcode($content) . '
			</div>';
	}
	else {
		$out .= '
			<div class="tabs-panel" id="' . $atts['id'] . '">
				' . do_shortcode($content) . '
			</div></div>';
	}// End if().
return $out;
}
add_shortcode( 'twp-tabs', 'twp_tabs' );
