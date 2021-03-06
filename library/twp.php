<?php
/**
 * Foundation PHP template
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author Tyler Kemme <dev@tylerkemme.com>
 * @license MIT https://opensource.org/licenses/MIT
 * @version 1.0.4
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

// Pagination.
if ( ! function_exists( 'twp_pagination' ) ) :
function twp_pagination() {
		global $wp_query;

		$big = 999999999; // This needs to be an unlikely integer

		// For more options and info view the docs for paginate_links()
		// http://codex.wordpress.org/Function_Reference/paginate_links
		$paginate_links = paginate_links( array(
			'base' => str_replace( $big, '%#%', html_entity_decode( get_pagenum_link( $big ) ) ),
			'current' => max( 1, get_query_var( 'paged' ) ),
			'total' => $wp_query->max_num_pages,
			'mid_size' => 5,
			'prev_next' => true,
			'prev_text' => __( 'Previous', 'twp' ),
			'next_text' => __( 'Next', 'twp' ),
			'type' => 'list',
		) );

			$paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination' role='navigation' aria-label='Pagination'>", $paginate_links );
			$paginate_links = str_replace( '<li><span class="page-numbers dots">', "<li><a href='#'>", $paginate_links );
			$paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='current'><span class='show-for-sr'>You\'re on page</span><span>", $paginate_links );
			// $paginate_links = str_replace( '</span>', '</span>', $paginate_links );
			$paginate_links = str_replace( "<li><a href='#'>&hellip;</a></li>", "<li class='ellipsis' aria-hidden='true'></li>", $paginate_links );
			$paginate_links = preg_replace( '/\s*page-numbers/', '', $paginate_links );

			// Display the pagination if more than one page is found.
			if ( $paginate_links ) {
				echo '<div class="pagination-centered">';
				echo $paginate_links;
				echo '</div><!--// end .pagination -->';
				}
}
endif;

/**
 * A fallback when no navigation is selected by default.
 */

if ( ! function_exists( 'twp_menu_fallback' ) ) :
function twp_menu_fallback() {
		echo '<div class="alert-box secondary">';
		/* translators: %1$s: link to menus, %2$s: link to customize. */
		printf( __( 'Please assign a menu to the primary menu location under %1$s or %2$s the design.', 'twp' ),
		/* translators: %s: menu url */
		sprintf(  __( '<a href="%s">Menus</a>', 'twp' ),
			get_admin_url( get_current_blog_id(), 'nav-menus.php' )
		),
		/* translators: %s: customize url */
		sprintf(  __( '<a href="%s">Customize</a>', 'twp' ),
			get_admin_url( get_current_blog_id(), 'customize.php' )
		)
			);
			echo '</div>';
}
endif;

// Add Foundation 'active' class for the current menu item.
if ( ! function_exists( 'twp_active_nav_class' ) ) :
function twp_active_nav_class( $classes, $item ) {
		if ( 1 === $item->current || true === $item->current_item_ancestor ) {
			$classes[] = 'active';
			}
		return $classes;
}
add_filter( 'nav_menu_css_class', 'twp_active_nav_class', 10, 2 );
endif;

/**
 * Use the active class of ZURB Foundation on wp_list_pages output.
 * From required+ Foundation http://themes.required.ch.
 */
if ( ! function_exists( 'twp_active_list_pages_class' ) ) :
function twp_active_list_pages_class( $input ) {

		$pattern = '/current_page_item/';
		$replace = 'current_page_item active';

		$output = preg_replace( $pattern, $replace, $input );

		return $output;
}
add_filter( 'wp_list_pages', 'twp_active_list_pages_class', 10, 2 );
endif;

/**
 * Enable Foundation responsive embeds for WP video embeds
 */

if ( ! function_exists( 'twp_responsive_video_oembed_html' ) ) :
function twp_responsive_video_oembed_html( $html, $url, $attr, $post_id ) {

		// Whitelist of oEmbed compatible sites that **ONLY** support video.
		// Cannot determine if embed is a video or not from sites that
		// support multiple embed types such as Facebook.
		// Official list can be found here https://codex.wordpress.org/Embeds
		$video_sites = array(
			'youtube', // first for performance
			'collegehumor',
			'dailymotion',
			'funnyordie',
			'ted',
			'videopress',
			'vimeo',
		);

			$is_video = false;

			// Determine if embed is a video
			foreach ( $video_sites as $site ) {
				// Match on `$html` instead of `$url` because of
				// shortened URLs like `youtu.be` will be missed
				if ( strpos( $html, $site ) ) {
					$is_video = true;
					break;
					}
				}

			// Process video embed
			if ( true == $is_video ) {

				// Find the `<iframe>`
				$doc = new DOMDocument();
				$doc->loadHTML( $html );
				$tags = $doc->getElementsByTagName( 'iframe' );

				// Get width and height attributes
				foreach ( $tags as $tag ) {
					$width  = $tag->getAttribute('width');
					$height = $tag->getAttribute('height');
					break; // should only be one
					}

				$class = 'responsive-embed'; // Foundation class

				// Determine if aspect ratio is 16:9 or wider
				if ( is_numeric( $width ) && is_numeric( $height ) && ( $width / $height >= 1.7 ) ) {
					$class .= ' widescreen'; // space needed
					}

				// Wrap oEmbed markup in Foundation responsive embed
				return '<div class="' . $class . '">' . $html . '</div>';

				} else { // not a supported embed
				return $html;
				}

}
add_filter( 'embed_oembed_html', 'twp_responsive_video_oembed_html', 10, 4 );
endif;
