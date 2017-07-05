<?php
/**
 * Typography settings
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
 *  Adds all fields for typography settings to custom meta box
 *
 * @param   [cmb]    $cmb    [ custom metabox (cmb), required ]
 * @return  [cmb]        $CMB2   [ cmb with fields added ]
 * @since   1.0.0
 * @version 1.0.4
 */
if ( ! function_exists( 'twp_add_typo_settings' ) ) :
function twp_add_typo_settings( $cmb ) {
		// Set our CMB2 fields
		  $cmb->add_field(array(
			  'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
      <li class="accordion-item" data-accordion-item>
        <a href="#panel-typo-base" role="tab" class="accordion-title" id="panel-typo-base-heading" aria-controls="panel-typo-base">
          <h6>Header Typography</h6>
        </a>
        <div id="panel-typo-base" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-typ-base-heading">',
			  'name' => __('Header Font Family', 'twp'),
			  'desc'    => __('Font family for header elements h1, h2, and h3. (default: Titillium Web)', 'twp'),
			  'id'            => 'twp_typo_header_family',
			  'type'             => 'select',
			  'show_option_none' => false,
			  'default'          => 'Titillium Web',
			  'options_cb'       => 'twp_google_fonts',
			  'attributes'             => array(
				  'data-default'    => 'Titillium Web',
			  ),
		  ));
			  $cmb->add_field(array(
				  'name' => __('Header Font Weight', 'twp'),
				  'desc' => __('Set the weight of the header font (default = 700)', 'twp'),
				  'id'   => 'twp_typo_header_weight',
				  'type'    => 'select',
				  'default' => '700',
				  'options' => array(
					  '100' => '100',
					  '200' => '200',
					  '300' => '300',
					  '400' => '400',
					  '500' => '500',
					  '600' => '600',
					  '700' => '700',
					  '800' => '800',
					  '900' => '900',
				  ),
				  'attributes'           => array(
					  'data-default'   => '700',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Sub-Header Font Family', 'twp'),
				  'desc'    => __('Font family for header elements h4, h5, h6 (default: Titillium Web)', 'twp'),
				  'id'            => 'twp_typo_sub_header_family',
				  'type'             => 'select',
				  'show_option_none' => false,
				  'default'          => 'Titillium Web',
				  'options_cb'       => 'twp_google_fonts',
				  'attributes'           => array(
					  'data-default'   => 'Titillium Web',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Sub-Header Font Weight', 'twp'),
				  'desc' => __('Set the font weight for h4, h5, and h6 (default = 500)', 'twp'),
				  'id'   => 'twp_typo_sub_header_weight',
				  'type'    => 'select',
				  'default' => '500',
				  'options' => array(
					  '100' => '100',
					  '200' => '200',
					  '300' => '300',
					  '400' => '400',
					  '500' => '500',
					  '600' => '600',
					  '700' => '700',
					  '800' => '800',
					  '900' => '900',
				  ),
				  'attributes'           => array(
					  'data-default'     => '500',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Header Line Height', 'twp'),
				  'desc' => __('Set the line height of the header text (default = 1.4)', 'twp'),
				  'id'   => 'twp_typo_header_line_height',
				  'type'    => 'text_small',
				  'default' => '1.4',
				  'attributes'           => array(
					  'data-default'   => '1.4',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Header Margin Bottom', 'twp'),
				  'desc' => __('Space below each header element (default = 0.65rem)', 'twp'),
				  'id'   => 'twp_typo_header_margin_bottom',
				  'type'    => 'text_small',
				  'default' => '0.65rem',
				  'attributes'           => array(
					  'data-default'   => '0.65rem',
				  ),
				  'after_row' => '</div></li>',
			  ));
			  $cmb->add_field(array(
				  'before_row'  => '<li class="accordion-item" data-accordion-item>
      <a href="#panel-typo-headers" role="tab" class="accordion-title" id="panel-typo-headers-heading" aria-controls="panel-typo-headers">
        <h6>Individual Header Settings</h6>
      </a>
      <div id="panel-typo-headers" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-typo-headers-heading">',
				  'name' => __('H1 Font Size', 'twp'),
				  'desc' => __('Font size of all h1 elements (default: 4rem)', 'twp'),
				  'id'   => 'twp_typo_h1_size',
				  'type' => 'text_small',
				  'default' => '4rem',
				  'attributes'           => array(
					  'data-default'   => '4rem',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('H1 Font Color', 'twp'),
				  'desc' => __('Font color of all h1 elements (default: #333333)', 'twp'),
				  'id'   => 'twp_typo_h1_color',
				  'type' => 'colorpicker',
				  'default' => '#333333',
				  'attributes'           => array(
					  'data-default'   => '#333333',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('H2 Font Size', 'twp'),
				  'desc' => __('Font size of all h2 elements (default: 3rem)', 'twp'),
				  'id'   => 'twp_typo_h2_size',
				  'type' => 'text_small',
				  'default' => '3rem',
				  'attributes'           => array(
					  'data-default'   => '3rem',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('H2 Font Color', 'twp'),
				  'desc' => __('Font color of all h2 elements (default: #444444)', 'twp'),
				  'id'   => 'twp_typo_h2_color',
				  'type' => 'colorpicker',
				  'default' => '#444444',
				  'attributes'           => array(
					  'data-default'   => '#444444',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('H3 Font Size', 'twp'),
				  'desc' => __('Font size of all h3 elements (default: 1.25rem)', 'twp'),
				  'id'   => 'twp_typo_h3_size',
				  'type' => 'text_small',
				  'default' => '2.5rem',
				  'attributes'           => array(
					  'data-default'   => '2.5rem',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('H3 Font Color', 'twp'),
				  'desc' => __('Font color of all h3 elements (default: #555555)', 'twp'),
				  'id'   => 'twp_typo_h3_color',
				  'type' => 'colorpicker',
				  'default' => '#555555',
				  'attributes'           => array(
					  'data-default'   => '#555555',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('H4 Font Size', 'twp'),
				  'desc' => __('Font size of all h4 elements (default: 2rem)', 'twp'),
				  'id'   => 'twp_typo_h4_size',
				  'type' => 'text_small',
				  'default' => '2rem',
				  'attributes'           => array(
					  'data-default'   => '2rem',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('H4 Font Color', 'twp'),
				  'desc' => __('Font color of all h4 elements (default: #555555)', 'twp'),
				  'id'   => 'twp_typo_h4_color',
				  'type' => 'colorpicker',
				  'default' => '#555555',
				  'attributes'           => array(
					  'data-default'   => '#555555',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('H5 Font Size', 'twp'),
				  'desc' => __('Font size of all h5 elements (default: 1.75rem)', 'twp'),
				  'id'   => 'twp_typo_h5_size',
				  'type' => 'text_small',
				  'default' => '1.75rem',
				  'attributes'           => array(
					  'data-default'   => '1.75rem',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('H5 Font Color', 'twp'),
				  'desc' => __('Font color of all h5 elements (default: #757575)', 'twp'),
				  'id'   => 'twp_typo_h5_color',
				  'type' => 'colorpicker',
				  'default' => '#757575',
				  'attributes'           => array(
					  'data-default'   => '#757575',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('H6 Font Size', 'twp'),
				  'desc' => __('Font size of all h6 elements (default: 1.5rem)', 'twp'),
				  'id'   => 'twp_typo_h6_size',
				  'type' => 'text_small',
				  'default' => '1.5rem',
				  'attributes'           => array(
					  'data-default'   => '1.5rem',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('H6 Font Color', 'twp'),
				  'desc' => __('Font color of all h6 elements (default: #757575)', 'twp'),
				  'id'   => 'twp_typo_h6_color',
				  'type' => 'colorpicker',
				  'default' => '#757575',
				  'attributes'           => array(
					  'data-default'   => '#757575',
				  ),
			  ));
			  $cmb->add_field(array(
				  'before_row'  => '<li class="accordion-item" data-accordion-item>
      <a href="#panel-typo-body" role="tab" class="accordion-title" id="panel-typo-body-heading" aria-controls="panel-typo-body">
        <h6>Body Typography</h6>
      </a>
      <div id="panel-typo-body" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-typo-body-heading">',
				  'name' => __('Small Font Size', 'twp'),
				  'desc'    => __('Font size for small text like meta info. (default: 80%)', 'twp'),
				  'id'            => 'twp_typo_body_small_size',
				  'type'             => 'text_small',
				  'default'          => '80%',
				  'attributes'           => array(
					  'data-default'   => '80%',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Small Font Color', 'twp'),
				  'desc'    => __('Font color for small text like meta info. (default: #8d8d8d)', 'twp'),
				  'id'            => 'twp_typo_body_small_color',
				  'type'             => 'colorpicker',
				  'default'          => '#8d8d8d',
				  'attributes'           => array(
					  'data-default'   => '#8d8d8d',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Paragraph Font Color', 'twp'),
				  'desc'    => __('Font color for paragraph text. (default: #555555)', 'twp'),
				  'id'            => 'twp_typo_body_paragraph_color',
				  'type'             => 'colorpicker',
				  'default'          => '#555555',
				  'attributes'           => array(
					  'data-default'   => '#555555',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Paragraph Font Weight', 'twp'),
				  'desc' => __('Set the weight of the paragraph font (default = 400)', 'twp'),
				  'id'   => 'twp_typo_paragraph_weight',
				  'type'    => 'select',
				  'default' => '400',
				  'options' => array(
					  '100' => '100',
					  '200' => '200',
					  '300' => '300',
					  '400' => '400',
					  '500' => '500',
					  '600' => '600',
					  '700' => '700',
					  '800' => '800',
					  '900' => '900',
				  ),
				  'attributes'           => array(
					  'data-default'   => '400',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Paragraph Line Height', 'twp'),
				  'desc'    => __('Line height for paragraph elements. (default: 1.4)', 'twp'),
				  'id'            => 'twp_typo_body_paragraph_line_height',
				  'type'             => 'text_small',
				  'default'          => '1.4',
				  'attributes'           => array(
					  'data-default'   => '1.4',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Paragraph Margin Bottom', 'twp'),
				  'desc'    => __('Extra space below paragraph elements. (default: 1.25rem)', 'twp'),
				  'id'            => 'twp_typo_body_paragraph_margin_bottom',
				  'type'             => 'text_small',
				  'default'          => '1.25rem',
				  'attributes'           => array(
					  'data-default'   => '1.25rem',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Link Font Color', 'twp'),
				  'desc'    => __('Font color of all links. (default: #1563ff)', 'twp'),
				  'id'            => 'twp_typo_body_link_font_color',
				  'type'             => 'colorpicker',
				  'default'          => '#1563ff',
				  'attributes'           => array(
					  'data-default'   => '#1563ff',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Link Hover Font Color', 'twp'),
				  'desc'    => __('Hover color for all links. (default: #6078ff)', 'twp'),
				  'id'            => 'twp_typo_body_link_hover_font_color',
				  'type'             => 'colorpicker',
				  'default'          => '#6078ff',
				  'attributes'           => array(
					  'data-default'   => '#6078ff',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Link Font Decoration', 'twp'),
				  'desc'    => __('Font decoration for all links. (default: none)', 'twp'),
				  'id'            => 'twp_typo_body_link_font_decoration',
				  'type'    => 'select',
				  'default' => 'none',
				  'options' => array(
					  'none'                    => 'none',
					  'underline'       => 'underline',
					  'overline'            => 'overline',
					  'line-through'    => 'line-through',
				  ),
				  'attributes'           => array(
					  'data-default'   => 'none',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Link Hover Font Decoration', 'twp'),
				  'desc'    => __('Font decoration for all hovered links. (default: none)', 'twp'),
				  'id'            => 'twp_typo_body_link_hover_font_decoration',
				  'type'    => 'select',
				  'default' => 'none',
				  'options' => array(
					  'none'                  => 'none',
					  'underline'         => 'underline',
					  'overline'          => 'overline',
					  'line-through'  => 'line-through',
				  ),
				  'attributes'             => array(
					  'data-default'     => 'none',
				  ),
				  'after_row' => '</div></li>',
			  ));
			  $cmb->add_field(array(
				  'before_row'  => '<li class="accordion-item" data-accordion-item>
      <a href="#panel-typo-hr" role="tab" class="accordion-title" id="panel-typo-hr-heading" aria-controls="panel-typo-hr">
        <h6>Horizontal Lines</h6>
      </a>
      <div id="panel-typo-hr" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-typo-hr-heading">',
				  'name' => __('Horizontal Line Width', 'twp'),
				  'desc'    => __('Width of horizontal line used to separate elements. (default: 1200px)', 'twp'),
				  'id'            => 'twp_typo_body_hr_width',
				  'type'    => 'text_small',
				  'default' => '1200px',
				  'attributes'           => array(
					  'data-default'   => '1200px',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Horizontal Line Thickness', 'twp'),
				  'desc'    => __('Thickness of horizontal line used to separate elements. (default: 1px)', 'twp'),
				  'id'            => 'twp_typo_body_hr_thickness',
				  'type'    => 'text_small',
				  'default' => '1px',
				  'attributes'           => array(
					  'data-default'   => '1px',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Horizontal Line Style', 'twp'),
				  'desc'    => __('Style of horizontal line used to separate body elements. (default: solid)', 'twp'),
				  'id'            => 'twp_typo_body_hr_style',
				  'type'    => 'select',
				  'default' => 'solid',
				  'options' => array(
					  'solid'         => 'Solid',
					  'dotted'        => 'Dotted',
					  'dashed'        => 'Dashed',
					  'double'    => 'Double',
					  'groove'        => 'Groove',
					  'ridge'         => 'Ridge',
					  'inset'         => 'Inset',
					  'outset'        => 'Outset',
				  ),
				  'attributes'           => array(
					  'data-default'   => 'solid',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Horizontal Line Color', 'twp'),
				  'desc'    => __('Color of horizontal line used to separate elements. (default: #aaaaaa)', 'twp'),
				  'id'            => 'twp_typo_body_hr_color',
				  'type'    => 'colorpicker',
				  'default' => '#aaaaaa',
				  'attributes'           => array(
					  'data-default'   => '#aaaaaa',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Horizontal Line Margin', 'twp'),
				  'desc'    => __('Space above and below horizontal lines. (default: 1.5rem)', 'twp'),
				  'id'            => 'twp_typo_body_hr_margin',
				  'type'    => 'text_small',
				  'default' => '1.5rem',
				  'attributes'           => array(
					  'data-default'   => '1.5rem',
				  ),
				  'after_row' => '</div></li>',
			  ));
			  $cmb->add_field(array(
				  'before_row'  => '<li class="accordion-item" data-accordion-item>
      <a href="#panel-typo-list" role="tab" class="accordion-title" id="panel-typo-list-heading" aria-controls="panel-typo-list">
        <h6>Lists</h6>
      </a>
      <div id="panel-typo-list" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-typo-list-heading">',
				  'name' => __('List Line height', 'twp'),
				  'desc'    => __('Line height of all list elements. (default: 1.6)', 'twp'),
				  'id'            => 'twp_typo_list_line_height',
				  'type'    => 'text_small',
				  'default' => '1.6',
				  'attributes'           => array(
					  'data-default'   => '1.6',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('List Margin Bottom', 'twp'),
				  'desc'    => __('Space below all list elements. (default: 1rem)', 'twp'),
				  'id'            => 'twp_typo_list_margin_bottom',
				  'type'    => 'text_small',
				  'default' => '1rem',
				  'attributes'           => array(
					  'data-default'   => '1rem',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('List Style Type', 'twp'),
				  'desc'    => __('Style of list item markers. (default: disc)', 'twp'),
				  'id'            => 'twp_typo_list_style_type',
				  'type'    => 'select',
				  'default' => 'disc',
				  'options' => array(
					  'disc'                  => 'Disc',
					  'circle	'               => 'Circle',
					  'square'                => 'Square',
					  'decimal'         => 'Number',
					  'lower-alpha'       => 'Lowercase Letters',
					  'lower-roman'       => 'Lowercase Roman Numerals',
					  'upper-alpha'       => 'Uppercase Letters',
					  'upper-roman'       => 'Uppercase Roman Numerals',
					  'none'                  => 'None',
				  ),
				  'attributes'           => array(
					  'data-default'   => 'disc',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('List Style Position', 'twp'),
				  'desc'    => __('Position of list item markers. (default: outside)', 'twp'),
				  'id'            => 'twp_typo_list_style_position',
				  'type'    => 'select',
				  'default' => 'outside',
				  'options' => array(
					  'outside'           => 'Outside',
					  'inside	'               => 'Inside',
				  ),
				  'attributes'           => array(
					  'data-default'   => 'outside',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('List Margin left', 'twp'),
				  'desc'    => __('Space left of list elements. (default: 1.45rem)', 'twp'),
				  'id'            => 'twp_typo_list_margin_left',
				  'type'    => 'text_small',
				  'default' => '1.45rem',
				  'attributes'           => array(
					  'data-default'   => '1.45rem',
				  ),
				  'after_row' => '</div></li>',
			  ));
			  $cmb->add_field(array(
				  'before_row'  => '<li class="accordion-item" data-accordion-item>
      <a href="#panel-typo-code" role="tab" class="accordion-title" id="panel-typo-code-heading" aria-controls="panel-typo-code">
        <h6>Code</h6>
      </a>
  		<div id="panel-typo-code" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-typo-code-heading">',
				  'name' => __('Code Font Family', 'twp'),
				  'desc'    => __('Font family for code elements, should monospaced (default: Roboto Mono)', 'twp'),
				  'id'            => 'twp_typo_code_font_family',
				  'type'             => 'select',
				  'show_option_none' => false,
				  'default'          => 'Roboto Mono',
				  'options_cb'       => 'twp_google_fonts',
				  'attributes'           => array(
					  'data-default'   => 'Roboto Mono',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Code Border Color', 'twp'),
				  'desc'    => __('Color of the border around code elements. (default: #cacaca)', 'twp'),
				  'id'            => 'twp_typo_code_border_color',
				  'type'    => 'colorpicker',
				  'default' => '#cacaca',
				  'attributes'           => array(
					  'data-default'   => '#cacaca',
				  ),
			  ));
			  $cmb->add_field(array(
				  'name' => __('Code Background Color', 'twp'),
				  'desc'    => __('Color of the background around code elements. (default: #e3ecff)', 'twp'),
				  'id'            => 'twp_typo_code_background_color',
				  'type'    => 'colorpicker',
				  'default' => '#e3ecff',
				  'attributes'             => array(
					  'data-default'   => '#e3ecff',
				  ),
				  'after_row' => '</div></li></ul>',
			  ));
			return $cmb;
	}
	endif;
