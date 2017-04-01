<?php
/**
 * Typography settings
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	*	Adds all fields for typography settings to custom meta box
	*
	* @param 	[cmb] 	 $cmb 	 [ custom metabox (cmb), required ]
	* @param 	[string] $prefix [ plugin prefix (solwp), optional ]
	* @return	[cmb]		 $CMB2	 [ cmb with fields added ]
	* @since 	1.0.0
	* @version 1.0.0
	*/
	if ( ! function_exists( 'solwp_add_typo_settings' ) ) :
		function solwp_add_typo_settings( $cmb, $prefix = 'solwp' ){
      // Set our CMB2 fields
      $cmb->add_field(array(
          'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
              <li class="accordion-item" data-accordion-item>
                <a href="#panel-typo-base" role="tab" class="accordion-title" id="panel-typo-base-heading" aria-controls="panel-typo-base">
                  <h6>Header Typography</h6>
                </a>
                <div id="panel-typo-base" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-typ-base-heading">',
          'name' => __('Header Font Family', $prefix),
          'desc'    => __('Font family for header elements h1, h2, and h3. (default: Josefin Sans)', $prefix),
          'id'            => $prefix . '_typo_header_family',
          'type'             => 'select',
          'show_option_none' => false,
          'default'          => 'Josefin Sans',
          'options_cb'       => 'solwp_google_fonts',
          'attributes'			 => array(
            'data-default'	 => 'Josefin Sans'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Header Font Weight', $prefix),
          'desc' => __('Set the weight of the header font (default = 300)', $prefix),
          'id'   => $prefix . '_typo_header_weight',
          'type'    => 'select',
          'default' => '300',
          'options' => array(
              '100' => '100',
              '200' => '200',
              '300' => '300',
              '400' => '400',
              '500' => '500',
              '600' => '600',
              '700' => '700'
          ),
          'attributes'			 => array(
            'data-default'	 => '300'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Sub-Header Font Family', $prefix),
          'desc'    => __('Font family for header elements h4, h5, h6 (default: Archivo Narrow)', $prefix),
          'id'            => $prefix . '_typo_sub_header_family',
          'type'             => 'select',
          'show_option_none' => false,
          'default'          => 'Archivo Narrow',
          'options_cb'       => 'solwp_google_fonts',
          'attributes'			 => array(
            'data-default'	 => 'Archivo Narrow',
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Sub-Header Font Weight', $prefix),
          'desc' => __('Set the font weight for h4, h5, and h6 (default = 700)', $prefix),
          'id'   => $prefix . '_typo_sub_header_weight',
          'type'    => 'select',
          'default' => '700',
          'options' => array(
              '100' => '100',
              '200' => '200',
              '300' => '300',
              '400' => '400',
              '500' => '500',
              '600' => '600',
              '700' => '700'
          ),
          'attributes'			 => array(
            'data-default'	 => '700'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Header Line Height', $prefix),
          'desc' => __('Set the line height of the header text (default = 1.4)', $prefix),
          'id'   => $prefix . '_typo_header_line_height',
          'type'    => 'text_small',
          'default' => '1.4',
          'attributes'			 => array(
            'data-default'	 => '1.4'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Header Margin Bottom', $prefix),
          'desc' => __('Space below each header element (default = 0.65rem)', $prefix),
          'id'   => $prefix . '_typo_header_margin_bottom',
          'type'    => 'text_small',
          'default' => '0.65rem',
          'attributes'			 => array(
            'data-default'	 => '0.65rem'
          ),
          'after_row' => '</div></li>'
      ));
      $cmb->add_field(array(
          'before_row'  => '<li class="accordion-item" data-accordion-item>
                  <a href="#panel-typo-headers" role="tab" class="accordion-title" id="panel-typo-headers-heading" aria-controls="panel-typo-headers">
                    <h6>Individual Header Settings</h6>
                  </a>
                  <div id="panel-typo-headers" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-typo-headers-heading">',
          'name' => __('H1 Font Size', $prefix),
          'desc' => __('Font size of all h1 elements (default: 1.75rem)', $prefix),
          'id'   => $prefix . '_typo_h1_size',
          'type' => 'text_small',
          'default' => '1.75rem',
          'attributes'			 => array(
            'data-default'	 => '1.75rem'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('H1 Font Color', $prefix),
          'desc' => __('Font color of all h1 elements (default: #f5faff)', $prefix),
          'id'   => $prefix . '_typo_h1_color',
          'type' => 'colorpicker',
          'default' => '#f5faff',
          'attributes'			 => array(
            'data-default'	 => '#f5faff'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('H2 Font Size', $prefix),
          'desc' => __('Font size of all h2 elements (default: 1.5rem)', $prefix),
          'id'   => $prefix . '_typo_h2_size',
          'type' => 'text_small',
          'default' => '1.5rem',
          'attributes'			 => array(
            'data-default'	 => '1.5rem'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('H2 Font Color', $prefix),
          'desc' => __('Font color of all h2 elements (default: #93ddfb)', $prefix),
          'id'   => $prefix . '_typo_h2_color',
          'type' => 'colorpicker',
          'default' => '#93ddfb',
          'attributes'			 => array(
            'data-default'	 => '#93ddfb'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('H3 Font Size', $prefix),
          'desc' => __('Font size of all h3 elements (default: 1.25rem)', $prefix),
          'id'   => $prefix . '_typo_h3_size',
          'type' => 'text_small',
          'default' => '1.25rem',
          'attributes'			 => array(
            'data-default'	 => '1.25rem'
          )
      ));
      $cmb->add_field(array(
          'name' => __('H3 Font Color', $prefix),
          'desc' => __('Font color of all h3 elements (default: #85b1e0)', $prefix),
          'id'   => $prefix . '_typo_h3_color',
          'type' => 'colorpicker',
          'default' => '#85b1e0',
          'attributes'			 => array(
            'data-default'	 => '#85b1e0'
          )
      ));
      $cmb->add_field(array(
          'name' => __('H4 Font Size', $prefix),
          'desc' => __('Font size of all h4 elements (default: 1rem)', $prefix),
          'id'   => $prefix . '_typo_h4_size',
          'type' => 'text_small',
          'default' => '1rem',
          'attributes'			 => array(
            'data-default'	 => '1rem'
          )
      ));
      $cmb->add_field(array(
          'name' => __('H4 Font Color', $prefix),
          'desc' => __('Font color of all h4 elements (default: #9aefea)', $prefix),
          'id'   => $prefix . '_typo_h4_color',
          'type' => 'colorpicker',
          'default' => '#9aefea',
          'attributes'			 => array(
            'data-default'	 => '#9aefea'
          )
      ));
      $cmb->add_field(array(
          'name' => __('H5 Font Size', $prefix),
          'desc' => __('Font size of all h5 elements (default: 0.875rem)', $prefix),
          'id'   => $prefix . '_typo_h5_size',
          'type' => 'text_small',
          'default' => '0.875rem',
          'attributes'			 => array(
            'data-default'	 => '0.875rem'
          )
      ));
      $cmb->add_field(array(
          'name' => __('H5 Font Color', $prefix),
          'desc' => __('Font color of all h5 elements (default: #7e7edd)', $prefix),
          'id'   => $prefix . '_typo_h5_color',
          'type' => 'colorpicker',
          'default' => '#7e7edd',
          'attributes'			 => array(
            'data-default'	 => '#7e7edd'
          )
      ));
      $cmb->add_field(array(
          'name' => __('H6 Font Size', $prefix),
          'desc' => __('Font size of all h6 elements (default: 0.85rem)', $prefix),
          'id'   => $prefix . '_typo_h6_size',
          'type' => 'text_small',
          'default' => '0.75rem',
          'attributes'			 => array(
            'data-default'	 => '0.75rem'
          )
      ));
      $cmb->add_field(array(
          'name' => __('H6 Font Color', $prefix),
          'desc' => __('Font color of all h6 elements (default: #99adff)', $prefix),
          'id'   => $prefix . '_typo_h6_color',
          'type' => 'colorpicker',
          'default' => '#99adff',
          'attributes'			 => array(
            'data-default'	 => '#99adff'
          )
      ));
      $cmb->add_field(array(
          'before_row'  => '<li class="accordion-item" data-accordion-item>
                  <a href="#panel-typo-body" role="tab" class="accordion-title" id="panel-typo-body-heading" aria-controls="panel-typo-body">
                    <h6>Body Typography</h6>
                  </a>
                  <div id="panel-typo-body" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-typo-body-heading">',
          'name' => __('Small Font Size', $prefix),
          'desc'    => __('Font size for small text like meta info. (default: 80%)', $prefix),
          'id'            => $prefix . '_typo_body_small_size',
          'type'             => 'text_small',
          'default'          => '80%',
          'attributes'			 => array(
            'data-default'	 => '80%'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Small Font Color', $prefix),
          'desc'    => __('Font color for small text like meta info. (default: #7b829d)', $prefix),
          'id'            => $prefix . '_typo_body_small_color',
          'type'             => 'colorpicker',
          'default'          => '#7b829d',
          'attributes'			 => array(
            'data-default'	 => '#7b829d'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Paragraph Line Height', $prefix),
          'desc'    => __('Line height for paragraph elements. (default: 1.6)', $prefix),
          'id'            => $prefix . '_typo_body_paragraph_line_height',
          'type'             => 'text_small',
          'default'          => '1.6',
          'attributes'			 => array(
            'data-default'	 => '1.6'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Paragraph Margin Bottom', $prefix),
          'desc'    => __('Extra space below paragraph elements. (default: 1rem)', $prefix),
          'id'            => $prefix . '_typo_body_paragraph_margin_bottom',
          'type'             => 'text_small',
          'default'          => '1rem',
          'attributes'			 => array(
            'data-default'	 => '1rem'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Link Font Color', $prefix),
          'desc'    => __('Font color of all links. (default: #5274ff)', $prefix),
          'id'            => $prefix . '_typo_body_link_font_color',
          'type'             => 'colorpicker',
          'default'          => '#5274ff',
          'attributes'			 => array(
            'data-default'	 => '#5274ff'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Link Hover Font Color', $prefix),
          'desc'    => __('Hover color for all links. (default: #5c6bc0)', $prefix),
          'id'            => $prefix . '_typo_body_link_hover_font_color',
          'type'             => 'colorpicker',
          'default'          => '#5c6bc0',
          'attributes'			 => array(
            'data-default'	 => '#5c6bc0'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Link Font Decoration', $prefix),
          'desc'    => __('Font decoration for all links. (default: none)', $prefix),
          'id'            => $prefix . '_typo_body_link_font_decoration',
          'type'    => 'select',
          'default' => 'none',
          'options' => array(
              'none' 					=> 'none',
              'underline' 		=> 'underline',
              'overline' 			=> 'overline',
              'line-through' 	=> 'line-through',
          ),
          'attributes'			 => array(
            'data-default'	 => 'none'
          ),
      ));
      $cmb->add_field(array(
        'name' => __('Link Hover Font Decoration', $prefix),
        'desc'    => __('Font decoration for all hovered links. (default: none)', $prefix),
        'id'            => $prefix . '_typo_body_link_hover_font_decoration',
        'type'    => 'select',
        'default' => 'none',
        'options' => array(
            'none' 					=> 'none',
            'underline' 		=> 'underline',
            'overline' 			=> 'overline',
            'line-through' 	=> 'line-through',
        ),
        'attributes'			 => array(
          'data-default'	 => 'none'
        ),
        'after_row' => '</div></li>'
      ));
      $cmb->add_field(array(
          'before_row'  => '<li class="accordion-item" data-accordion-item>
                <a href="#panel-typo-hr" role="tab" class="accordion-title" id="panel-typo-hr-heading" aria-controls="panel-typo-hr">
                  <h6>Horizontal Lines</h6>
                </a>
                <div id="panel-typo-hr" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-typo-hr-heading">',
          'name' => __('Horizontal Line Width', $prefix),
          'desc'    => __('Width of horizontal line used to separate elements. (default: 1200px)', $prefix),
          'id'            => $prefix . '_typo_body_hr_width',
          'type'    => 'text_small',
          'default' => '1200px',
          'attributes'			 => array(
            'data-default'	 => '1200px'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Horizontal Line Thickness', $prefix),
          'desc'    => __('Thickness of horizontal line used to separate elements. (default: 1px)', $prefix),
          'id'            => $prefix . '_typo_body_hr_thickness',
          'type'    => 'text_small',
          'default' => '1px',
          'attributes'			 => array(
            'data-default'	 => '1px'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Horizontal Line Style', $prefix),
          'desc'    => __('Style of horizontal line used to separate body elements. (default: solid)', $prefix),
          'id'            => $prefix . '_typo_body_hr_style',
          'type'    => 'select',
          'default' => 'solid',
          'options' => array(
            'solid' 		=> 'Solid',
            'dotted'		=> 'Dotted',
            'dashed'		=> 'Dashed',
            'double'    => 'Double',
            'groove'		=> 'Groove',
            'ridge'			=> 'Ridge',
            'inset'			=> 'Inset',
            'outset'		=> 'Outset',
          ),
          'attributes'			 => array(
            'data-default'	 => 'solid'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Horizontal Line Color', $prefix),
          'desc'    => __('Color of horizontal line used to separate elements. (default: #7b829d)', $prefix),
          'id'            => $prefix . '_typo_body_hr_color',
          'type'    => 'colorpicker',
          'default' => '#7b829d',
          'attributes'			 => array(
            'data-default'	 => '#7b829d'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('Horizontal Line Margin', $prefix),
          'desc'    => __('Space above and below horizontal lines. (default: 1.6rem)', $prefix),
          'id'            => $prefix . '_typo_body_hr_margin',
          'type'    => 'text_small',
          'default' => '1.6rem',
          'attributes'			 => array(
            'data-default'	 => '1.6rem'
          ),
          'after_row' => '</div></li>'
      ));
      $cmb->add_field(array(
          'before_row'  => '<li class="accordion-item" data-accordion-item>
              <a href="#panel-typo-list" role="tab" class="accordion-title" id="panel-typo-list-heading" aria-controls="panel-typo-list">
                <h6>Lists</h6>
              </a>
              <div id="panel-typo-list" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-typo-list-heading">',
          'name' => __('List Line height', $prefix),
          'desc'    => __('Line height of all list elements. (default: 1.6)', $prefix),
          'id'            => $prefix . '_typo_list_line_height',
          'type'    => 'text_small',
          'default' => '1.6',
          'attributes'			 => array(
            'data-default'	 => '1.6'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('List Margin Bottom', $prefix),
          'desc'    => __('Space below all list elements. (default: 1rem)', $prefix),
          'id'            => $prefix . '_typo_list_margin_bottom',
          'type'    => 'text_small',
          'default' => '1rem',
          'attributes'			 => array(
            'data-default'	 => '1rem'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('List Style Type', $prefix),
          'desc'    => __('Style of list item markers. (default: disc)', $prefix),
          'id'            => $prefix . '_typo_list_style_type',
          'type'    => 'select',
          'default' => 'disc',
          'options' => array(
            'disc' 					=> 'Disc',
            'circle	'				=> 'Circle',
            'square'				=> 'Square',
            'decimal'   	  => 'Number',
            'lower-alpha'		=> 'Lowercase Letters',
            'lower-roman'		=> 'Lowercase Roman Numerals',
            'upper-alpha'		=> 'Uppercase Letters',
            'upper-roman'		=> 'Uppercase Roman Numerals',
            'none'					=> 'None'
          ),
          'attributes'			 => array(
            'data-default'	 => 'disc'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('List Style Position', $prefix),
          'desc'    => __('Position of list item markers. (default: outside)', $prefix),
          'id'            => $prefix . '_typo_list_style_position',
          'type'    => 'select',
          'default' => 'outside',
          'options' => array(
            'outside' 			=> 'Outside',
            'inside	'				=> 'Inside'
          ),
          'attributes'			 => array(
            'data-default'	 => 'outside'
          ),
      ));
      $cmb->add_field(array(
          'name' => __('List Margin left', $prefix),
          'desc'    => __('Space left of list elements. (default: 1.25rem)', $prefix),
          'id'            => $prefix . '_typo_list_margin_left',
          'type'    => 'text_small',
          'default' => '1.25rem',
          'attributes'			 => array(
            'data-default'	 => '1.25rem'
          ),
          'after_row' => '</div></li></ul>'
      ));
			return $cmb;
		}
	endif;

?>
