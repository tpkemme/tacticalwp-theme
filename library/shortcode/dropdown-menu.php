<?php
/**
 * Dropdown Menu shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

	/**
	 * Custom Walker for Dropdown Navs
	 */
	class Dropdown_Menu_Walker_Nav_Menu extends Walker_Nav_Menu {
	 function start_lvl(&$output, $depth = 0, $args = array() ) {
		  $indent = str_repeat("\t", $depth);
		  $output .= "\n$indent<ul class=\"menu \">\n";
		}
	}

 /**
	* Outputs an dropdown menu when the [solwp-dropdown-menu]
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_dropdown_menu( $atts ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'menu' => 'menu-header-menu',
		), $atts, 'solwp-dropdown-menu' );

		$out = '';
		$locations = get_nav_menu_locations();

		if (0 !== $locations['header']) {
			$out = wp_nav_menu( array(
				'theme_location' 	=> 'header',
				'menu' => $atts['menu'],
				'menu_class' => 'menu dropdown',
				'menu_id' => $atts['id'],
				'container' => '',
				'items_wrap' => '<ul id="%1$s" data-dropdown-menu class="%2$s">%3$s</ul>',
				'echo'			 => false,
			 	));
		}

		return $out;
	}
	add_shortcode( 'solwp-dropdown-menu', 'solwp_dropdown_menu' );
?>
