<?php
/**
 * Video shortcode.
 *
 * @since 1.0.0
 */

    /**
     * Outputs an video when the [twp-video] is used.
     *
     * @param [string] $atts   [ shortcode attributes, required ]
     * @param [string] $option [ shortcode content, optional ]
     *
     * @return output of shortcode
     *
     * @since 	1.0.0
     *
     * @version 1.0.0
     */
    function twp_video( $atts ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'url' => 'http://mazwai.com/system/posts/videos/000/000/005/original/marc_lorenz--sky_cloudy_time-lapse.mp4?1400445691',
    'autoplay' => 'false',
    'loop' => 'false',
    'muted' => 'false',
    'controls' => 'true',
    ), $atts, 'twp-video');

$autoplay = '';
if ($atts['autoplay'] !== 'false' ) {
	$autoplay = 'autoplay';
	}

$loop = '';
if ($atts['loop'] !== 'false' ) {
	$loop = 'loop';
	}

$muted = '';
if ($atts['muted'] !== 'false' ) {
	$muted = 'muted';
	}

$controls = '';
if ($atts['controls'] !== 'false' ) {
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
    add_shortcode('twp-video', 'twp_video');
