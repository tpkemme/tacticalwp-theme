/* Sticky Footer */

(function($) {

  var $footer = $('#footer-container'); // only search once

  $(window).bind('load resize orientationChange', function () {

    var pos = $footer.position();

    if(pos){
          height = ($(window).height() - pos.top) - ($footer.height() -1);

      if (height > 0) {
         $footer.css('margin-top', height);
      }
    }

  });

})(jQuery);
