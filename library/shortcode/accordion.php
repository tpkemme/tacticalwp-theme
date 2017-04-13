<?php
/**
 * Accordion shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs an accordion when the [solwp-accordion]
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_accordion( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'position' => 'middle',
			'title'		 => 'Accordion Title',
			'type'		 => 'default',
			'close-all' => 'true',
			'multi-expand' => 'true',
		), $atts, 'solwp-accordion' );

		$out = '';

		$type = '';
		$type_end = '';

		if( $atts['type'] !== 'default' ){
			$type = '<' . $atts['type'] . '>';
			$type_end = '</' . $atts['type'] . '>';
		}

		if( $atts['position'] === 'first' ){

			$out = '
				<ul  class="accordion" data-accordion role="tablist" data-allow-all-closed="'.$atts['close-all'].'" data-multi-expand="'.$atts['multi-expand'].'">
					<li class="accordion-item" data-accordion-item>

						<a href="#'.$atts['id'].'" role="tab" class="accordion-title" id="'.$atts['id'].'-heading" aria-controls="'.$atts['id'].'">'.$type.$atts['title'].$type_end.'</a>

						<div id="'.$atts['id'].'" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="'.$atts['id'].'-heading">
							'.do_shortcode($content).'
						</div>
					</li>';
		}
		else if( $atts['position'] === 'middle' ){
			$out = '
				<li class="accordion-item" data-accordion-item>

					<a href="#'.$atts['id'].'" role="tab" class="accordion-title" id="'.$atts['id'].'-heading" aria-controls="'.$atts['id'].'">'.$type.$atts['title'].$type_end.'</a>

					<div id="'.$atts['id'].'" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="'.$atts['id'].'-heading">
						'.do_shortcode($content).'
					</div>
				</li>';
		}
		else{
			$out = '
					<li class="accordion-item" data-accordion-item>

						<a href="#'.$atts['id'].'" role="tab" class="accordion-title" id="'.$atts['id'].'-heading" aria-controls="'.$atts['id'].'">'.$type.$atts['title'].$type_end.'</a>

						<div id="'.$atts['id'].'" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="'.$atts['id'].'-heading">
							'.do_shortcode($content).'
						</div>
					</li>
				</ul>';
		}
		return $out;
	}
	add_shortcode( 'solwp-accordion', 'solwp_accordion' );
?>
