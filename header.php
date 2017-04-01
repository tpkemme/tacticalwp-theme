<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package SolWP
 * @since SolWP 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<?php /* embedded styles set with theme settings */ get_template_part( 'template-parts/embedded-styles' ); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'solwp_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'solwp_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
		<?php if( solwp_get_option( 'solwp_nav_top_menu_alignment') === 'right' ): ?>
  		<?php if( solwp_get_option( 'solwp_nav_top_search') !== 'hide' ): ?>
				<div class="top-bar-right top-bar-search">
	  				<ul class="menu">
	  					<li><input type="search" placeholder="Search"></li>
	  					<li><button type="button" class="button">Search</button></li>
	  				</ul>
				</div>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
			<div class="title-bar-title show-for-large show-for-medium">
				<ul class="title-bar-title dropdown menu" data-dropdown-menu>
					<li class="menu-text">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php $logo = solwp_get_option( 'solwp_nav_top_logo_image' ); ?>
							<?php if( !empty( $logo ) ): ?>
								<img src="<?php echo $logo ?>" class="site-logo" />
							<?php endif; ?>
							<?php bloginfo( 'name' ); ?>
						</a>
					</li>
				</ul>
			</div>
			<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
			<div class="top-bar-right">
					<?php solwp_top_bar_r(); ?>
			</div>
		<?php else: ?>
			<div class="top-bar-left">
				<div class="title-bar-title show-for-large show-for-medium">
					<ul class="title-bar-title dropdown menu" data-dropdown-menu>
						<li class="menu-text">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php $logo = solwp_get_option( 'solwp_nav_top_logo_image' ); ?>
								<?php if( !empty( $logo ) ): ?>
									<img src="<?php echo $logo ?>" class="site-logo" />
								<?php endif; ?>
								<?php bloginfo( 'name' ); ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<?php solwp_top_bar_r(); ?>
      <?php if( solwp_get_option( 'solwp_nav_top_search') !== 'hide' ): ?>
  			<div class="top-bar-right top-bar-search">
  				<ul class="menu">
  					<li><input type="search" placeholder="<?php solwp( 'nav_top_search_placeholder_text' ) ?>"></li>
  					<li><button type="button" class="button"><?php solwp( 'nav_top_search_button_text' ) ?></button></li>
  				</ul>
  				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
  					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
  				<?php endif; ?>
  			</div>
      <?php endif; ?>
		<?php endif; ?>
		</nav>
	</header>
	<section class="container">
		<?php do_action( 'solwp_after_header' );
