<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.2
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<header>
		<?php if ( ! is_single() && has_post_thumbnail() ) : ?>
			<div class="twp-featured-image-thumb">
				<?php the_post_thumbnail( 'thumbnail' ); ?>
			</div>
			<div class="twp-featured-meta">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php twp_entry_meta(); ?>
			</div>
		<?php else : ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php twp_entry_meta(); ?>
		<?php endif; ?>
	</header>
	<div class="entry-content">
		<?php if ( ! is_single() ) : ?>
		    <?php the_excerpt(); ?>
		<?php else : ?>
			<?php the_content( __( 'Continue reading...', 'twp' ) ); ?>
		<?php endif; ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>
