<?php
/**
 * Drilldown Menu shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

	/**
	 * Custom Walker for Drilldown Navs
	 */
	class Drilldown_Menu_Walker_Nav_Menu extends Walker_Nav_Menu {
	 function start_lvl(&$output, $depth = 0, $args = array() ) {
		  $indent = str_repeat("\t", $depth);
		  $output .= "\n$indent<ul class=\"menu vertical \">\n";
		}
	}

 /**
	* Outputs an drilldown menu when the [solwp-drilldown-menu]
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_drilldown_menu( $atts ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'menu' => 'menu-header-menu',
		), $atts, 'solwp-drilldown-menu' );

		$out = '';

		$out = wp_nav_menu( array(
			'theme_location' 	=> 'primary',
			'menu' => $atts['menu'],
			'menu_class' => 'vertical menu',
			'menu_id' => $atts['id'],
			'container' => '',
			'items_wrap' => '<ul id="%1$s" data-drilldown class="%2$s">%3$s</ul>',
			'echo'			 => false,
			'walker'		 => new Drilldown_Menu_Walker_Nav_Menu()
		 	));

		return $out;
	}
	add_shortcode( 'solwp-drilldown-menu', 'solwp_drilldown_menu' );
?>
