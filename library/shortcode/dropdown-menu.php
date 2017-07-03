<?php
/**
 * Dropdown Menu shortcode
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.3
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

 /**
  * Outputs an dropdown menu when the [twp-dropdown-menu]
  *
  * @param  [string] $atts     shortcode attributes, required.
  * @return output of shortcode
  * @since  1.0.0
  * @version 1.0.3
  */
function twp_dropdown_menu( $atts ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'menu' => 'menu-header-menu',
	), $atts, 'twp-dropdown-menu' );

	$out = '';
	$locations = get_nav_menu_locations();

	if (0 !== $locations['header'] ) {
		$out = wp_nav_menu( array(
			'theme_location'    => 'header',
			'menu' => $atts['menu'],
			'menu_class' => 'menu dropdown',
			'menu_id' => $atts['id'],
			'container' => '',
			'items_wrap' => '<ul id="%1$s" data-dropdown-menu class="%2$s">%3$s</ul>',
			'echo'           => false,
		));
	}

	return $out;
}
add_shortcode( 'twp-dropdown-menu', 'twp_dropdown_menu' );
