<?php
/**
 * Dropdown Pane shortcode.
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
  * Outputs an dropdown pane when the [twp-dropdown-pane] is used
  *
  * @param 	[string] $atts	   shortcode attributes, required.
  * @param 	[string] $content  shortcode content, optional.
  * @return	output of shortcode
  * @since 	1.0.0
  * @version 1.0.0
  */
function twp_dropdown_pane( $atts, $content = '' ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'button'	 => 'Toggle Button',
	), $atts, 'twp-dropdown-pane' );

	$out = '<button class="button" type="button" data-toggle="' . $atts['id'] . '">' . $atts['button'] . '</button>
		<div class="dropdown-pane" id="' . $atts['id'] . '" data-dropdown>
			' . do_shortcode($content) . '
		</div>';

	return $out;
}
add_shortcode( 'twp-dropdown-pane', 'twp_dropdown_pane' );
=======
 * @since 1.0.0
 */

    /**
     * Outputs an dropdown pane when the [twp-dropdown-pane] is used.
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
    function twp_dropdown_pane( $atts, $content = '' ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'button' => 'Toggle Button',
    ), $atts, 'twp-dropdown-pane');

$out = '<button class="button" type="button" data-toggle="' . $atts['id'] . '">' . $atts['button'] . '</button>
						<div class="dropdown-pane" id="' . $atts['id'] . '" data-dropdown>
							' . do_shortcode($content) . '
						</div>';

return $out;
    }
    add_shortcode('twp-dropdown-pane', 'twp_dropdown_pane');
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
