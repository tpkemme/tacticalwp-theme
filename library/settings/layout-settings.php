<?php
/**
 * Layout settings
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
  * Adds all fields for layout settings to custom meta box
  *
  * @param  [cmb]    $cmb    [ custom metabox (cmb), required ]
  * @return [cmb]        $CMB2   [ cmb with fields added ]
  * @since  1.0.0
  * @version 1.0.4
  */
	if ( ! function_exists( 'twp_add_layout_settings' ) ) :
	function twp_add_layout_settings( $cmb ) {
      // Set our CMB2 fields
      $cmb->add_field(array(
	      'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
              <li class="accordion-item" data-accordion-item>
                <a href="#panel-layout-defaut" role="tab" class="accordion-title" id="panel-layout-defaut-heading" aria-controls="panel-layout-default">
                  <h6>Default Layouts</h6>
                </a>
                <div id="panel-layout-defaut" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-layout-defaut-heading">',
	      'name' => __('Page Title Visibility', 'twp'),
	      'desc'    => __('Whether or not to show page title by default. (default: Hide)', 'twp'),
	      'id'            => 'twp_layout_title_show',
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
	  'name' => __('Page Layout', 'twp'),
	  'desc'    => __('What page template to use by default. (default: Page Right Sidebar)', 'twp'),
	  'id'            => 'twp_layout_default_layout',
	  'type'    => 'radio_inline',
	  'options' => array(
		  'Page Right Sidebar' => __( 'Page Right Sidebar', 'twp' ),
		  'Page Left Sidebar'   => __( 'Page Left Sidebar', 'twp' ),
		  'Full Width'   => __( 'Full Width', 'twp' ),
	  ),
	  'default' => 'hide',
	  'attributes'             => array(
		  'data-default'   => 'Page Right Sidebar',
	  ),
  ));
  $cmb->add_field(array(
	  'name' => __('Sticky Sidebar', 'twp'),
	  'desc'    => __('What page template to use by default. (default: Not Sticky)', 'twp'),
	  'id'            => 'twp_layout_sidebar_sticky',
	  'type'    => 'radio_inline',
	  'options' => array(
		  'sticky' => __( 'Sticky', 'twp' ),
		  'not-sticky'   => __( 'Not Sticky', 'twp' ),
	  ),
	  'default' => 'hide',
	  'attributes'             => array(
		  'data-default'   => 'not-sticky',
	  ),
	  'after_row' => '</div></li></ul>',
  ));
		return $cmb;
	}
	endif;

 /**
	*   Adds all fields for layout settings the edit page screen
	*
	* @param    [cmb]    $cmb    [ custom metabox (cmb), required ]
	* @return   [cmb]        $CMB2   [ cmb with fields added ]
	* @since    1.0.0
	* @version 1.0.0
	*/
	if ( ! function_exists( 'twp_add_layout_edit_settings' ) ) :
	function twp_add_layout_edit_settings( $cmb ) {
		// Add fields to edit screen for pages only at this point
		$cmb = new_cmb2_box( array(
			'id'           => 'twp-layout-edit',
			'title'              => 'TacticalWP Page Overrides',
			'hookup'       => true,
			'save_fields'  => true,
			'object_types' => array( 'page' ),
			'context'      => 'normal',
			'priority'     => 'high',
			'show_names'   => true,
		) );

		$cmb->add_field( array(
			'name'    => __( 'Page Title', 'twp' ),
			'id'      => 'twp_page_title_single',
			'description' => 'Change the layout for this specific page.',
			'type'    => 'select',
			'options' => array(
				'Hide' => 'Hide',
				'Show' => 'Show',
			),
			'default' => __( 'Show', 'twp' ),
			'attributes'             => array(
				'data-default'   => 'Show',
			),
		) );

  $cmb->add_field( array(
	  'name'    => __( 'Page Layout', 'twp' ),
	  'id'      => 'twp_page_layout_single',
	  'description' => 'Change the layout for this specific page.',
	  'type'    => 'select',
	  'options' => array(
		  'Default' => 'Default',
		  'Page Left Sidebar' => 'Page Left Sidebar',
		  'Page Left Sidebar' => 'Page Right Sidebar',
		  'Full Width' => 'Full Width',
	  ),
	  'default' => __( 'Default', 'twp' ),
	  'attributes'             => array(
		  'data-default'   => 'Default',
	  ),
  ) );
  $cmb->add_field( array(
	  'name'    => __( 'Sticky Sidebar', 'twp' ),
	  'id'      => 'twp_page_layout_sticky_sidebar',
	  'description' => 'Make the sidebar sticky.',
	  'type'    => 'select',
	  'options' => array(
		  'default' => 'Default',
		  'sticky' => 'Sticky',
		  'not-sticky' => 'Not Sticky',
	  ),
	  'default' => __( 'default', 'twp' ),
	  'attributes'             => array(
		  'data-default'   => 'default',
	  ),
  ) );
		return $cmb;
	}
	endif;
