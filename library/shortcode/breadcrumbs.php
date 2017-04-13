<?php
/**
 * Breadcrumbs shortcode
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	* Outputs an breadcrumb when the [solwp-breadcrumb] is used
	*
	* @param 	[string] $atts	 [ shortcode attributes, required ]
	* @param 	[string] $option [ shortcode content, optional ]
	* @return	output of shortcode
	* @since 	1.0.0
	* @version 1.0.0
	*/
	function solwp_breadcrumb( $atts ) {

		$atts = shortcode_atts( array(
			'id' => wp_generate_password( 6, false ),
			'type'		 => 'primary',
		), $atts, 'solwp-breadcrumb' );

		$out = '<nav aria-label="You are here:" role="navigation">
			<ul class="breadcrumbs">';

		$out .= '<li><a href="'.home_url().'" rel="nofollow">Home</a></li>';
    if (is_category() || is_single()) {
        $out .= "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        $out .= get_the_category(' &bull; ');
            if (is_single()) {
                $out .= "<li>";
                $out .= get_the_title() . '</li>';
            }
    } elseif (is_page()) {
        $out .= "<li>";
        $out .= get_the_title() . '</li>';
    } elseif (is_search()) {
        $out .= "<li>Search Results for... ";
        $out .= '"<em>';
        $out .= get_search_query();
        $out .= '</em></li>"';
    }
		return $out . '</ul></nav>';
	}
	add_shortcode( 'solwp-breadcrumb', 'solwp_breadcrumb' );
?>
