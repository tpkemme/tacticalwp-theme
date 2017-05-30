<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package  TacticalWP
 * @since    1.0.0
 * @version  1.0.0
 * @category twp-theme
 * @author   Tyler Kemme
 * @license  MIT
 * @link     http://tacticalwp.com
 */

?>

        </section>
        <div id="footer-container">
            <footer id="footer">
                <?php do_action('twp_before_footer'); ?>
                <?php dynamic_sidebar('footer-widgets'); ?>
                <?php do_action('twp_after_footer'); ?>
            </footer>
        </div>

    <?php do_action('twp_layout_end'); ?>

<?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas' ) : ?>
        </div><!-- Close off-canvas wrapper inner -->
    </div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action('twp_before_closing_body'); ?>
</body>
</html>
