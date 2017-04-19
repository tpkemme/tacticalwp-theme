<?php
/**
 * Thumbnail shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs an thumbnail when the [solwp-thumbnail] is used
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_thumbnail( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'url'	=> 'http://placeimg.com/200/200/arch',
		), $atts, 'solwp-thumbnail' );

		$out = '';
		$out .= '
			<img id="'.$atts['id'].'" class="thumbnail" src="'.$atts['url'].'" />';
		return $out;
	}
	add_shortcode( 'solwp-thumbnail', 'solwp_thumbnail' );
?>
