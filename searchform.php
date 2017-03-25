<?php
/**
 * The template for displaying search form
 *
 * @package SolWP
 * @since SolWP 1.0.0
 */

do_action( 'solwp_before_searchform' ); ?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<?php do_action( 'solwp_searchform_top' ); ?>
	<div class="input-group">
		<input type="text" class="input-group-field" value="" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'solwp' ); ?>">
		<?php do_action( 'solwp_searchform_before_search_button' ); ?>
		<div class="input-group-button">
			<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'solwp' ); ?>" class="button">
		</div>
	</div>
	<?php do_action( 'solwp_searchform_after_search_button' ); ?>
</form>
<?php do_action( 'solwp_after_searchform' );
