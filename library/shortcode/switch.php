<?php
/**
 * Switch shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs an switch when the [solwp-switch] is used
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_switch( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'size'	=> 'small',
		), $atts, 'solwp-switch' );

		$out = '';
		$out .= '<div class="switch '.$atts['size'].'">
			<input class="switch-input" id="'.$atts['id'].'" type="checkbox" name="'.$atts['id'].'"">
			<label class="switch-paddle" for="'.$atts['id'].'">
				<span class="show-for-sr">Tiny Sandwiches Enabled</span>
			</label>
		</div>';
		return $out;
	}
	add_shortcode( 'solwp-switch', 'solwp_switch' );
?>