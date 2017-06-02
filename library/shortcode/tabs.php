<?php
/**
 * tabs shortcode.
 *
 * @since 1.0.0
 */

    /**
     * Outputs an tabs when the [twp-tabs].
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
    function twp_tabs( $atts, $content = '' ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'position' => 'middle',
    'title' => 'false',
    'size' => 'medium',
    ), $atts, 'twp-tabs');

$out = '';

if ($atts['position'] === 'first' && $atts['title'] === 'true' ) {
	$out .= '
				<ul  class="tabs" id="' . $atts['id'] . '-tabs" data-responsive-accordion-tabs="accordion ' . $atts['size'] . '-tabs">
					<li class="tabs-title is-active">
						<a href="#' . $atts['id'] . '" >' . do_shortcode($content) . '</a>
					</li>';
	} elseif ($atts['position'] === 'middle' && $atts['title'] === 'true' ) {
	$out .= '<li class="tabs-title">
								<a href="#' . $atts['id'] . '" >' . do_shortcode($content) . '</a>
							</li>';
	} elseif ($atts['position'] === 'last' && $atts['title'] === 'true' ) {
	$out .= '<li class="tabs-title">
								<a href="#' . $atts['id'] . '" >' . do_shortcode($content) . '</a>
							</li></ul>';
	} elseif ($atts['position'] === 'first' && $atts['title'] === 'false' ) {
	$out .= '
				<div data-tabs-content="' . $atts['id'] . '-tabs" class="tabs-content">
					<div class="tabs-panel is-active" id="' . $atts['id'] . '">
						' . do_shortcode($content) . '
					</div>';
	} elseif ($atts['position'] === 'middle' && $atts['title'] === 'false' ) {
	$out .= '
				<div class="tabs-panel" id="' . $atts['id'] . '">
					' . do_shortcode($content) . '
				</div>';
	} else {
	$out .= '
				<div class="tabs-panel" id="' . $atts['id'] . '">
					' . do_shortcode($content) . '
				</div></div>';
	}// End if().
return $out;
    }
    add_shortcode('twp-tabs', 'twp_tabs');
