<?php
/**
 * Layout settings
 *
 * @package TacticalWP
 * @since 1.0.0
 */

 /**
  *	Adds all fields for layout settings to custom meta box
  *
  * @param 	[cmb] 	 $cmb 	 [ custom metabox (cmb), required ]
  * @param 	[string] $prefix [ plugin prefix (twp), optional ]
  * @return	[cmb]		 $CMB2	 [ cmb with fields added ]
  * @since 	1.0.0
  * @version 1.0.0
  */
	if ( ! function_exists( 'twp_add_layout_settings' ) ) :
	function twp_add_layout_settings( $cmb, $prefix = 'twp' ) {
      // Set our CMB2 fields
      $cmb->add_field(array(
	  'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
              <li class="accordion-item" data-accordion-item>
                <a href="#panel-layout-defaut" role="tab" class="accordion-title" id="panel-layout-defaut-heading" aria-controls="panel-layout-default">
                  <h6>Default Layouts</h6>
                </a>
                <div id="panel-layout-defaut" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-layout-defaut-heading">',
				'name' => __('Page Title Visibility', $prefix),
				'desc'    => __('Whether or not to show page title by default. (default: Hide)', $prefix),
				'id'            => $prefix . '_layout_title_show',
				'type'    => 'radio_inline',
				'options' => array(
					'show' => __( 'Show', 'twp' ),
					'hide'   => __( 'Hide', 'twp' ),
				),
				'default' => 'hide',
				'attributes'			 => array(
					'data-default'	 => 'hide',
				),
      ));
  $cmb->add_field(array(
	  'name' => __('Menu Item Padding', $prefix),
	  'desc' => __('Space around menu item text (default = .7rem)', $prefix),
	  'id'            => $prefix . '_layout_menu_padding',
	  'type'             => 'text_small',
	  'default'          => '.7rem',
	  'attributes'			 => array(
		'data-default'	 => '.7rem',
	  ),
  ));
  $cmb->add_field(array(
	  'name' => __('Search Button Color', $prefix),
	  'desc'    => __('Color of the search button in the topbar. (default: #5274ff)', $prefix),
	  'id'            => $prefix . '_layout_top_search_button_color',
	  'type'    => 'colorpicker',
	  'default' => '#5274ff',
	  'attributes'			 => array(
		'data-default'	 => '#5274ff',
	  ),
  ));
  $cmb->add_field(array(
	  'name' => __('Search Button Hover Color', $prefix),
	  'desc'    => __('Hover color of the search button in the topbar. (default: #5c6bd0)', $prefix),
	  'id'            => $prefix . '_layout_top_search_button_hover_color',
	  'type'    => 'colorpicker',
	  'default' => '#5c6bd0',
	  'attributes'			 => array(
		'data-default'	 => '#5c6bd0',
	  ),
				'after_row' => '</div></li></ul>',
		));
		return $cmb;
	}
	endif;

 /**
	*	Adds all fields for layout settings the edit page screen
	*
	* @param 	[cmb] 	 $cmb 	 [ custom metabox (cmb), required ]
	* @param 	[string] $prefix [ plugin prefix (twp), optional ]
	* @return	[cmb]		 $CMB2	 [ cmb with fields added ]
	* @since 	1.0.0
	* @version 1.0.0
	*/
	if ( ! function_exists( 'twp_add_layout_edit_settings' ) ) :
	function twp_add_layout_edit_settings( $cmb, $prefix = 'twp' ) {
		// Add fields to edit screen for pages only at this point
		$cmb = new_cmb2_box( array(
	  'id'           => 'twp-layout-edit',
				'title'				 => 'TacticalWP Page Overrides',
	  'hookup'       => true,
	  'save_fields'  => true,
				'object_types' => array( 'page' ), // post type
				'context'      => 'normal', // 'normal', 'advanced', or 'side'
				'priority'     => 'high',  // 'high', 'core', 'default' or 'low'
				'show_names'   => true,
      ) );

		$cmb->add_field( array(
				'name'    => __( 'Page Title', $prefix ),
				'id'      => $prefix . '_page_title_single',
				'description' => 'Change the layout for this specific page.',
				'type'    => 'select',
				'options' => array(
					'Hide' => 'Hide',
					'Show' => 'Show',
				),
				'default' => __( 'Show', $prefix ),
				'attributes'			 => array(
					'data-default'	 => 'Show',
				),
		) );

  $cmb->add_field( array(
	  'name'    => __( 'Page Layout', $prefix ),
	  'id'      => $prefix . '_page_layout_single',
				'description' => 'Change the layout for this specific page.',
	  'type'    => 'select',
				'options' => array(
					'Default' => 'Default',
					'Page Left Sidebar' => 'Page Left Sidebar',
					'Full Width' => 'Full Width',
				),
	  'default' => __( 'Default', $prefix ),
				'attributes'			 => array(
					'data-default'	 => 'Default',
				),
  ) );
  $cmb->add_field( array(
	  'name'    => __( 'Sticky Sidebar', $prefix ),
	  'id'      => $prefix . '_page_layout_sticky_sidebar',
				'description' => 'Make the sidebar sticky.',
	  'type'    => 'select',
				'options' => array(
					'default' => 'Default',
					'sticky' => 'Sticky',
				),
	  'default' => __( 'default', $prefix ),
				'attributes'			 => array(
					'data-default'	 => 'default',
				),
  ) );
		return $cmb;
	}
	endif;
