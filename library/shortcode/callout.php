<?php
/**
 * Callout shortcode
 *
 * @package TacticalWP
 * @since 1.0.0
 */

 /**
	* Outputs an callout when the [twp-callout] is used
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function twp_callout( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'type' => 'primary'
		), $atts, 'twp-callout' );

		$type = '';
		if( $atts['type'] !== 'primary' ){
			$type = $atts['type'];
		}
		$out = '<div id="'.$atts['id'].'" class="'.$type.' callout">'.do_shortcode($content).'</div>';
		return $out;
	}
	add_shortcode( 'twp-callout', 'twp_callout' );
?>
