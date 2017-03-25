/* CMB2 Conditionals */

jQuery( document ).ready( function( $ ) {
  function update_conditionals(){
    $('input:text[data-conditional-id]').each( function(){
      var id =  $( this ).data( 'conditional-id' );
      var value =  $( this ).data( 'conditional-value' );
      var parent_value = $( '#' + id ).val();
      var container = $( this ).closest( '.cmb-row' );
      if( parent_value !== value ){
        container.hide();
      }
      else{
        container.show();
      }
    });
  }
  if( $('[data-conditional-id]') ){
    update_conditionals();
    $('[data-conditional-parent]').on( 'change', update_conditionals );
  }
});
