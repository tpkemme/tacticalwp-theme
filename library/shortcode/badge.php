<?php
/**
 * Badge shortcode.
 *
 * @since 1.0.0
 */

    /**
     * Outputs an badge when the [twp-badge] is used.
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
    function twp_badge( $atts, $content = '' ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'type' => 'primary',
    ), $atts, 'twp-badge');

$out = '';

$out = '<span id="' . $atts['id'] . '" class="' . $atts['type'] . ' badge">' . do_shortcode($content) . '</span>';

return $out;
    }
    add_shortcode('twp-badge', 'twp_badge');
