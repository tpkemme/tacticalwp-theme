<?php
/**
 * Table shortcode.
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
=======
 * @since 1.0.0
 */

    /**
     * Outputs an table when the [twp-table].
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
    function twp_table( $atts, $content = '' ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'position' => 'middle',
    'header' => 'false',
    'final' => 'false',
    ), $atts, 'twp-table');
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470

	$out = '';

<<<<<<< HEAD
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
=======
if ($atts['position'] === 'first' && $atts['header'] === 'true' ) {
	$out = '
				<table id="' . $atts['id'] . '">
					<thead>
						<tr>
							<th>' . do_shortcode($content) . '
							</th>';
	} elseif ($atts['position'] === 'middle' && $atts['header'] === 'true' ) {
	$out = '
				<th>' . do_shortcode($content) . '
					</th>';
	} elseif ($atts['position'] === 'last' && $atts['header'] === 'true' ) {
	$out = '
				<th>' . do_shortcode($content) . '
					</th></tr></thead>
					<tbody>';
	} elseif ($atts['position'] === 'first' && $atts['header'] === 'false' ) {
	$out = '
				<tr>
				<td>' . do_shortcode($content) . '
					</td>';
	} elseif ($atts['position'] === 'middle' && $atts['header'] === 'false' ) {
	$out = '
				<td>' . do_shortcode($content) . '
					</td>';
	} elseif ($atts['position'] === 'last' && $atts['header'] === 'false' && $atts['final'] === 'false' ) {
	$out = '
				<td>' . do_shortcode($content) . '
					</td>';
	} else {
	$out = '
				<td>' . do_shortcode($content) . '
					</td></tr></tbody></table>';
	}// End if().
return $out;
    }
    add_shortcode('twp-table', 'twp_table');
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
