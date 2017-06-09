<?php
/**
 * Footer settings
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.0
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

 /**
  * Adds all fields for footer settings to custom meta box
  *
  * @param  [cmb]    $cmb    [ custom metabox (cmb), required ]
  * @return [cmb]        $CMB2   [ cmb with fields added ]
  * @since  1.0.0
  * @version 1.0.0
  */
	if ( ! function_exists( 'twp_add_footer_settings' ) ) :
	function twp_add_footer_settings( $cmb ) {
      // Set our CMB2 fields
      $cmb->add_field(array(
		  'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
            <li class="accordion-item" data-accordion-item>
              <a href="#panel-footer-menu" role="tab" class="accordion-title" id="panel-footer-menu-heading" aria-controls="panel-footer-menu">
                <h6>Footer Styles</h6>
              </a>
              <div id="panel-footer-menu" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-footer-menu-heading">',
		  'name' => __('Footer Background Color', 'twp'),
		  'desc'    => __('Background color of the footer. (default: #222222)', 'twp'),
		  'id'            => 'twp_footer_background_color',
		  'type'             => 'colorpicker',
		  'default'          => '#222222',
		  'attributes'             => array(
			  'data-default'     => '#222222',
		  ),
      ));
  $cmb->add_field(array(
	  'name' => __('Footer Text Color', 'twp'),
	  'desc'    => __('Color of text in the footer. (default: #8d8d8d)', 'twp'),
	  'id'            => 'twp_footer_font_color',
	  'type'             => 'colorpicker',
	  'default'          => '#8d8d8d',
	  'attributes'             => array(
		  'data-default'     => '#8d8d8d',
	  ),
  ));
  $cmb->add_field(array(
	  'name' => __('Footer Link Color', 'twp'),
	  'desc'    => __('Color of links in the footer. (default: #ffffff)', 'twp'),
	  'id'            => 'twp_footer_link_font_color',
	  'type'             => 'colorpicker',
	  'default'          => '#ffffff',
	  'attributes'             => array(
		  'data-default'     => '#ffffff',
	  ),
  ));
  $cmb->add_field(array(
	  'name' => __('Footer Link Hover Color', 'twp'),
	  'desc'    => __('Hover color of links in the footer. (default: #1563ff)', 'twp'),
	  'id'            => 'twp_footer_link_hover_font_color',
	  'type'             => 'colorpicker',
	  'default'          => '#1563ff',
	  'attributes'             => array(
		  'data-default'     => '#1563ff',
	  ),
  ));
		$cmb->add_field(array(
			'name' => __('Sticky Footer', 'twp'),
			'desc'    => __('Whether or not the footer is always visible. (default: Not Sticky)', 'twp'),
			'id'            => 'twp_footer_sticky',
			'type'    => 'radio_inline',
			'options' => array(
				'sticky' => __( 'Sticky', 'twp' ),
				'none'   => __( 'Not Sticky', 'twp' ),
			),
			'default' => 'none',
			'attributes'             => array(
				'data-default'   => 'none',
			),
			'after_row' => '</div></li></ul>',
		));
		return $cmb;
	}
	endif;
