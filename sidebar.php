<?php
/**
 * The sidebar containing the main widget area
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
<?php if (get_post_meta(get_the_ID(), 'twp_page_layout_sticky_sidebar', true) === 'sticky' ) : ?>
    <div class="sticky-sidebar-container"><aside class="sidebar sticky-sidebar">
<?php else : ?>
<aside class="sidebar">
<?php endif; ?>
    <?php do_action('twp_before_sidebar'); ?>
    <?php dynamic_sidebar('sidebar-widgets'); ?>
    <?php do_action('twp_after_sidebar'); ?>
<?php if (get_post_meta(get_the_ID(), 'twp_page_layout_sticky_sidebar', true) === 'sticky' ) : ?>
</aside></div>
<?php else : ?>
</aside>
<?php endif; ?>
