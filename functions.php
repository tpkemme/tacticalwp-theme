<?php
/**
 * Author: Tyler Kemme
 * URL: http://tpkemme.com
 *
 * TacticalWP functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package TacticalWP
 * @since TacticalWP 1.0.0
 */

/** cmb2 custom functions */
require_once( 'library/cmb2-functions.php' );

/** Utilities and helper functions */
require_once( 'library/utilities.php' );

/** Shortcodes **/
require_once( 'library/shortcode/accordion.php' );
require_once( 'library/shortcode/accordion-menu.php' );
require_once( 'library/shortcode/badge.php' );
require_once( 'library/shortcode/breadcrumbs.php' );
require_once( 'library/shortcode/button.php' );
require_once( 'library/shortcode/callout.php' );
require_once( 'library/shortcode/card.php' );
require_once( 'library/shortcode/cube.php' );
require_once( 'library/shortcode/drilldown-menu.php' );
require_once( 'library/shortcode/dropdown-menu.php' );
require_once( 'library/shortcode/dropdown-pane.php' );
require_once( 'library/shortcode/label.php' );
require_once( 'library/shortcode/modal.php' );
require_once( 'library/shortcode/motion.php' );
require_once( 'library/shortcode/progress-bar.php' );
require_once( 'library/shortcode/slider.php' );
require_once( 'library/shortcode/switch.php' );
require_once( 'library/shortcode/video.php' );
require_once( 'library/shortcode/table.php' );
require_once( 'library/shortcode/tabs.php' );
require_once( 'library/shortcode/testimonial.php' );
require_once( 'library/shortcode/thumbnail.php' );
require_once( 'library/shortcode/toggle.php' );
require_once( 'library/shortcode/tooltip.php' );
require_once( 'library/shortcode/visibility.php' );

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/twp.php' );

/** Format comments */
require_once( 'library/class-twp-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-twp-top-bar-walker.php' );
require_once( 'library/class-twp-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** User-set theme settings */
require_once( 'library/settings/global-settings.php' );
require_once( 'library/settings/nav-settings.php' );
require_once( 'library/settings/footer-settings.php' );
require_once( 'library/settings/layout-settings.php' );
require_once( 'library/settings/typo-settings.php' );
require_once( 'library/settings/obj-settings.php' );
require_once( 'library/settings/advanced-settings.php' );
require_once( 'library/theme-settings.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-twp-protocol-relative-theme-assets.php' );
