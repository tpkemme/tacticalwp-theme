<?php
/**
 * The sidebar containing the main widget area
 *
 * @package SolWP
 * @since SolWP 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'solwp_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'solwp_after_sidebar' ); ?>
</aside>
