/* Sticky header
 *
 * This file re-adjusts the header if it's sticky and being opened by a page
 * builder with a live editor (such as SiteOrigin Page Builder and Elementor)
 */

 jQuery(document).ready(function($) {

  if( $('.so-preview').length > 0 ){
    $( 'header.site-header' ).css( 'top', 0 );
  }

});
