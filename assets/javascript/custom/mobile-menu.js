jQuery(document).ready(function($) {
  if( $(window).outerHeight < 640 ){
    $('#site-navigation > div > ul > li > a').on( 'click', function(e) {
      var menu = $('#mobile-menu > .menu');

      e.preventDefault();

      if( 'none' === menu.css( 'display' ) ){
        menu.css( 'display', 'initial' );
      } else{
        menu.css( 'display', 'none' );
      }
      return false;
    });
  }
});
