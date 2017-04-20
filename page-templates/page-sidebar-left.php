<?php
/*
Template Left Sidebar
*/
?>
<div id="page-sidebar-left" role="main">

<?php do_action( 'twp_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
			<?php if( twp_get_option( 'twp_layout_title_show' ) === 'show' ): ?>
				<header>
						<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
			<?php endif; ?>
      <?php do_action( 'twp_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
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
