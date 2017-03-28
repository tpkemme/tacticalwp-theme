/* Reset Theme Settings to Defaults */

jQuery(document).ready(function($) {

  function validateSettings(){
    $('.tabs-panel.is-active [data-fieldtype="text_small"] input.cmb2-text-small:not([name$="line_height"])').each(function(){
      if( this.value.match(/^(auto|0|\s*)$|^[+-]?[0-9]+.?([0-9]+)?(rem|px|em|ex|%|in|cm|mm|pt|pc)$/g)){
        return true;
      }
      else{
        $('.tabs-panel.is-active').prepend('<div id="setting-error-" class="error settings-error notice is-dismissible"><p><strong>'+ $("label[for='"+$(this).attr('id')+"']").text() +' must be a number and a unit (10px, 1.5em, 14pt, 80%, etc).</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>');
        event.preventDefault();
        return false;
      }
    });

    $('.tabs-panel.is-active [data-fieldtype="text_small"] input.cmb2-text-small[name$="line_height"]').each(function(){
      if( this.value.match(/^(\d+(\.\d+)?|\.\d+|^\s*)$/g)){
        return true;
      }
      else{
        $('.tabs-panel.is-active').prepend('<div id="setting-error-" class="error settings-error notice is-dismissible"><p><strong>'+ $("label[for='"+$(this).attr('id')+"']").text() +' can only be a rational number (1, 1.5, 0.75, etc).</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>');
        event.preventDefault();
        return false;
      }
    });
  }

  $('.cmb-form').on('submit', function( event ){

    validateSettings();

  });

});
