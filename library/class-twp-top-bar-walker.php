<?php
/**
 * Customize the output of menus for Foundation top bar.
 *
<<<<<<< HEAD
 * @package TacticalWP
 * @since 1.0.0
=======
 * @since TacticalWP 1.0.0
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
 */

/**
 * Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker.
 */
if ( ! class_exists('TacticalWP_Top_Bar_Walker') ) :
    class TacticalWP_Top_Bar_Walker extends Walker_Nav_Menu {

<<<<<<< HEAD
if ( ! class_exists( 'TWP_Top_Bar_Walker' ) ) :
	class TWP_Top_Bar_Walker extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<ul class=\"dropdown menu vertical\" data-toggle>\n";
		}
	}
=======
        public function start_lvl( &$output, $depth = 0, $args = array() ) {
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<ul class=\"dropdown menu vertical\" data-toggle>\n";
        }
    }
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
endif;
