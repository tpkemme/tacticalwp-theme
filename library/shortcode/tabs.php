<?php
/**
 * tabs shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs an tabs when the [solwp-tabs]
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_tabs( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'position' => 'middle',
			'title'		 => 'false',
			'size'		 => 'medium',
		), $atts, 'solwp-tabs' );

		$out = '';

		if( $atts['position'] === 'first'  && $atts['title'] === 'true' ){
			$out .= '
				<ul  class="tabs" id="'.$atts['id'].'-tabs" data-responsive-accordion-tabs="accordion '.$atts['size'].'-tabs">
					<li class="tabs-title is-active">
						<a href="#'.$atts['id'].'" >'.do_shortcode($content).'</a>
					</li>';
		}
		else if( $atts['position'] === 'middle' && $atts['title'] === 'true' ){
			$out .= '<li class="tabs-title">
								<a href="#'.$atts['id'].'" >'.do_shortcode($content).'</a>
							</li>';
		}
		else if( $atts['position'] === 'last' && $atts['title'] === 'true' ){
			$out .= '<li class="tabs-title">
								<a href="#'.$atts['id'].'" >'.do_shortcode($content).'</a>
							</li></ul>';
		}
		else if( $atts['position'] === 'first' && $atts['title'] === 'false' ){
			$out .= '
				<div data-tabs-content="'.$atts['id'].'-tabs" class="tabs-content">
					<div class="tabs-panel is-active" id="'.$atts['id'].'">
						'.do_shortcode($content).'
					</div>';
		}
		else if( $atts['position'] === 'middle' && $atts['title'] === 'false' ){
			$out .= '
				<div class="tabs-panel" id="'.$atts['id'].'">
					'.do_shortcode($content).'
				</div>';
		}
		else{
			$out .= '
				<div class="tabs-panel" id="'.$atts['id'].'">
					'.do_shortcode($content).'
				</div></div>';
		}
		return $out;
	}
	add_shortcode( 'solwp-tabs', 'solwp_tabs' );
?>
