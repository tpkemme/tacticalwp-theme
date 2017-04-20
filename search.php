<?php
/**
 * The template for displaying search results pages.
 *
 * @package TacticalWP
 * @since TacticalWP 1.0.0
 */

get_header(); ?>

<div class="row">
	<div class="small-12 large-8 columns" role="main">

		<?php do_action( 'twp_before_content' ); ?>

		<h2><?php _e( 'Search Results for', 'twp' ); ?> "<?php echo get_search_query(); ?>"</h2>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif;?>

	<?php do_action( 'twp_before_pagination' ); ?>

	<?php
	if ( function_exists( 'twp_pagination' ) ) :
		twp_pagination();
	elseif ( is_paged() ) :
	?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'twp' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'twp' ) ); ?></div>
		</nav>
	<?php endif; ?>

	<?php do_action( 'twp_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer();
