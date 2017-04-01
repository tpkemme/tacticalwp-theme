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
				'name' => __('Form Label Text Size', $prefix),
				'desc'    => __('The font size of form input labels. (default: 0.875rem)', $prefix),
				'id'            => $prefix . '_obj_form_helptext_font_size',
				'type'             => 'text_small',
				'default'          => '0.875rem',
				'attributes'			 => array(
					'data-default'	 => '0.875rem',
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
				'after_row' => '</div></li></ul>'
			));
			return $cmb;
		}
	endif;

?>
