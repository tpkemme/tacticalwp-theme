<?php
/**
 * Thumbnail shortcode
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
  * Outputs an thumbnail when the [twp-thumbnail] is used
  *
  * @param  [string] $atts     shortcode attributes, required.
  * @param  [string] $content  shortcode content, optional.
  * @return output of shortcode
  * @since  1.0.0
  * @version 1.0.4
  */
function twp_thumbnail( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'url'   => 'http://placeimg.com/200/200/arch',
	), $atts, 'twp-thumbnail' );

    $out = '';
    $out .= '
		<img id="' . $atts['id'] . '" class="thumbnail" src="' . $atts['url'] . '" />';
    return $out;
}
add_shortcode( 'twp-thumbnail', 'twp_thumbnail' );
