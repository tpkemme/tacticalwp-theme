<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author Tyler Kemme <dev@tylerkemme.com>
 * @license MIT https://opensource.org/licenses/MIT
 * @version 1.0.4
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

get_header(); ?>

<div id="page" role="main">
    <article class="main-content">
    <?php if (have_posts() ) : ?>

    <?php ;/* Start the Loop */ ?>
    <?php
    while ( have_posts() ) :
the_post();
?>
    <?php get_template_part('template-parts/content', get_post_format()); ?>
    <?php endwhile; ?>

    <?php else : ?>
    <?php get_template_part('template-parts/content', 'none'); ?>

    <?php
			// End have_posts() check.
			endif;
            ?>

    <?php ;/* Display navigation to next/previous pages when applicable */ ?>
    <?php
    if (function_exists('twp_pagination') ) :
        twp_pagination();
        elseif (is_paged() ) :
    ?>
            <nav id="post-nav">
                <div class="post-previous"><?php next_posts_link(__('&larr; Older posts', 'twp')); ?></div>
                <div class="post-next"><?php previous_posts_link(__('Newer posts &rarr;', 'twp')); ?></div>
            </nav>
        <?php endif; ?>

    </article>
    <?php get_sidebar(); ?>

</div>

<?php
get_footer();
