<?php
/**
 * Footer settings
 *
 * @package TacticalWP
 * @since 1.0.0
 */

 /**
	*	Adds all fields for footer settings to custom meta box
	*
	* @param 	[cmb] 	 $cmb 	 [ custom metabox (cmb), required ]
	* @param 	[string] $prefix [ plugin prefix (twp), optional ]
	* @return	[cmb]		 $CMB2	 [ cmb with fields added ]
	* @since 	1.0.0
	* @version 1.0.0
	*/
	if ( ! function_exists( 'twp_add_footer_settings' ) ) :
		function twp_add_footer_settings( $cmb, $prefix = 'twp' ){
      // Set our CMB2 fields
      $cmb->add_field(array(
        'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
            <li class="accordion-item" data-accordion-item>
              <a href="#panel-footer-menu" role="tab" class="accordion-title" id="panel-footer-menu-heading" aria-controls="panel-footer-menu">
                <h6>Footer Styles</h6>
              </a>
              <div id="panel-footer-menu" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-footer-menu-heading">',
        'name' => __('Footer Background Color', $prefix),
        'desc'    => __('Background color of the footer. (default: #222222)', $prefix),
        'id'            => $prefix . '_footer_background_color',
        'type'             => 'colorpicker',
        'default'          => '#222222',
        'attributes'			 => array(
          'data-default'	 => '#222222'
        ),
      ));
      $cmb->add_field(array(
        'name' => __('Footer Text Color', $prefix),
        'desc'    => __('Color of text in the footer. (default: #8d8d8d)', $prefix),
        'id'            => $prefix . '_footer_font_color',
        'type'             => 'colorpicker',
        'default'          => '#8d8d8d',
        'attributes'			 => array(
          'data-default'	 => '#8d8d8d',
        ),
      ));
      $cmb->add_field(array(
        'name' => __('Footer Link Color', $prefix),
        'desc'    => __('Color of links in the footer. (default: #ffffff)', $prefix),
        'id'            => $prefix . '_footer_link_font_color',
        'type'             => 'colorpicker',
        'default'          => '#ffffff',
        'attributes'			 => array(
          'data-default'	 => '#ffffff',
        ),
      ));
      $cmb->add_field(array(
        'name' => __('Footer Link Hover Color', $prefix),
        'desc'    => __('Hover color of links in the footer. (default: #6deef6)', $prefix),
        'id'            => $prefix . '_footer_link_hover_font_color',
        'type'             => 'colorpicker',
        'default'          => '#6deef6',
        'attributes'			 => array(
          'data-default'	 => '#6deef6',
          ),
			));
			$cmb->add_field(array(
				'name' => __('Sticky Footer', $prefix),
				'desc'    => __('Whether or not the footer is always visible. (default: Not Sticky)', $prefix),
				'id'            => $prefix . '_footer_sticky',
				'type'    => 'radio_inline',
				'options' => array(
					'sticky' => __( 'Sticky', 'twp' ),
					'none'   => __( 'Not Sticky', 'twp' ),
				),
				'default' => 'none',
				'attributes'			 => array(
					'data-default'	 => 'none'
				),
				'after_row' => '</div></li></ul>'
			));
			return $cmb;
		}
	endif;

?>
