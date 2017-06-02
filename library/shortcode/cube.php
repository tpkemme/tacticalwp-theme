<?php
/**
 * Cube Tilt shortcode.
 *
 * @since 1.0.0
 */

    /**
     * Outputs an cube when the [twp-cube] is used.
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
    function twp_cube( $atts, $content = '' ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'side' => 'front',
    'color' => '#1563ff',
    'img' => '',
    'direction' => 'left',
    'height' => '200px',
    ), $atts, 'twp-cube');

$halfheight = strval(floatval($atts['height']) / 2.0);
$units = preg_replace(array('/\d+/u', '/[.,]/'), '', $atts['height']);
$back = '';
if ($atts['color'] !== '' ) {
	$back = ' style="background:' . $atts['color'] . ';height: ' . $atts['height'] . '; width: ' . $atts['height'] . ';"';
	}
if ($atts['img'] !== '' ) {
	$back = ' style="background-image:url(' . $atts['img'] . ');background-size:contain; height: ' . $atts['height'] . '; width: ' . $atts['height'] . ';"';
	}
$out = '';

if ($atts['side'] === 'front' ) {
	$out .= '<div id=' . $atts['id'] . ' class="twp-cube-container-' . $atts['direction'] . '">
							<div style="height: ' . $atts['height'] . ';width: ' . $atts['height'] . '; -webkit-transform-origin: ' . $halfheight . $units . ' ' . $halfheight . $units . ' -' . $halfheight . $units . '" class="twp-cube">
						    <div ' . $back . ' class="twp-cube-front">
			        		' . do_shortcode($content) . '
						    </div>';
	} else {
	$out .= '<div id="' . $atts['id'] . '" ' . $back . ' class="twp-cube-back">
			        		' . do_shortcode($content) . '
			    			</div>
							</div>
						</div>';
	}

return $out;
    }
    add_shortcode('twp-cube', 'twp_cube');
