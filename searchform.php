<?php
/**
 * The template for displaying search form
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author Tyler Kemme <dev@tylerkemme.com>
 * @license MIT https://opensource.org/licenses/MIT
 * @version 1.0.4
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

do_action('twp_before_searchform'); ?>
<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <?php do_action('twp_searchform_top'); ?>
    <div class="input-group">
        <input type="text" class="input-group-field" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'twp'); ?>">
    <?php do_action('twp_searchform_before_search_button'); ?>
        <div class="input-group-button">
            <input type="submit" id="searchsubmit" value="<?php esc_attr_e('Search', 'twp'); ?>" class="button">
        </div>
    </div>
    <?php do_action('twp_searchform_after_search_button'); ?>
</form>
<?php
do_action('twp_after_searchform');
