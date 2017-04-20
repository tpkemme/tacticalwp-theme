<?php
/**
 * Navigation settings
 *
 * @package TacticalWP
 * @since 1.0.0
 */

 /**
	*	Adds all fields for nav settings to custom meta box
	*
	* @param 	[cmb] 	 $cmb 	 [ custom metabox (cmb), required ]
	* @param 	[string] $prefix [ plugin prefix (twp), optional ]
	* @return	[cmb]		 $CMB2	 [ cmb with fields added ]
	* @since 	1.0.0
	* @version 1.0.0
	*/
	if ( ! function_exists( 'twp_add_nav_settings' ) ) :
		function twp_add_nav_settings( $cmb, $prefix = 'twp' ){
      // Set our CMB2 fields
      $cmb->add_field(array(
          'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
              <li class="accordion-item" data-accordion-item>
                <a href="#panel-nav-menu" role="tab" class="accordion-title" id="panel-nav-menu-heading" aria-controls="panel-nav-menu">
                  <h6>Menus and Breadcrumbs</h6>
                </a>
                <div id="panel-nav-menu" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-nav-menu-heading">',
          'name' => __('Menu Margin', $prefix),
          'desc'    => __('Space around all menu objects. (default: 0rem)', $prefix),
          'id'            => $prefix . '_nav_menu_margin',
          'type'             => 'text_small',
          'default'          => '0rem',
          'attributes'			 => array(
            'data-default'	 => '0rem'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Menu Item Padding', $prefix),
          'desc' => __('Space around menu item text (default = .7rem)', $prefix),
          'id'            => $prefix . '_nav_menu_padding',
          'type'             => 'text_small',
          'default'          => '.7rem',
          'attributes'			 => array(
            'data-default'	 => '.7rem'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Submenu Background Color', $prefix),
          'desc'    => __('Color for submenus like drilldown or dropdown menus. (default: #15171d)', $prefix),
          'id'            => $prefix . '_nav_submenu_background_color',
          'type'             => 'colorpicker',
          'default'          => '#15171d',
          'attributes'			 => array(
            'data-default'	 => '#15171d',
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Breadcrumb Font Color', $prefix),
          'desc'    => __('The color for breadcrumb navigation links. (default: #e05252)', $prefix),
          'id'            => $prefix . '_nav_breadcrumb_color',
          'type'             => 'colorpicker',
          'default'          => '#e05252',
          'attributes'			 => array(
            'data-default'	 => '#e05252',
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Breadcrumb Hover Font Color', $prefix),
          'desc'    => __('The hover color for breadcrumb navigation links. (default: #e03333)', $prefix),
          'id'            => $prefix . '_nav_breadcrumb_hover_color',
          'type'             => 'colorpicker',
          'default'          => '#e03333',
          'attributes'			 => array(
            'data-default'	 => '#e03333',
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Breadcrumb Current Font Color', $prefix),
          'desc'    => __('The color for breadcrumb link of the current page. (default: #f5faff)', $prefix),
          'id'            => $prefix . '_nav_breadcrumb_current_color',
          'type'             => 'colorpicker',
          'default'          => '#f5faff',
          'attributes'			 => array(
            'data-default'	 => '#f5faff',
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Breadcrumb Divider Color', $prefix),
          'desc'    => __('The color for divider between breadcrumb links. (default: #f5faff)', $prefix),
          'id'            => $prefix . '_nav_breadcrumb_divider_color',
          'type'             => 'colorpicker',
          'default'          => '#f5faff',
          'attributes'			 => array(
            'data-default'	 => '#f5faff',
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Breadcrumb Divider Symbol', $prefix),
          'desc'    => __('The symbol for the divider between breadcrumb links. (default: >)', $prefix),
          'id'            => $prefix . '_nav_breadcrumb_divider_symbol',
          'type'             => 'text_small',
          'default'          => '>',
          'attributes'			 => array(
            'data-default'	 => '>',
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Breadcrumb Font Size', $prefix),
          'desc'    => __('The font size for breadcrumb links. (default: 0.75rem)', $prefix),
          'id'            => $prefix . '_nav_breadcrumb_font_size',
          'type'             => 'text_small',
          'default'          => '0.75rem',
          'attributes'			 => array(
            'data-default'	 => '0.75rem',
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Breadcrumb Font Uppercase', $prefix),
          'desc' => __('Choose the case of the breadcrumb links.  (default = uppercase)', $prefix),
          'id'   => $prefix . '_nav_breadcrumb_font_uppercase',
          'type'    => 'select',
          'default' => 'uppercase',
          'options' => array(
              'uppercase' => 'Uppercase',
              'lowercase' => 'Lowercase',
              'none' => 'Default'
          ),
          'attributes' => array(
              'data-default' => 'uppercase'
          ),
          'after_row' => '</div></li>'
      ));
      $cmb->add_field(array(
          'before_row'  => '<li class="accordion-item" data-accordion-item>
              <a href="#panel-nav-top" role="tab" class="accordion-title" id="panel-nav-top-heading" aria-controls="panel-nav-top">
                <h6>Topbar</h6>
              </a>
              <div id="panel-nav-top" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-nav-top-heading">',
          'name' => __('Topbar Padding', $prefix),
          'desc'    => __('Space around the top menu bar. (default: 0rem)', $prefix),
          'id'            => $prefix . '_nav_top_padding',
          'type'    => 'text_small',
          'default' => '0rem',
          'attributes'			 => array(
            'data-default'	 => '0rem'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Sticky Topbar', $prefix),
          'desc'    => __('Whether or not the topbar is always at the top. (default: Sticky)', $prefix),
          'id'            => $prefix . '_nav_top_sticky',
          'type'    => 'radio_inline',
          'options' => array(
            'sticky' => __( 'Sticky', 'twp' ),
            'none'   => __( 'Not Sticky', 'twp' ),
          ),
          'default' => 'sticky',
          'attributes'			 => array(
            'data-default'	 => 'sticky'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Topbar Background Color', $prefix),
          'desc'    => __('Background color of the top menu bar. (default: #5c6bc0)', $prefix),
          'id'            => $prefix . '_nav_top_background_color',
          'type'    => 'colorpicker',
          'default' => '#5c6bc0',
          'attributes'			 => array(
            'data-default'	 => '#5c6bc0'
          ),
      ));
			$cmb->add_field(array(
				'name' => __('Topbar Menu Font Size', $prefix),
				'desc'    => __('Font size of the topbar menu. (default: 80%)', $prefix),
				'id'            => $prefix . '_nav_top_item_font_size',
				'type'    => 'text_small',
				'default' => '80%',
				'attributes'			 => array(
					'data-default'	 => '80%'
				),
			));
			$cmb->add_field(array(
					'name' => __('Topbar Menu Font Family', $prefix),
					'desc'    => __('Font family of the topbar menu. (default: Josefin Sans)', $prefix),
					'id'            => $prefix . '_nav_top_item_font_family',
					'type'             => 'select',
					'show_option_none' => false,
					'default'          => 'Josefin Sans',
					'attributes' => array(
						'data-default' => 'Josefin Sans'
					),
					'options_cb'       => 'twp_google_fonts',
			));
			$cmb->add_field(array(
					'name' => __('Topbar Menu Font Color', $prefix),
					'desc'    => __('Font color of the topbar menu items. (default: #f5faff)', $prefix),
					'id'            => $prefix . '_nav_top_item_font_color',
					'type'    => 'colorpicker',
					'default' => '#f5faff',
					'attributes'			 => array(
						'data-default'	 => '#f5faff'
					),
			));
			$cmb->add_field(array(
					'name' => __('Topbar Menu Hover Font Color', $prefix),
					'desc'    => __('Hover font color of the topbar menu items. (default: #f5faff)', $prefix),
					'id'            => $prefix . '_nav_top_item_hover_font_color',
					'type'    => 'colorpicker',
					'default' => '#f5faff',
					'attributes'			 => array(
						'data-default'	 => '#f5faff'
					),
			));
			$cmb->add_field(array(
					'name' => __('Topbar Menu Background Color', $prefix),
					'desc'    => __('Background color of the topbar menu items. (default: #4a569a)', $prefix),
					'id'            => $prefix . '_nav_top_item_background_color',
					'type'    => 'colorpicker',
					'default' => '#4a569a',
					'attributes'			 => array(
						'data-default'	 => '#4a569a'
					),
			));
      $cmb->add_field(array(
          'name' => __('Topbar Menu Hover Background Color', $prefix),
          'desc'    => __('Background color of the topbar menu items. (default: #3f51b5)', $prefix),
          'id'            => $prefix . '_nav_top_item_hover_background_color',
          'type'    => 'colorpicker',
          'default' => '#3f51b5',
          'attributes'			 => array(
            'data-default'	 => '#3f51b5'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Topbar Submenu Background Color', $prefix),
          'desc'    => __('Background color of the topbar submenu items. (default: #5c6bc0)', $prefix),
          'id'            => $prefix . '_nav_top_submenu_background_color',
          'type'    => 'colorpicker',
          'default' => '#5c6bc0',
          'attributes'			 => array(
            'data-default'	 => '#5c6bc0'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Topbar Submenu Hover Background Color', $prefix),
          'desc'    => __('Background color of the topbar submenu items on hover. (default: #5c6bc0)', $prefix),
          'id'            => $prefix . '_nav_top_submenu_hover_background_color',
          'type'    => 'colorpicker',
          'default' => '#5c6bc0',
          'attributes'			 => array(
            'data-default'	 => '#5c6bc0'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Topbar Submenu Font Color', $prefix),
          'desc'    => __('Font color of the topbar submenu items. (default: #f5faff)', $prefix),
          'id'            => $prefix . '_nav_top_submenu_font_color',
          'type'    => 'colorpicker',
          'default' => '#f5faff',
          'attributes'			 => array(
            'data-default'	 => '#f5faff'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Topbar Submenu Hover Font Color', $prefix),
          'desc'    => __('Hover font color of the topbar menu items. (default: #f5faff)', $prefix),
          'id'            => $prefix . '_nav_top_submenu_hover_font_color',
          'type'    => 'colorpicker',
          'default' => '#f5faff',
          'attributes'			 => array(
            'data-default'	 => '#f5faff'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Topbar Menu Alignment', $prefix),
          'desc'    => __('Alignment of the topbar menu. (default: Left)', $prefix),
          'id'            => $prefix . '_nav_top_menu_alignment',
          'type'    => 'radio_inline',
          'options' => array(
            'left' => __( 'Left', 'twp' ),
            'right'   => __( 'Right', 'twp' ),
          ),
          'default' => 'left',
          'attributes'			 => array(
            'data-default'	 => 'left'
          ),
          'after_row' => '</div></li>'
      ));
      $cmb->add_field(array(
          'before_row'  => '<li class="accordion-item" data-accordion-item>
              <a href="#panel-nav-search" role="tab" class="accordion-title" id="panel-nav-search-heading" aria-controls="panel-nav-search">
                <h6>Search</h6>
              </a>
              <div id="panel-nav-search" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-nav-search-heading">',
          'name' => __('Show Search in Topbar', $prefix),
          'desc'    => __('Whether to show or hide the search form in the topbar. (default: show)', $prefix),
          'id'            => $prefix . '_nav_top_search',
          'type'    => 'radio_inline',
          'options' => array(
            'show' => __( 'Show', 'twp' ),
            'hide'   => __( 'Hide', 'twp' ),
          ),
          'default' => 'show',
          'attributes'			 => array(
            'data-default'	 => 'show'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Search Button Color', $prefix),
          'desc'    => __('Color of the search button in the topbar. (default: #5274ff)', $prefix),
          'id'            => $prefix . '_nav_top_search_button_color',
          'type'    => 'colorpicker',
          'default' => '#5274ff',
          'attributes'			 => array(
            'data-default'	 => '#5274ff'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Search Button Hover Color', $prefix),
          'desc'    => __('Hover color of the search button in the topbar. (default: #5c6bd0)', $prefix),
          'id'            => $prefix . '_nav_top_search_button_hover_color',
          'type'    => 'colorpicker',
          'default' => '#5c6bd0',
          'attributes'			 => array(
            'data-default'	 => '#5c6bd0'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Search Button Text Color', $prefix),
          'desc'    => __('Color of the search button text in the topbar. (default: #333333)', $prefix),
          'id'            => $prefix . '_nav_top_search_button_text_color',
          'type'    => 'colorpicker',
          'default' => '#333333',
          'attributes'			 => array(
            'data-default'	 => '#333333'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Search Button Text Hover Color', $prefix),
          'desc'    => __('Hover color of the search button text in the topbar. (default: #444444)', $prefix),
          'id'            => $prefix . '_nav_top_search_button_text_hover_color',
          'type'    => 'colorpicker',
          'default' => '#444444',
          'attributes'			 => array(
            'data-default'	 => '#444444'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Search Placeholder Text', $prefix),
          'desc'    => __('Search placeholder text in the topbar. (default: Search...)', $prefix),
          'id'            => $prefix . '_nav_top_search_placeholder_text',
          'type'    => 'text_medium',
          'default' => 'Search...',
          'attributes'			 => array(
            'data-default'	 => 'Search...'
          ),
          'after_row' => '</div></li>'
      ));
      $cmb->add_field(array(
          'before_row'  => '<li class="accordion-item" data-accordion-item>
              <a href="#panel-nav-title" role="tab" class="accordion-title" id="panel-nav-title-heading" aria-controls="panel-nav-title">
                <h6>Site Title & Logo</h6>
              </a>
              <div id="panel-nav-title" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-nav-title-heading">',
          'name' => __('Site Title Font Color', $prefix),
          'desc'    => __('Font color of the site title in the topbar. (default: #f5faff)', $prefix),
          'id'            => $prefix . '_nav_title_font_color',
          'type'    => 'colorpicker',
          'default' => '#f5faff',
          'attributes'			 => array(
            'data-default'	 => '#f5faff'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Site Title Font Size', $prefix),
          'desc'    => __('Font size of the site title in the topbar. (default: 80%)', $prefix),
          'id'            => $prefix . '_nav_title_font_size',
          'type'    => 'text_small',
          'default' => '80%',
          'attributes'			 => array(
            'data-default'	 => '80%'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Site Title Font Family', $prefix),
          'desc'    => __('Font family of the site title in the topbar. (default: Josefin Sans)', $prefix),
          'id'            => $prefix . '_nav_title_font_family',
					'type'             => 'select',
					'show_option_none' => false,
					'default'          => 'Josefin Sans',
					'attributes' => array(
						'data-default' => 'Josefin Sans'
					),
					'options_cb'       => 'twp_google_fonts',
      ));
			$cmb->add_field(array(
					'name' => __('Title Background Shadow', $prefix),
					'desc'    => __('Whether or not to show a shadow on the title and/or logo. (default: Show)', $prefix),
					'id'            => $prefix . '_nav_top_title_shadow',
					'type'    => 'radio_inline',
					'options' => array(
						'show' => __( 'Show', 'twp' ),
						'hide'   => __( 'Hide', 'twp' ),
					),
					'default' => 'show',
					'attributes'			 => array(
						'data-default'	 => 'show'
					),
			));
			$cmb->add_field(array(
					'name' => __('Logo Image', $prefix),
											'desc'    => __('Logo image for topbar, as url or image. (no default)', $prefix),
					'id'      => $prefix . '_nav_top_logo_image',
					'type'    => 'file',
					'options' => array(
						'url' => true,
					),
					'text'    => array(
						'add_upload_file_text' => 'Add Logo'
					),
					'query_args' => array(
						'type' => 'image',
					),
					'attributes' => array(
						'data-default' => ''
					),
					'after_row' => '</div></li></ul>'
			));
			return $cmb;
		}
	endif;

?>
