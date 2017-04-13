<?php
/**
 * Dropdown Pane shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs an dropdown pane when the [solwp-dropdown-pane] is used
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_dropdown_pane( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'button'	 => 'Toggle Button',
		), $atts, 'solwp-dropdown-pane' );

		$out = '<button class="button" type="button" data-toggle="'.$atts['id'].'">'.$atts['button'].'</button>
						<div class="dropdown-pane" id="'.$atts['id'].'" data-dropdown>
							'.do_shortcode($content).'
						</div>';

		return $out;
	}
	add_shortcode( 'solwp-dropdown-pane', 'solwp_dropdown_pane' );
?>
