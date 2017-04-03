/* Sticky header
 *
 * This file re-adjusts the header if it's sticky and being opened by a page
 * builder with a live editor (such as SiteOrigin Page Builder and Elementor)
 */

(function($) {

  if( $('#wpadminbar').length > 0 ){
    $( 'header.site-header' ).hide();

  }

})(jQuery);
