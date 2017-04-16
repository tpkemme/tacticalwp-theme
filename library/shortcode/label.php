<?php
/**
 * Label shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs an label when the [solwp-label] is used
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_label( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'type'		 => 'primary',
		), $atts, 'solwp-label' );

		$out = '<span class="'.$atts['type'].' label">'.do_shortcode($content).'</span>';
		return $out;
	}
	add_shortcode( 'solwp-label', 'solwp_label' );
?>
