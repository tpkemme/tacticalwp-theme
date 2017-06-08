<?php
/**
 * Table shortcode
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
  * Outputs an table when the [twp-table]
  *
  * @param 	[string] $atts	  shortcode attributes, required.
  * @param 	[string] $content  shortcode content, optional.
  * @return	output of shortcode
  * @since 	1.0.0
  * @version 1.0.0
  */
function twp_table( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'position' => 'middle',
		'header'	 => 'false',
		'final'    => 'false',
	), $atts, 'twp-table' );

	$out = '';

	if ( 'first' === $atts['position']  && 'true' === $atts['header'] ) {

		$out = '
			<table id="' . $atts['id'] . '">
				<thead>
					<tr>
						<th>' . do_shortcode($content) . '
						</th>';
		}
	elseif ( 'middle' === $atts['position'] && 'true' === $atts['header'] ) {
		$out = '
			<th>' . do_shortcode($content) . '
			</th>';
		}
	elseif ( 'last' === $atts['position'] && 'true' === $atts['header'] ) {
		$out = '
			<th>' . do_shortcode($content) . '
				</th></tr></thead>
				<tbody>';
		}
	elseif ( 'first' === $atts['position'] && 'false' === $atts['header'] ) {
		$out = '
			<tr>
				<td>' . do_shortcode($content) . '
				</td>';
		}
	elseif ( 'middle' === $atts['position'] && 'false' === $atts['header'] ) {
		$out = '
			<td>' . do_shortcode($content) . '
			</td>';
		}
	elseif ( 'last' === $atts['position'] && 'false' === $atts['header'] && 'false' === $atts['final'] ) {
		$out = '
			<td>' . do_shortcode($content) . '
			</td>';
		}
	else {
		$out = '
			<td>' . do_shortcode($content) . '
		</td></tr></tbody></table>';
	}// End if().
	return $out;
}
add_shortcode( 'twp-table', 'twp_table' );
