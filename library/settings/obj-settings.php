<?php
/**
 * Object Default Settings
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	*	Adds all fields for object defaults settings to custom meta box
	*
	* @param 	[cmb] 	 $cmb 	 [ custom metabox (cmb), required ]
	* @param 	[string] $prefix [ plugin prefix (solwp), optional ]
	* @return	[cmb]		 $CMB2	 [ cmb with fields added ]
	* @since 	1.0.0
	* @version 1.0.0
	*/
	if ( ! function_exists( 'solwp_add_obj_settings' ) ) :
		function solwp_add_obj_settings( $cmb, $prefix = 'solwp' ){
			// Set our CMB2 fields
			$cmb->add_field(array(
					'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
							<li class="accordion-item" data-accordion-item>
								<a href="#panel-obj-forms" role="tab" class="accordion-title" id="panel-obj-forms-heading" aria-controls="panel-obj-forms">
									<h6>Forms</h6>
								</a>
								<div id="panel-obj-forms" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-nav-forms-heading">',
					'name' => __('Form Background Color', $prefix),
					'desc'    => __('The background color of form inputs (text areas, dropdowns, etc). (default: #353535)', $prefix),
					'id'            => $prefix . '_obj_form_background_color',
					'type'             => 'colorpicker',
					'default'          => '#353535',
					'attributes'			 => array(
						'data-default'	 => '#353535',
					),
			));
			$cmb->add_field(array(
				'name' => __('Form Border Color', $prefix),
				'desc'    => __('The border color of form inputs (text areas, dropdowns, etc). (default: #202533)', $prefix),
				'id'            => $prefix . '_obj_form_border_color',
				'type'             => 'colorpicker',
				'default'          => '#202533',
				'attributes'			 => array(
					'data-default'	 => '#202533',
				),
			));
			$cmb->add_field(array(
				'name' => __('Form Border Color', $prefix),
				'desc'    => __('The border color of form inputs (text areas, dropdowns, etc). (default: #202533)', $prefix),
				'id'            => $prefix . '_obj_form_border_color',
				'type'             => 'colorpicker',
				'default'          => '#202533',
				'attributes'			 => array(
					'data-default'	 => '#202533',
				),
			));
			$cmb->add_field(array(
				'name' => __('Help Text Color', $prefix),
				'desc'    => __('The color of the description text below form input. (default: #5f6786)', $prefix),
				'id'            => $prefix . '_obj_form_helptext_color',
				'type'             => 'colorpicker',
				'default'          => '#5f6786',
				'attributes'			 => array(
					'data-default'	 => '#5f6786',
				),
			));
			$cmb->add_field(array(
				'name' => __('Form Helper Text Size', $prefix),
				'desc'    => __('The font size of form input helper text. (default: 0.75rem)', $prefix),
				'id'            => $prefix . '_obj_form_helptext_font_size',
				'type'             => 'text_small',
				'default'          => '0.75rem',
				'attributes'			 => array(
					'data-default'	 => '0.75rem',
				),
			));
			$cmb->add_field(array(
				'name' => __('Form Label Text Color', $prefix),
				'desc'    => __('The color of form input labels. (default: #b9bed5)', $prefix),
				'id'            => $prefix . '_obj_form_label_color',
				'type'             => 'colorpicker',
				'default'          => '#b9bed5',
				'attributes'			 => array(
					'data-default'	 => '#b9bed5',
				),
			));
			$cmb->add_field(array(
				'name' => __('Form Label Text Size', $prefix),
				'desc'    => __('The font size of form input labels. (default: 0.875rem)', $prefix),
				'id'            => $prefix . '_obj_form_label_font_size',
				'type'             => 'text_small',
				'default'          => '0.875rem',
				'attributes'			 => array(
					'data-default'	 => '0.875rem',
				),
			));
			$cmb->add_field(array(
				'name' => __('Form Input Text Color', $prefix),
				'desc'    => __('The color of form input text. (default: #b9bed5)', $prefix),
				'id'            => $prefix . '_obj_form_input_color',
				'type'             => 'colorpicker',
				'default'          => '#b9bed5',
				'attributes'			 => array(
					'data-default'	 => '#b9bed5',
				),
			));
			$cmb->add_field(array(
				'name' => __('Form Input Text Focus Color', $prefix),
				'desc'    => __('The color of form input text when focused. (default: #f5faff)', $prefix),
				'id'            => $prefix . '_obj_form_input_focus_color',
				'type'             => 'colorpicker',
				'default'          => '#f5faff',
				'attributes'			 => array(
					'data-default'	 => '#f5faff',
				),
			));
			$cmb->add_field(array(
				'name' => __('Form Placeholder Text Color', $prefix),
				'desc'    => __('The color of form input placeholders. (default: #5f6786)', $prefix),
				'id'            => $prefix . '_obj_form_placeholder_color',
				'type'             => 'colorpicker',
				'default'          => '#5f6786',
				'attributes'			 => array(
					'data-default'	 => '#5f6786',
				),
				'after_row' => '</div></li>'
			));
			$cmb->add_field(array(
				'before_row'  => '<li class="accordion-item" data-accordion-item>
							<a href="#panel-obj-tabs" role="tab" class="accordion-title" id="panel-obj-tabs-heading" aria-controls="panel-obj-tabs">
								<h6>Tabs</h6>
							</a>
							<div id="panel-obj-tabs" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-nav-tabs-heading">',
				'name' => __('Tab Active Color', $prefix),
				'desc'    => __('Color of active tab menu items. (default: #5364fc)', $prefix),
				'id'            => $prefix . '_obj_tab_active_color',
				'type'             => 'colorpicker',
				'default'          => '#5364fc',
				'attributes'			 => array(
					'data-default'	 => '#5364fc',
				),
			));
			$cmb->add_field(array(
				'name' => __('Tab Inactive Color', $prefix),
				'desc'    => __('Color of inactive tab menu items. (default: #8ab1ff)', $prefix),
				'id'            => $prefix . '_obj_tab_inactive_color',
				'type'             => 'colorpicker',
				'default'          => '#8ab1ff',
				'attributes'			 => array(
					'data-default'	 => '#8ab1ff',
				),
			));
			$cmb->add_field(array(
				'name' => __('Tab Hover Color', $prefix),
				'desc'    => __('Color of tab menu items on hover. (default: #5b92ff)', $prefix),
				'id'            => $prefix . '_obj_tab_hover_color',
				'type'             => 'colorpicker',
				'default'          => '#5b92ff',
				'attributes'			 => array(
					'data-default'	 => '#5b92ff',
				),
			));
			$cmb->add_field(array(
				'name' => __('Tab Font Color', $prefix),
				'desc'    => __('Color of tab menu items on hover. (default: #ffffff)', $prefix),
				'id'            => $prefix . '_obj_tab_font_color',
				'type'             => 'colorpicker',
				'default'          => '#ffffff',
				'attributes'			 => array(
					'data-default'	 => '#ffffff',
				),
				'after_row' => '</div></li>'
			));
			$cmb->add_field(array(
				'before_row'  => '<li class="accordion-item" data-accordion-item>
							<a href="#panel-obj-accord" role="tab" class="accordion-title" id="panel-obj-accord-heading" aria-controls="panel-obj-accord">
								<h6>Accordions</h6>
							</a>
							<div id="panel-obj-accord" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-nav-accord-heading">',
				'name' => __('Accordion Active Color', $prefix),
				'desc'    => __('Color of active tab menu items. (default: #5364fc)', $prefix),
				'id'            => $prefix . '_obj_accord_active_color',
				'type'             => 'colorpicker',
				'default'          => '#5364fc',
				'attributes'			 => array(
					'data-default'	 => '#5364fc',
				),
			));
			$cmb->add_field(array(
				'name' => __('Accordion Inactive Color', $prefix),
				'desc'    => __('Color of inactive tab menu items. (default: #8ab1ff)', $prefix),
				'id'            => $prefix . '_obj_accord_inactive_color',
				'type'             => 'colorpicker',
				'default'          => '#8ab1ff',
				'attributes'			 => array(
					'data-default'	 => '#8ab1ff',
				),
			));
			$cmb->add_field(array(
				'name' => __('Accordion Hover Color', $prefix),
				'desc'    => __('Color of tab menu items on hover. (default: #5b92ff)', $prefix),
				'id'            => $prefix . '_obj_accord_hover_color',
				'type'             => 'colorpicker',
				'default'          => '#5b92ff',
				'attributes'			 => array(
					'data-default'	 => '#5b92ff',
				),
			));
			$cmb->add_field(array(
				'name' => __('Accordion Font Color', $prefix),
				'desc'    => __('Color of tab menu items on hover. (default: #ffffff)', $prefix),
				'id'            => $prefix . '_obj_accord_font_color',
				'type'             => 'colorpicker',
				'default'          => '#ffffff',
				'attributes'			 => array(
					'data-default'	 => '#ffffff',
				),
				'after_row' 			=> '</div></li>',
			));
			$cmb->add_field(array(
				'before_row'  => '<li class="accordion-item" data-accordion-item>
							<a href="#panel-obj-table" role="tab" class="accordion-title" id="panel-obj-table-heading" aria-controls="panel-obj-table">
								<h6>Tables</h6>
							</a>
							<div id="panel-obj-table" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-nav-table-heading">',
				'name' => __('Table Header Color', $prefix),
				'desc'    => __('Color of table header row. (default: #dceeff)', $prefix),
				'id'            => $prefix . '_obj_table_header_color',
				'type'             => 'colorpicker',
				'default'          => '#dceeff',
				'attributes'			 => array(
					'data-default'	 => '#dceeff',
				),
			));
			$cmb->add_field(array(
				'name' => __('Table Even Row Color', $prefix),
				'desc'    => __('Color of even rows in a table. (default: #f5faff)', $prefix),
				'id'            => $prefix . '_obj_table_even_color',
				'type'             => 'colorpicker',
				'default'          => '#f5faff',
				'attributes'			 => array(
					'data-default'	 => '#f5faff',
				),
			));
			$cmb->add_field(array(
				'name' => __('Table Odd Row Color', $prefix),
				'desc'    => __('Color of odd rows in a table. (default: #e9f4ff)', $prefix),
				'id'            => $prefix . '_obj_table_odd_color',
				'type'             => 'colorpicker',
				'default'          => '#e9f4ff',
				'attributes'			 => array(
					'data-default'	 => '#e9f4ff',
				),
			));
			$cmb->add_field(array(
				'name' => __('Table Font Color', $prefix),
				'desc'    => __('Color of table text. (default: #ffffff)', $prefix),
				'id'            => $prefix . '_obj_table_font_color',
				'type'             => 'colorpicker',
				'default'          => '#ffffff',
				'attributes'			 => array(
					'data-default'	 => '#ffffff',
				),
				'after_row' => '</div></li></ul>'
			));
			return $cmb;
		}
	endif;

?>
