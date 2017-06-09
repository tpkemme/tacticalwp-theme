<?php
/**
 * Accordion Menu shortcode.
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
  * Outputs an accordion menu when the [twp-accordion-menu]
  *
  * @param 	[string] $atts	   shortcode attributes, required.
  * @return	output of shortcode
  * @since 	1.0.0
  * @version 1.0.0
  */
function twp_accordion_menu( $atts ) {

	$atts = shortcode_atts( array(
		'id' => wp_generate_password( 6, false ),
		'menu' => 'header-menu',
	), $atts, 'twp-accordion-menu' );
=======
 * @since 1.0.0
 */

    /**
     * Custom Walker for Accordion Navs.
     */
    class Accordion_Menu_Walker_Nav_Menu extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"menu vertical nested\">\n";
        }
    }

    /**
     * Outputs an accordion menu when the [twp-accordion-menu].
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
    function twp_accordion_menu( $atts ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'menu' => 'header-menu',
    ), $atts, 'twp-accordion-menu');
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470

	$out = '';
	$locations = get_nav_menu_locations();

<<<<<<< HEAD
	if ( 0 !== $locations['header'] ) {
		$out = wp_nav_menu( array(
			'theme_location' 	=> 'header',
			'menu' => $atts['menu'],
			'menu_class' => 'vertical menu',
			'menu_id' => $atts['id'],
			'container' => '',
			'items_wrap' => '<ul id="%1$s" data-accordion-menu class="%2$s">%3$s</ul>',
			'echo'			 => false,
			'walker'		 => new TWP_Accordion_Menu_Walker(),
			'fallback_cb'    => false,
		));
	}

	return $out;
}
add_shortcode( 'twp-accordion-menu', 'twp_accordion_menu' );
=======
if (0 !== $locations['header'] ) {
	$out = wp_nav_menu(array(
    'theme_location' => 'header',
    'menu' => $atts['menu'],
    'menu_class' => 'vertical menu',
    'menu_id' => $atts['id'],
    'container' => '',
    'items_wrap' => '<ul id="%1$s" data-accordion-menu class="%2$s">%3$s</ul>',
    'echo' => false,
    'walker' => new Accordion_Menu_Walker_Nav_Menu(),
    'fallback_cb' => false,
    ));
}

return $out;
    }
    add_shortcode('twp-accordion-menu', 'twp_accordion_menu');
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
