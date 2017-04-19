<?php
/**
 * Motion shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs an motion when the [solwp-motion] is used
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_motion( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'motion'		 => 'fade',
		), $atts, 'solwp-motion' );

		$motion = '';
		if( $atts['motion'] === 'fade' ){
			$motion = 'fade-in fade-out';
		}
		else if( $atts['motion'] === 'slide' ){
			$motion = 'slide-in-down slide-out-up';
		}
		$out = '<div id="'.$atts['id'].'" data-toggler data-animate="'.$motion.'" data-toggle="'.$atts['id'].'">'.do_shortcode($content).'</div>';
		return $out;
	}
	add_shortcode( 'solwp-motion', 'solwp_motion' );
?>