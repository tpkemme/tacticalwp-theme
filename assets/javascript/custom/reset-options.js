/* Reset Theme Settings to Defaults */

jQuery(document).ready(function($) {

  function resetSettings(){
    $(':input','.tabs-panel.is-active .cmb-form').not(':button, :submit, :reset, [type="hidden"]').each(function(){
      var defaultVal = $(this).data('default');
      var tab = ($(this).attr('id').split('_'))[1];

      $(this).attr('value', defaultVal );
      $(this).val( defaultVal );
    });
    $('button[name="reset-settings-close"]').click();
    $('.tabs-panel.is-active input[id^="submit-cmb-"]').click();
  }

  $('button[name^="reset-confirmation"]').click(function( event ){
    event.preventDefault();
    resetSettings();
  });

});
