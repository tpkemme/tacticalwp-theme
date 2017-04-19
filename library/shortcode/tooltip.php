<?php
/**
 * Tooltip shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs an tooltip when the [solwp-tooltip] is used
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_tooltip( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'title'		 => 'title',
		), $atts, 'solwp-tooltip' );

		$out = '<span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex=1 title="'.$atts['title'].'">'.do_shortcode($content).'</span>';
		return $out;
	}
	add_shortcode( 'solwp-tooltip', 'solwp_tooltip' );
?>
