<?php
/**
 * Display a suitable column layout depending on whether sidebar email_exists
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author Tyler Kemme <dev@tylerkemme.com>
 * @license MIT https://opensource.org/licenses/MIT
 * @version 1.0.4
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

  if ( is_active_sidebar( 'sidebar-widgets' ) ) :
    echo '<div class="small-12 large-8 columns" role="main">';

  else :
    echo '<div class="small-12 columns" role="main">';
  endif;
