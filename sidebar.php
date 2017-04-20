<?php
/**
 * The sidebar containing the main widget area
 *
 * @package TacticalWP
 * @since TacticalWP 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'twp_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'twp_after_sidebar' ); ?>
</aside>
