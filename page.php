<?php
/**
 * The template for displaying pages
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package TacticalWP
 * @since TacticalWP 1.0.0
 */

 get_header(); ?>
<?php $layout = get_post_meta( get_the_ID(), 'twp_page_layout_single', true ); ?>
<?php get_template_part( 'template-parts/featured-image' ); ?>
<?php if( $layout === 'Page Left Sidebar'): ?>
	<?php get_template_part('page-templates/page-sidebar-left' ); ?>
<?php elseif( $layout === 'Left & Right Sidebar' ): ?>
	<?php get_template_part('page-templates/page-sidebar-double' ); ?>
<?php elseif( $layout === 'Full Width' ): ?>
	<?php get_template_part('page-templates/page-full-width' ); ?>
<?php else: ?>
	 <div id="page" role="main">

	 <?php do_action( 'twp_before_content' ); ?>
	 <?php while ( have_posts() ) : the_post(); ?>
	   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
				 <?php $showtitle = get_post_meta( get_the_ID(), 'twp_page_title_single', true ); ?>
				 <?php if( twp_get_option( 'twp_layout_title_show' ) === 'show' ): ?>
					 <?php if( $showtitle === 'Show' ): ?>
						 <header>
								 <h1 class="entry-title"><?php the_title(); ?></h1>
						 </header>
					 <?php endif; ?>
				 <?php else: ?>
					 <?php if( $showtitle === 'Show' ): ?>
						 <header>
								 <h1 class="entry-title"><?php the_title(); ?></h1>
						 </header>
					 <?php endif; ?>
				 <?php endif; ?>
	       <?php do_action( 'twp_page_before_entry_content' ); ?>
	       <div class="entry-content">
	           <?php the_content(); ?>
	           <?php edit_post_link( __( 'Edit', 'twp' ), '<span class="edit-link">', '</span>' ); ?>
	       </div>
	       <footer>
	          <?php
	            wp_link_pages(
	              array(
	                'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'twp' ),
	                'after'  => '</p></nav>',
	              )
	            );
	          ?>
	          <p><?php the_tags(); ?></p>
	       </footer>
	       <?php do_action( 'twp_page_before_comments' ); ?>
	       <?php comments_template(); ?>
	       <?php do_action( 'twp_page_after_comments' ); ?>
	   </article>
	 <?php endwhile;?>

	 <?php do_action( 'twp_after_content' ); ?>
	 <?php get_sidebar(); ?>

	 </div>
<?php endif; ?>


 <?php get_footer();
