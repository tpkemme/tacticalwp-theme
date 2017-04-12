<?php
/**
 * Table shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs an table when the [solwp-table]
	*
	* Echos output of solwp_get_option( $prefix . 'option_name' ).  This function
	* isn't necessary but it keeps the embedded styles template a lot cleaner
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_table( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'position' => 'middle',
			'header'	 => 'false',
			'final'    => 'false'
		), $atts, 'solwp-table' );

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
	add_shortcode( 'solwp-table', 'solwp_table' );
?>
