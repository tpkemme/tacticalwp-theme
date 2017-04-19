<?php
/**
 * Utilities and Helper functions for all library files
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs the solwp option with correct prefix given option name
	*
	* Echos output of solwp_get_option( $prefix . 'option_name' ).  This function
	* isn't necessary but it keeps the embedded styles template a lot cleaner
	*
	* @param 	[string] $option [ option name, required ]
	* @param 	[string] $option [ option name, optional ]
	* @return	void         		[ echos output ]
	* @since 	1.0.0
	* @version 1.0.0
	*/
	if ( ! function_exists( 'solwp' ) ) :
		function solwp( $option, $prefix = 'solwp_' ){
			echo solwp_get_option( $prefix . $option );
		}
	endif;

	/**
	 * Gets a list of google fonts for font settings
	 *
	 * @since  0.1.0
	 * @return $options array of fonts
	 */
	if ( ! function_exists( 'solwp_google_fonts' ) ) :
		function solwp_google_fonts()
		{
				$json_google_fonts = file_get_contents(get_template_directory_uri() . '/assets/fonts/google-fonts.json');
				$jgf = json_decode($json_google_fonts);
				$options = array();

				foreach ($jgf->items as $gfont) {
						$options[ str_replace('/s', '+', $gfont->family) ] = $gfont->family;
				}
				array_shift($options);
				return $options;
		}
	endif;

	/**
	 * Gets a list of source files for a given Google Font Family
	 *
	 * @since  1.0.0
	 * @param  $family	name of the family to retrieve variants
	 * @return $files   array of font source urls or false if family doesn't exist
	 */
	if ( ! function_exists( 'solwp_google_fonts_src' ) ) :
		function solwp_google_fonts_src( $family )
		{
				$json_google_fonts = file_get_contents(get_template_directory_uri() . '/assets/fonts/google-fonts.json');
				$jgf = json_decode($json_google_fonts);
				$options = array();

				foreach ($jgf->items as $gfont) {
						if( $gfont->family === $family ){
							return $gfont->variants;
						}
				}
				return false;
		}
	endif;

	/**
	 * Break shortcode
	 *
	 * @since  1.0.0
	 * @return html break
	 */
	if ( ! function_exists( 'solwp_br' ) ) :
		function solwp_br()
		{
				return '<br/>';
		}
		add_shortcode( 'br', 'solwp_br' );
	endif;

	/**
	 * code shortcode
	 *
	 * @since  1.0.0
	 * @return html div with code class
	 */
	if ( ! function_exists( 'solwp_code' ) ) :
		function solwp_code( $atts, $content = '')
		{
				return '<div class="code-wrapper"><div class="code-container"><div class="code">'. do_shortcode($content) .'</div></div></div>';
		}
		add_shortcode( 'code', 'solwp_code' );
	endif;

  /**
	 * Registers shortcode button in the tinyMCE editor
	 *
	 * @since  1.0.0
	 * @return html div with code class
	 */
	 add_action( 'after_setup_theme', 'solwp_mce_theme_setup' );
	 if ( ! function_exists( 'solwp_mce_theme_setup' ) ) {
	     function solwp_mce_theme_setup() {

	         add_action( 'init', 'solwp_mce_buttons' );

	     }
	 }
  if ( ! function_exists( 'solwp_mce_buttons' ) ) {
      function solwp_mce_buttons() {
          if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
              return;
          }

          if ( get_user_option( 'rich_editing' ) !== 'true' ) {
              return;
          }

          add_filter( 'mce_external_plugins', 'solwp_mce_add_buttons' );
          add_filter( 'mce_buttons', 'solwp_mce_register_buttons' );
      }
  }

  if ( ! function_exists( 'solwp_mce_add_buttons' ) ) {
      function solwp_mce_add_buttons( $plugin_array ) {
          $plugin_array['scbutton'] = get_template_directory_uri().'/assets/javascript/custom/tinymce_buttons.js';
          return $plugin_array;
      }
  }

  if ( ! function_exists( 'solwp_mce_register_buttons' ) ) {
      function solwp_mce_register_buttons( $buttons ) {
          array_push( $buttons, 'scbutton' );
          return $buttons;
      }
  }

  add_action ( 'after_wp_tiny_mce', 'solwp_mce_tinymce_extra_vars' );

  if ( !function_exists( 'solwp_mce_tinymce_extra_vars' ) ) {
  	function solwp_mce_tinymce_extra_vars() { ?>
  		<script type="text/javascript">
  			var tinyMCE_object = <?php echo json_encode(
  				array(
  					'button_name' => esc_html__('SolWP', 'solwp'),
  					'button_title' => esc_html__('SolWP Shortcodes', 'solwp'),
  					'image_title' => esc_html__('Image', 'solwp'),
  					'image_button_title' => esc_html__('Add image', 'solwp'),
  				)
  				);
  			?>;
  		</script><?php
  	}
  }
?>
