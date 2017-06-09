<?php
/**
 * Custom Walker for Drilldown Navs
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.1
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

if ( ! class_exists( 'TWP_Drilldown_Menu_Walker' ) ) :
class TWP_Drilldown_Menu_Walker extends Walker_Nav_Menu {
		 function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<ul class=\"menu vertical \">\n";
			}
}
endif;
