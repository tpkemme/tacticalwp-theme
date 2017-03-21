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

?>
