<?php
/**
 * Progress Bar shortcode
 *
 * @package TacticalWP
 * @since 1.0.0
 */

 /**
	* Outputs an progress bar when the [twp-progressbar] is used
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function twp_progress_bar( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'type'		 => 'primary',
			'size'		 => '50%',
		), $atts, 'twp-progress-bar' );

		$out = '<div class="'.$atts['type'].' progress"><div class="progress-meter" class="progress-meter" style="width:'.$atts['size'].'"><span class="progress-meter-text">';
		$out .=	do_shortcode($content). '</span></div></div>';
		return $out;
	}
	add_shortcode( 'twp-progress-bar', 'twp_progress_bar' );
?>
