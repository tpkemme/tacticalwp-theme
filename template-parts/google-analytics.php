<?php
/**
 * Displays Google Analytics tracking code if it is set
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.2
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

$ga = twp_get_option('twp_google_analytics');

if ( ! empty($ga) ) {
	echo $ga;
}
