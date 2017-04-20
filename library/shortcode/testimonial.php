<?php
/**
 * Testimonial shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs an testimonial when the [solwp-testimonial] is used
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_testimonial( $atts, $content = '' ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'rating'   => '5',
			'img'      => get_template_directory_uri() . '/assets/images/icons/testimonial.png',
			'position' => 'middle',
			'buttons'  => 'true',
			'center'   => 'true',
		), $atts, 'solwp-testimonial' );

		$out = '';

		if( $atts['position'] === 'first' ){
			$out .= '<div id="'.$atts['id'].'" class="orbit" role="region" data-orbit>
				<ul class="orbit-container">';
				if( $atts['buttons'] === 'true' ){
					$out .= '<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
					<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>';
				}
				$out .= '<li class="is-active orbit-slide">';
				if( $atts['center'] === 'true' ){
					$out .= '<div class="text-center">';
				}
				else{
					$out .= '<div>';
				}
				$count = intval($atts['rating']);
				while( $count > 0 ){
					$out .= '<img class="orbit-rating" src="'.$atts['img'].'" />';
					$count--;
				}
				$out .= do_shortcode($content).'
			</div></li>';
		}
		else if( $atts['position'] === 'middle' ){
			$out .= '<li class="is-active orbit-slide">';
			if( $atts['center'] === 'true' ){
				$out .= '<div class="text-center">';
			}
			else{
				$out .= '<div>';
			}
			$count = intval($atts['rating']);
			while( $count > 0 ){
				$out .= '<img class="orbit-rating" src="'.$atts['img'].'" />';
				$count--;
			}
			$out .= do_shortcode($content).'
		</div></li>';
		}
		else{
			$out .= '<li class="is-active orbit-slide">';
			if( $atts['center'] === 'true' ){
				$out .= '<div class="text-center">';
			}
			else{
				$out .= '<div>';
			}
			$count = intval($atts['rating']);
			while( $count > 0 ){
				$out .= '<img class="orbit-rating" src="'.$atts['img'].'" />';
				$count--;
			}
			$out .= do_shortcode($content).'
		</div></li></ul></div>';
		}


		return $out;
	}
	add_shortcode( 'solwp-testimonial', 'solwp_testimonial' );
?>
