<?php
/**
 * Table shortcode
 *
 * @package TacticalWP
 * @since 1.0.0
 */

 /**
	* Outputs an table when the [twp-table]
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function twp_table( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'position' => 'middle',
			'header'	 => 'false',
			'final'    => 'false'
		), $atts, 'twp-table' );

		$out = '';

		if( $atts['position'] === 'first'  && $atts['header'] === 'true' ){

			$out = '
				<table id="'.$atts['id'].'">
					<thead>
						<tr>
							<th>'.do_shortcode($content).'
							</th>';
		}
		else if( $atts['position'] === 'middle' && $atts['header'] === 'true' ){
			$out = '
				<th>'.do_shortcode($content).'
					</th>';
		}
		else if( $atts['position'] === 'last' && $atts['header'] === 'true' ){
			$out = '
				<th>'.do_shortcode($content).'
					</th></tr></thead>
					<tbody>';
		}
		else if( $atts['position'] === 'first' && $atts['header'] === 'false' ){
			$out = '
				<tr>
				<td>'.do_shortcode($content).'
					</td>';
		}
		else if( $atts['position'] === 'middle' && $atts['header'] === 'false' ){
			$out = '
				<td>'.do_shortcode($content).'
					</td>';
		}
		else if( $atts['position'] === 'last' && $atts['header'] === 'false' && $atts['final'] === 'false' ){
			$out = '
				<td>'.do_shortcode($content).'
					</td>';
		}
		else{
			$out = '
				<td>'.do_shortcode($content).'
					</td></tr></tbody></table>';
		}
		return $out;
	}
	add_shortcode( 'twp-table', 'twp_table' );
?>
