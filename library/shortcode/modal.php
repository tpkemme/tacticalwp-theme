<?php
/**
 * Modal shortcode
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author Tyler Kemme <dev@tylerkemme.com>
 * @license MIT https://opensource.org/licenses/MIT
 * @version 1.0.4
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

 /**
  * Outputs an modal when the [twp-modal] is used
  *
  * @param  [string] $atts     shortcode attributes, required.
  * @param  [string] $content  shortcode content, optional.
  * @return output of shortcode
  * @since  1.0.0
  * @version 1.0.4
  */
function twp_modal( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'type'       => 'button',
		'size'       => 'basic',
		'reveal-text' => 'Open Modal',
	), $atts, 'twp-modal' );

	$size = '';
	if ( 'full' !== $atts['size'] ) {
		$size = '';
	}

	$out = '';

	if ( 'button' === $atts['type'] ) {
		$out .= '<p><button type="button" class="button primary" data-open="' . $atts['id'] . '">' . $atts['reveal-text'] . '</button></p>';
	}
	else {
		$out .= '<p><a data-open="' . $atts['id'] . '">' . $atts['reveal-text'] . '</a></p>';
	}
	$out .= '

		<div class="reveal ' . $atts['size'] . '" id="' . $atts['id'] . '" data-reveal>
			' . do_shortcode( $content ) . '
			<button class="close-button" data-close aria-label="Close reveal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>';

	return $out;
}
add_shortcode( 'twp-modal', 'twp_modal' );
