<?php
/**
 * Accordion Menu shortcode.
 *
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

$out = '';
$locations = get_nav_menu_locations();

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
