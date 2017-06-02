<?php
/**
 * Visibility shortcode.
 *
 * @since 1.0.0
 */

    /**
     * Outputs an visibility when the [twp-visibility] is used.
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
    function twp_visibility( $atts, $content = '' ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'size' => '',
    'orientation' => '',
    'display' => 'show',
    ), $atts, 'twp-visibility');

$size = '';
if ($atts['size'] !== '' & $atts['size'] !== 'all' ) {
	$size = $atts['display'] . '-for-' . $atts['size'];
	} elseif ($atts['size'] === 'all' ) {
	$size = $atts['display'];
	} else {
	$size = '';
	}

$orientation = '';
if ($atts['orientation'] !== '' ) {
	$orientation = $atts['display'] . '-for-' . $atts['orientation'];
	} else {
	$orientation = '';
	}

$out = '<span class="' . $size . ' ' . $orientation . '" id="' . $atts['id'] . '">' . do_shortcode($content) . '</span>';

return $out;
    }
    add_shortcode('twp-visibility', 'twp_visibility');
