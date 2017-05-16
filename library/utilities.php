<?php
/**
 * Utilities and Helper functions for all library files
 *
 * @package TacticalWP
 * @since 1.0.0
 */

 /**
  * Outputs the twp option with correct prefix given option name
  *
  * Echos output of twp_get_option( $prefix . 'option_name' ).  This function
  * isn't necessary but it keeps the embedded styles template a lot cleaner
  *
  * @param 	[string] $option [ option name, required ]
  * @param 	[string] $option [ option name, optional ]
  * @return	void         		[ echos output ]
  * @since 	1.0.0
  * @version 1.0.0
  */
	if ( ! function_exists( 'twp' ) ) :
  	function twp( $option, $prefix = 'twp_' ) {
  		echo twp_get_option( $prefix . $option );
  	}
	endif;

 /**
  * Outputs the twp option with correct prefix given option name
  *
  * Echos output of twp_get_option( $prefix . 'option_name' ).  This function
  * isn't necessary but it keeps the embedded styles template a lot cleaner
  *
  * @param 	[string] $option [ option name, required ]
  * @param 	[string] $option [ option name, optional ]
  * @return	void         		[ echos output ]
  * @since 	1.0.0
  * @version 1.0.0
  */
  function twp_custom_excerpt_length( $length ) {
     return 40;
  }
  function twp_custom_excerpt_more($more) {
     global $post;
     return '<a class="more-link" href="'. get_permalink($post->ID) . '">'. __('Read More', 'themify') .'</a>';
  }
  add_filter( 'excerpt_length', 'twp_custom_excerpt_length', 999 );
  add_filter('excerpt_more', 'twp_custom_excerpt_more');

	/**
	 * Gets a list of google fonts for font settings
	 *
	 * @since  0.1.0
	 * @return $options array of fonts
	 */
	if ( ! function_exists( 'twp_google_fonts' ) ) :
	function twp_google_fonts() {
			$json_google_fonts = file_get_contents(get_template_directory_uri() . '/assets/fonts/google-fonts.json');
			$jgf = json_decode($json_google_fonts);
			$options = array();

			foreach ($jgf->items as $gfont ) {
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
	if ( ! function_exists( 'twp_google_fonts_src' ) ) :
	function twp_google_fonts_src( $family ) {
			$json_google_fonts = file_get_contents(get_template_directory_uri() . '/assets/fonts/google-fonts.json');
			$jgf = json_decode($json_google_fonts);
			$options = array();

			foreach ($jgf->items as $gfont ) {
			if ( $gfont->family === $family ) {
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
	if ( ! function_exists( 'twp_br' ) ) :
	function twp_br() {
			return '<br/>';
		}
	add_shortcode( 'br', 'twp_br' );
	endif;

	/**
	 * code shortcode
	 *
	 * @since  1.0.0
	 * @return html div with code class
	 */
	if ( ! function_exists( 'twp_code' ) ) :
	function twp_code( $atts, $content = '' ) {
			return '<div class="code-wrapper"><div class="code-container"><div class="code">' . do_shortcode($content) . '</div></div></div>';
		}
	add_shortcode( 'code', 'twp_code' );
	endif;

	/**
	 * Displays settings demo on frontend
	 *
	 * @since  1.0.0
	 * @return html div with code class
	 */
	if ( ! function_exists( 'twp_settings_demo' ) ) :
	function twp_settings_demo( $atts, $content = '' ) {
			return $settings_demo;
		}
	add_shortcode( 'twp-settings-demo', 'twp_settings_demo' );
	endif;

  /**
	 * Registers shortcode button in the tinyMCE editor
	 *
	 * @since  1.0.0
	 * @return html div with code class
	 */
	 add_action( 'after_setup_theme', 'twp_mce_theme_setup' );
	 if ( ! function_exists( 'twp_mce_theme_setup' ) ) {
	function twp_mce_theme_setup() {

		add_action( 'init', 'twp_mce_buttons' );

	}
	 }
  if ( ! function_exists( 'twp_mce_buttons' ) ) {
	function twp_mce_buttons() {
		if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
			return;
          }

		if ( get_user_option( 'rich_editing' ) !== 'true' ) {
			return;
          }

		add_filter( 'mce_external_plugins', 'twp_mce_add_buttons' );
		add_filter( 'mce_buttons', 'twp_mce_register_buttons' );
      }
  }

  if ( ! function_exists( 'twp_mce_add_buttons' ) ) {
	function twp_mce_add_buttons( $plugin_array ) {
		$plugin_array['scbutton'] = get_template_directory_uri() . '/assets/javascript/custom/tinymce_buttons.js';
		return $plugin_array;
      }
  }

  if ( ! function_exists( 'twp_mce_register_buttons' ) ) {
	function twp_mce_register_buttons( $buttons ) {
		array_push( $buttons, 'scbutton' );
		return $buttons;
      }
  }

  add_action( 'after_wp_tiny_mce', 'twp_mce_tinymce_extra_vars' );

  if ( ! function_exists( 'twp_mce_tinymce_extra_vars' ) ) {
  	function twp_mce_tinymce_extra_vars() { ?>
  		<script type="text/javascript">
  			var tinyMCE_object = <?php echo json_encode(
  				array(
  					'button_name' => esc_html__('TacticalWP', 'twp'),
  					'button_title' => esc_html__('TacticalWP Shortcodes', 'twp'),
  					'image_title' => esc_html__('Image', 'twp'),
  					'image_button_title' => esc_html__('Add image', 'twp'),
  				)
  				);
  			?>;
  		</script><?php
  	}
  }

?>
