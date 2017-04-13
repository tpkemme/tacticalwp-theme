<?php
/**
 * Badge shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs an badge when the [solwp-badge] is used
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_badge( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'type'		 => 'primary',
		), $atts, 'solwp-badge' );

		$out = '';

		$out = '<span id="'.$atts['id'].'" class="'.$atts['type'].' badge">'.do_shortcode($content).'</span>';
		return $out;
	}
	add_shortcode( 'solwp-badge', 'solwp_badge' );
?>
