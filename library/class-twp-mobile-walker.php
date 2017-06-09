<?php
/**
 * Customize the output of menus for Foundation mobile walker.
 *
<<<<<<< HEAD
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.0
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
=======
 * @since TacticalWP 1.0.0
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
 */

/**
 * Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker.
 */
if ( ! class_exists('TacticalWP_Mobile_Walker') ) :
    class TacticalWP_Mobile_Walker extends Walker_Nav_Menu {

<<<<<<< HEAD
if ( ! class_exists( 'TWP_Mobile_Walker' ) ) :
	class TWP_Mobile_Walker extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<ul class=\"vertical nested menu\">\n";
		}
	}
=======
        public function start_lvl( &$output, $depth = 0, $args = array() ) {
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<ul class=\"vertical nested menu\">\n";
        }
    }
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
endif;
