<?php
<<<<<<< HEAD
/**
 * Displays Google Analytics tracking code if it is set
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.0
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

$ga = twp_get_option('twp_google_analytics');

if ( ! empty($ga) ) {
	echo $ga;
}
=======
    // If Google Analytics tracking code is set, display it now
    $ga = twp_get_option('twp_google_analytics');

    if ( ! empty($ga) ) {
	echo $ga;
    }
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
