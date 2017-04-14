<?php
/*
Template Full Width
*/
?>

<div id="page-full-width" role="main">

<?php do_action( 'solwp_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
			<?php $showtitle = get_post_meta( get_the_ID(), 'solwp_page_title_single', true ); ?>
			<?php if( solwp_get_option( 'solwp_layout_title_show' ) === 'show' ): ?>
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
      <?php do_action( 'solwp_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
      </div>
      <footer>
          <?php
            wp_link_pages(
              array(
                'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'solwp' ),
                'after'  => '</p></nav>',
              )
            );
          ?>
          <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action( 'solwp_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'solwp_page_after_comments' ); ?>
  </article>
<?php endwhile; ?>

<?php do_action( 'solwp_after_content' ); ?>

</div>
