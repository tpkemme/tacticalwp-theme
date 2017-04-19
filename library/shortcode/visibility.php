<?php
/**
 * Visibility shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs an visibility when the [solwp-visibility] is used
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_visibility( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'size'		 => '',
			'orientation' => '',
			'display'			=> 'show'
		), $atts, 'solwp-visibility' );

		$size = '';
		if( $atts['size'] !== '' & $atts['size'] !== 'all' ){
			$size = $atts['display'].'-for-'.$atts['size'];
		}
		else if( $atts['size'] === 'all' ){
			$size = $atts['display'];
		}
		else{
			$size = '';
		}

		$orientation = '';
		if( $atts['orientation'] !== '' ){
			$orientation = $atts['display'].'-for-'.$atts['orientation'];
		}
		else{
			$orientation = '';
		}

		$out = '<span class="'.$size.' '.$orientation.'" id="'.$atts['id'].'">'.do_shortcode($content).'</span>';
		return $out;
	}
	add_shortcode( 'solwp-visibility', 'solwp_visibility' );
?>
