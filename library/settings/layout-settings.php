<?php
/**
 * Layout settings
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	*	Adds all fields for layout settings to custom meta box
	*
	* @param 	[cmb] 	 $cmb 	 [ custom metabox (cmb), required ]
	* @param 	[string] $prefix [ plugin prefix (solwp), optional ]
	* @return	[cmb]		 $CMB2	 [ cmb with fields added ]
	* @since 	1.0.0
	* @version 1.0.0
	*/
	if ( ! function_exists( 'solwp_add_layout_settings' ) ) :
		function solwp_add_layout_settings( $cmb, $prefix = 'solwp' ){
      // Set our CMB2 fields
      $cmb->add_field(array(
          'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
              <li class="accordion-item" data-accordion-item>
                <a href="#panel-layout-defaut" role="tab" class="accordion-title" id="panel-layout-defaut-heading" aria-controls="panel-layout-default">
                  <h6>Default Layouts</h6>
                </a>
                <div id="panel-layout-defaut" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-layout-defaut-heading">',
					'name' => __('Page Title Visibility', $prefix),
					'desc'    => __('Whether or not to show page title by default.', $prefix),
					'id'            => $prefix . '_layout_title_show',
					'type'    => 'radio_inline',
					'options' => array(
						'show' => __( 'Show', 'solwp' ),
						'hide'   => __( 'Hide', 'solwp' ),
					),
					'default' => 'show',
					'attributes'			 => array(
						'data-default'	 => 'show'
					),
      ));
      $cmb->add_field(array(
          'name' => __('Menu Item Padding', $prefix),
          'desc' => __('Space around menu item text (default = .7rem)', $prefix),
          'id'            => $prefix . '_layout_menu_padding',
          'type'             => 'text_small',
          'default'          => '.7rem',
          'attributes'			 => array(
            'data-default'	 => '.7rem'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Search Button Color', $prefix),
          'desc'    => __('Color of the search button in the topbar. (default: #5274ff)', $prefix),
          'id'            => $prefix . '_layout_top_search_button_color',
          'type'    => 'colorpicker',
          'default' => '#5274ff',
          'attributes'			 => array(
            'data-default'	 => '#5274ff'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Search Button Hover Color', $prefix),
          'desc'    => __('Hover color of the search button in the topbar. (default: #5c6bd0)', $prefix),
          'id'            => $prefix . '_layout_top_search_button_hover_color',
          'type'    => 'colorpicker',
          'default' => '#5c6bd0',
          'attributes'			 => array(
            'data-default'	 => '#5c6bd0'
          ),
					'after_row' => '</div></li></ul>'
			));
			return $cmb;
		}
	endif;

?>