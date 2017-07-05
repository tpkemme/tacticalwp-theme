<?php
/**
 * Navigation settings
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author Tyler Kemme <dev@tylerkemme.com>
 * @license MIT https://opensource.org/licenses/MIT
 * @version 1.0.4
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

 /**
  * Adds all fields for nav settings to custom meta box
  *
  * @param  [cmb]    $cmb    [ custom metabox (cmb), required ]
  * @return [cmb]        $CMB2   [ cmb with fields added ]
  * @since  1.0.0
  * @version 1.0.4
  */
	if ( ! function_exists( 'twp_add_nav_settings' ) ) :
	function twp_add_nav_settings( $cmb ) {
    // Set our CMB2 fields
    $cmb->add_field(array(
	    'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
        <li class="accordion-item" data-accordion-item>
          <a href="#panel-nav-menu" role="tab" class="accordion-title" id="panel-nav-menu-heading" aria-controls="panel-nav-menu">
            <h6>Menus and Breadcrumbs</h6>
          </a>
          <div id="panel-nav-menu" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-nav-menu-heading">',
	    'name' => __('Menu Margin', 'twp'),
	    'desc'    => __('Space around all menu objects. (default: 0rem)', 'twp'),
	    'id'            => 'twp_nav_menu_margin',
	    'type'             => 'text_small',
	    'default'          => '0rem',
	    'attributes'           => array(
		    'data-default'   => '0rem',
		),
  	));
	  $cmb->add_field(array(
		  'name' => __('Menu Item Padding', 'twp'),
		  'desc' => __('Space around menu item text (default = .7rem)', 'twp'),
		  'id'            => 'twp_nav_menu_padding',
		  'type'             => 'text_small',
		  'default'          => '.7rem',
		  'attributes'           => array(
			  'data-default'   => '.7rem',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Submenu Background Color', 'twp'),
		  'desc'    => __('Color for submenus like drilldown or dropdown menus. (default: #e3ecff)', 'twp'),
		  'id'            => 'twp_nav_submenu_background_color',
		  'type'             => 'colorpicker',
		  'default'          => '#e3ecff',
		  'attributes'           => array(
			  'data-default'   => '#e3ecff',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Breadcrumb Font Color', 'twp'),
		  'desc'    => __('The color for breadcrumb navigation links. (default: #ff5252)', 'twp'),
		  'id'            => 'twp_nav_breadcrumb_color',
		  'type'             => 'colorpicker',
		  'default'          => '#ff5252',
		  'attributes'           => array(
			  'data-default'   => '#ff5252',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Breadcrumb Hover Font Color', 'twp'),
		  'desc'    => __('The hover color for breadcrumb navigation links. (default: #ff6666)', 'twp'),
		  'id'            => 'twp_nav_breadcrumb_hover_color',
		  'type'             => 'colorpicker',
		  'default'          => '#ff6666',
		  'attributes'           => array(
			  'data-default'   => '#ff6666',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Breadcrumb Current Font Color', 'twp'),
		  'desc'    => __('The color for breadcrumb link of the current page. (default: #333333)', 'twp'),
		  'id'            => 'twp_nav_breadcrumb_current_color',
		  'type'             => 'colorpicker',
		  'default'          => '#333333',
		  'attributes'           => array(
			  'data-default'   => '#333333',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Breadcrumb Divider Color', 'twp'),
		  'desc'    => __('The color for divider between breadcrumb links. (default: #333333)', 'twp'),
		  'id'            => 'twp_nav_breadcrumb_divider_color',
		  'type'             => 'colorpicker',
		  'default'          => '#333333',
		  'attributes'           => array(
			  'data-default'   => '#333333',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Breadcrumb Divider Symbol', 'twp'),
		  'desc'    => __('The symbol for the divider between breadcrumb links. (default: >)', 'twp'),
		  'id'            => 'twp_nav_breadcrumb_divider_symbol',
		  'type'             => 'text_small',
		  'default'          => '>',
		  'attributes'           => array(
			  'data-default'   => '>',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Breadcrumb Font Size', 'twp'),
		  'desc'    => __('The font size for breadcrumb links. (default: 0.875rem)', 'twp'),
		  'id'            => 'twp_nav_breadcrumb_font_size',
		  'type'             => 'text_small',
		  'default'          => '0.875rem',
		  'attributes'           => array(
			  'data-default'   => '0.875rem',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Breadcrumb Font Uppercase', 'twp'),
		  'desc' => __('Choose the case of the breadcrumb links.  (default = Uppercase)', 'twp'),
		  'id'   => 'twp_nav_breadcrumb_font_uppercase',
		  'type'    => 'select',
		  'default' => 'uppercase',
		  'options' => array(
			  'uppercase' => 'Uppercase',
			  'lowercase' => 'Lowercase',
			  'none' => 'Default',
		  ),
		  'attributes' => array(
			  'data-default' => 'uppercase',
		  ),
		  'after_row' => '</div></li>',
	  ));
	  $cmb->add_field(array(
		  'before_row'  => '<li class="accordion-item" data-accordion-item>
        <a href="#panel-nav-top" role="tab" class="accordion-title" id="panel-nav-top-heading" aria-controls="panel-nav-top">
          <h6>Topbar</h6>
        </a>
        <div id="panel-nav-top" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-nav-top-heading">',
		  'name' => __('Topbar Padding', 'twp'),
		  'desc'    => __('Space around the top menu bar. (default: 0rem)', 'twp'),
		  'id'            => 'twp_nav_top_padding',
		  'type'    => 'text_small',
		  'default' => '0rem',
		  'attributes'           => array(
			  'data-default'   => '0rem',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Sticky Topbar', 'twp'),
		  'desc'    => __('Whether or not the topbar is always visible. (default: Sticky)', 'twp'),
		  'id'            => 'twp_nav_top_sticky',
		  'type'    => 'radio_inline',
		  'options' => array(
			  'sticky' => __( 'Sticky', 'twp' ),
			  'none'   => __( 'Not Sticky', 'twp' ),
		  ),
		  'default' => 'sticky',
		  'attributes'           => array(
			  'data-default'   => 'sticky',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Topbar Background Color', 'twp'),
		  'desc'    => __('Background color of the top menu bar. (default: #222222)', 'twp'),
		  'id'            => 'twp_nav_top_background_color',
		  'type'    => 'colorpicker',
		  'default' => '#222222',
		  'attributes'           => array(
			  'data-default'   => '#222222',
		  ),
	  ));
			$cmb->add_field(array(
				'name' => __('Topbar Menu Font Size', 'twp'),
				'desc'    => __('Font size of the topbar menu. (default: 1.0875rem)', 'twp'),
				'id'            => 'twp_nav_top_item_font_size',
				'type'    => 'text_small',
				'default' => '1.0875rem',
				'attributes'             => array(
					'data-default'   => '1.0875rem',
				),
			));
			$cmb->add_field(array(
				'name' => __('Topbar Menu Font Family', 'twp'),
				'desc'    => __('Font family of the topbar menu. (default: Open Sans)', 'twp'),
				'id'            => 'twp_nav_top_item_font_family',
				'type'             => 'select',
				'show_option_none' => false,
				'default'          => 'Open Sans',
				'attributes' => array(
					'data-default' => 'Open Sans',
				),
				'options_cb'       => 'twp_google_fonts',
			));
			$cmb->add_field(array(
				'name' => __('Topbar Menu Font Color', 'twp'),
				'desc'    => __('Font color of the topbar menu items. (default: #f8f8f8)', 'twp'),
				'id'            => 'twp_nav_top_item_font_color',
				'type'    => 'colorpicker',
				'default' => '#f8f8f8',
				'attributes'             => array(
					'data-default'   => '#f8f8f8',
				),
			));
			$cmb->add_field(array(
				'name' => __('Topbar Menu Hover Font Color', 'twp'),
				'desc'    => __('Hover font color of the topbar menu items. (default: #f8f8f8)', 'twp'),
				'id'            => 'twp_nav_top_item_hover_font_color',
				'type'    => 'colorpicker',
				'default' => '#f8f8f8',
				'attributes'             => array(
					'data-default'   => '#f8f8f8',
				),
			));
			$cmb->add_field(array(
				'name' => __('Topbar Menu Background Color', 'twp'),
				'desc'    => __('Background color of the topbar menu items. (default: #222222)', 'twp'),
				'id'            => 'twp_nav_top_item_background_color',
				'type'    => 'colorpicker',
				'default' => '#222222',
				'attributes'             => array(
					'data-default'   => '#222222',
				),
			));
	  $cmb->add_field(array(
		  'name' => __('Topbar Menu Hover Background Color', 'twp'),
		  'desc'    => __('Background color of the topbar menu items. (default: #444444)', 'twp'),
		  'id'            => 'twp_nav_top_item_hover_background_color',
		  'type'    => 'colorpicker',
		  'default' => '#444444',
		  'attributes'           => array(
			  'data-default'   => '#444444',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Topbar Submenu Background Color', 'twp'),
		  'desc'    => __('Background color of the topbar submenu items. (default: #444444)', 'twp'),
		  'id'            => 'twp_nav_top_submenu_background_color',
		  'type'    => 'colorpicker',
		  'default' => '#444444',
		  'attributes'           => array(
			  'data-default'   => '#444444',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Topbar Submenu Hover Background Color', 'twp'),
		  'desc'    => __('Background color of the topbar submenu items on hover. (default: #444444)', 'twp'),
		  'id'            => 'twp_nav_top_submenu_hover_background_color',
		  'type'    => 'colorpicker',
		  'default' => '#444444',
		  'attributes'           => array(
			  'data-default'   => '#444444',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Topbar Submenu Font Color', 'twp'),
		  'desc'    => __('Font color of the topbar submenu items. (default: #f8f8f8)', 'twp'),
		  'id'            => 'twp_nav_top_submenu_font_color',
		  'type'    => 'colorpicker',
		  'default' => '#f8f8f8',
		  'attributes'           => array(
			  'data-default'   => '#f8f8f8',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Topbar Submenu Hover Font Color', 'twp'),
		  'desc'    => __('Hover font color of the topbar menu items. (default: #c0c9ff)', 'twp'),
		  'id'            => 'twp_nav_top_submenu_hover_font_color',
		  'type'    => 'colorpicker',
		  'default' => '#c0c9ff',
		  'attributes'           => array(
			  'data-default'   => '#c0c9ff',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Topbar Menu Alignment', 'twp'),
		  'desc'    => __('Alignment of the topbar menu. (default: Right)', 'twp'),
		  'id'            => 'twp_nav_top_menu_alignment',
		  'type'    => 'radio_inline',
		  'options' => array(
			  'left' => __( 'Left', 'twp' ),
			  'right'   => __( 'Right', 'twp' ),
		  ),
		  'default' => 'right',
		  'attributes'           => array(
			  'data-default'   => 'right',
		  ),
		  'after_row' => '</div></li>',
	  ));
	  $cmb->add_field(array(
		  'before_row'  => '<li class="accordion-item" data-accordion-item>
        <a href="#panel-nav-search" role="tab" class="accordion-title" id="panel-nav-search-heading" aria-controls="panel-nav-search">
          <h6>Search</h6>
        </a>
        <div id="panel-nav-search" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-nav-search-heading">',
		  'name' => __('Show Search in Topbar', 'twp'),
		  'desc'    => __('Whether to show or hide the search form in the topbar. (default: Hide)', 'twp'),
		  'id'            => 'twp_nav_top_search',
		  'type'    => 'radio_inline',
		  'options' => array(
			  'show' => __( 'Show', 'twp' ),
			  'hide'   => __( 'Hide', 'twp' ),
		  ),
		  'default' => 'hide',
		  'attributes'           => array(
			  'data-default'   => 'hide',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Search Button Color', 'twp'),
		  'desc'    => __('Color of the search button in the topbar. (default: #1563ff)', 'twp'),
		  'id'            => 'twp_nav_top_search_button_color',
		  'type'    => 'colorpicker',
		  'default' => '#1563ff',
		  'attributes'           => array(
			  'data-default'   => '#1563ff',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Search Button Hover Color', 'twp'),
		  'desc'    => __('Hover color of the search button in the topbar. (default: #5364fc)', 'twp'),
		  'id'            => 'twp_nav_top_search_button_hover_color',
		  'type'    => 'colorpicker',
		  'default' => '#5364fc',
		  'attributes'           => array(
			  'data-default'   => '#5364fc',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Search Button Text Color', 'twp'),
		  'desc'    => __('Color of the search button text in the topbar. (default: #ffffff)', 'twp'),
		  'id'            => 'twp_nav_top_search_button_text_color',
		  'type'    => 'colorpicker',
		  'default' => '#ffffff',
		  'attributes'           => array(
			  'data-default'   => '#ffffff',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Search Button Text Hover Color', 'twp'),
		  'desc'    => __('Hover color of the search button text in the topbar. (default: #ffffff)', 'twp'),
		  'id'            => 'twp_nav_top_search_button_text_hover_color',
		  'type'    => 'colorpicker',
		  'default' => '#ffffff',
		  'attributes'           => array(
			  'data-default'   => '#ffffff',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Search Placeholder Text', 'twp'),
		  'desc'    => __('Search placeholder text in the topbar. (default: Search)', 'twp'),
		  'id'            => 'twp_nav_top_search_placeholder_text',
		  'type'    => 'text_medium',
		  'default' => 'Search',
		  'attributes'           => array(
			  'data-default'   => 'Search',
		  ),
		  'after_row' => '</div></li>',
	  ));
	  $cmb->add_field(array(
		  'before_row'  => '<li class="accordion-item" data-accordion-item>
        <a href="#panel-nav-title" role="tab" class="accordion-title" id="panel-nav-title-heading" aria-controls="panel-nav-title">
          <h6>Site Title & Logo</h6>
        </a>
        <div id="panel-nav-title" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-nav-title-heading">',
		  'name' => __('Site Title Font Color', 'twp'),
		  'desc'    => __('Font color of the site title in the topbar. (default: #ffffff)', 'twp'),
		  'id'            => 'twp_nav_title_font_color',
		  'type'    => 'colorpicker',
		  'default' => '#ffffff',
		  'attributes'           => array(
			  'data-default'   => '#ffffff',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Site Title Font Size', 'twp'),
		  'desc'    => __('Font size of the site title in the topbar. (default: 200%)', 'twp'),
		  'id'            => 'twp_nav_title_font_size',
		  'type'    => 'text_small',
		  'default' => '200%',
		  'attributes'           => array(
			  'data-default'   => '200%',
		  ),
	  ));
	  $cmb->add_field(array(
		  'name' => __('Site Title Font Family', 'twp'),
		  'desc'    => __('Font family of the site title in the topbar. (default: Titillium Web)', 'twp'),
		  'id'            => 'twp_nav_title_font_family',
		  'type'             => 'select',
		  'show_option_none' => false,
		  'default'          => 'Titillium Web',
		  'attributes' => array(
			  'data-default' => 'Titillium Web',
		  ),
		  'options_cb'       => 'twp_google_fonts',
	  ));
		$cmb->add_field(array(
			'name' => __('Show Site Title', 'twp'),
			'desc'    => __('Whether or not to show site title. (default: Show)', 'twp'),
			'id'            => 'twp_nav_top_title_show',
			'type'    => 'radio_inline',
			'options' => array(
				'show' => __( 'Show', 'twp' ),
				'hide'   => __( 'Hide', 'twp' ),
			),
			'default' => 'show',
			'attributes'             => array(
				'data-default'   => 'show',
			),
		));
		$cmb->add_field(array(
			'name' => __('Title Background Shadow', 'twp'),
			'desc'    => __('Whether or not to show a shadow on the title and/or logo. (default: Hide)', 'twp'),
			'id'            => 'twp_nav_top_title_shadow',
			'type'    => 'radio_inline',
			'options' => array(
				'show' => __( 'Show', 'twp' ),
				'hide'   => __( 'Hide', 'twp' ),
			),
			'default' => 'hide',
			'attributes'             => array(
				'data-default'   => 'hide',
			),
		));
		$cmb->add_field(array(
			'name' => __('Logo Image', 'twp'),
			'desc'    => __('Logo image for topbar, as url or image. (no default)', 'twp'),
			'id'      => 'twp_nav_top_logo_image',
			'type'    => 'file',
			'options' => array(
				'url' => true,
			),
			'text'    => array(
				'add_upload_file_text' => 'Add Logo',
			),
			'query_args' => array(
				'type' => 'image',
			),
			'attributes' => array(
				'data-default' => '',
			),
			'after_row' => '</div></li></ul>',
		));
		return $cmb;
	}
	endif;
