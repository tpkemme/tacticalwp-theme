<?php
/**
 * Modal shortcode.
 *
<<<<<<< HEAD
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.0
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

 /**
  * Outputs an modal when the [twp-modal] is used
  *
  * @param 	[string] $atts	   shortcode attributes, required.
  * @param 	[string] $content  shortcode content, optional.
  * @return	output of shortcode
  * @since 	1.0.0
  * @version 1.0.0
  */
function twp_modal( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'type'		 => 'button',
		'size'		 => 'basic',
		'reveal-text' => 'Open Modal',
	), $atts, 'twp-modal' );

=======
 * @since 1.0.0
 */

    /**
     * Outputs an modal when the [twp-modal] is used.
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
    function twp_modal( $atts, $content = '' ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'type' => 'button',
    'size' => 'basic',
    'reveal-text' => 'Open Modal',
    ), $atts, 'twp-modal');

$size = '';
if ($atts['size'] !== 'full' ) {
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
	$size = '';
	if ( 'full' !== $atts['size'] ) {
		$size = '';
	}

	$out = '';

<<<<<<< HEAD
	if ( 'button' === $atts['type'] ) {
		$out .= '<p><button type="button" class="button primary" data-open="' . $atts['id'] . '">' . $atts['reveal-text'] . '</button></p>';
	}
	else {
		$out .= '<p><a data-open="' . $atts['id'] . '">' . $atts['reveal-text'] . '</a></p>';
=======
if ($atts['type'] === 'button' ) {
	$out .= '<p><button type="button" class="button primary" data-open="' . $atts['id'] . '">' . $atts['reveal-text'] . '</button></p>';
	} else {
	$out .= '<p><a data-open="' . $atts['id'] . '">' . $atts['reveal-text'] . '</a></p>';
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
	}
	$out .= '

<<<<<<< HEAD
		<div class="reveal ' . $atts['size'] . '" id="' . $atts['id'] . '" data-reveal>
			' . do_shortcode( $content ) . '
			<button class="close-button" data-close aria-label="Close reveal" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>';

	return $out;
}
add_shortcode( 'twp-modal', 'twp_modal' );
=======
			<div class="reveal ' . $atts['size'] . '" id="' . $atts['id'] . '" data-reveal>
				' . do_shortcode($content) . '
				<button class="close-button" data-close aria-label="Close reveal" type="button">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';

return $out;
    }
    add_shortcode('twp-modal', 'twp_modal');
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
