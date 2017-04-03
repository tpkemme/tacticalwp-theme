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

?>
