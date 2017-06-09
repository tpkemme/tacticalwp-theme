<?php
/**
 * Video shortcode
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.0
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

 /**
  * Outputs an video when the [twp-video] is used
  *
  * @param  [string] $atts    shortcode attributes, required.
  * @return output of shortcode
  * @since  1.0.0
  * @version 1.0.0
  */
function twp_video( $atts ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'url'    => 'http://mazwai.com/system/posts/videos/000/000/005/original/marc_lorenz--sky_cloudy_time-lapse.mp4?1400445691',
		'autoplay' => 'false',
		'loop'       => 'false',
		'muted'      => 'false',
		'controls' => 'true',
	), $atts, 'twp-video' );

    $autoplay = '';
    if ( 'false' !== $atts['autoplay'] ) {
    	$autoplay = 'autoplay';
	}

    $loop = '';
    if ( 'false' !== $atts['loop'] ) {
    	$loop = 'loop';
	}

    $muted = '';
    if ( 'false' !== $atts['muted'] ) {
    	$muted = 'muted';
	}

    $controls = '';
    if ( 'false' !== $atts['controls'] ) {
    	$controls = 'controls';
	}

    $out = '<div id="' . $atts['id'] . '" class="flex-video">
    		<video ' . $autoplay . ' ' . $loop . ' ' . $muted . ' ' . $controls . ' name="media">
    			<source src="' . $atts['url'] . '" type="video/ogg">
    			<source src="' . $atts['url'] . '" type="video/mp4">
    			Your browser does not support the video tag.
    		</video>
		</div>';

    return $out;
}
add_shortcode( 'twp-video', 'twp_video' );
