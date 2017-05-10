<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package TacticalWP
 * @since TacticalWP 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'twp_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'twp_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'twp_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'twp_before_closing_body' ); ?>
<?php if ( twp_get_option( 'twp_advanced_browser_sync' ) === 'yes' ) : ?>
	<script id="__bs_script__">//<![CDATA[
	  document.write("<script async src='http://localhost:3001/browser-sync/browser-sync-client.js?v=2.18.8'><\/script>".replace("HOST", location.hostname));
	</script>
<?php endif; ?>
</body>
</html>
