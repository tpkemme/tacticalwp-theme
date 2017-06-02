<?php
/**
 * Drilldown Menu shortcode.
 *
 * @since 1.0.0
 */

    /**
     * Custom Walker for Drilldown Navs.
     */
    class Drilldown_Menu_Walker_Nav_Menu extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"menu vertical \">\n";
        }
    }

    /**
     * Outputs an drilldown menu when the [twp-drilldown-menu].
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
    function twp_drilldown_menu( $atts ) {
	$atts = shortcode_atts(array(
    'id' => wp_generate_password(6, false),
    'menu' => 'menu-header-menu',
    ), $atts, 'twp-drilldown-menu');

$out = '';
$locations = get_nav_menu_locations();

if (0 !== $locations['header'] ) {
	$out = wp_nav_menu(array(
    'theme_location' => 'header',
    'menu' => $atts['menu'],
    'menu_class' => 'vertical menu',
    'menu_id' => $atts['id'],
    'container' => '',
    'items_wrap' => '<ul id="%1$s" data-drilldown class="%2$s">%3$s</ul>',
    'echo' => false,
    'walker' => new Drilldown_Menu_Walker_Nav_Menu(),
    'fallback_cb' => false,
    ));
}

return $out;
    }
    add_shortcode('twp-drilldown-menu', 'twp_drilldown_menu');
