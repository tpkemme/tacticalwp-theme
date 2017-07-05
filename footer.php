<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author Tyler Kemme <dev@tylerkemme.com>
 * @license MIT https://opensource.org/licenses/MIT
 * @version 1.0.4
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
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
