<?php
/**
 * Global settings
 *
 * @package SolWP
 * @since 1.0.0
 */

 /**
	*	Adds all fields for global settings to custom meta box
	*
	* @param 	[cmb] 	 $cmb 	 [ custom metabox (cmb), required ]
	* @param 	[string] $prefix [ plugin prefix (solwp), optional ]
	* @return	[cmb]		 $CMB2	 [ cmb with fields added ]
	* @since 	1.0.0
	* @version 1.0.0
	*/
	if ( ! function_exists( 'solwp_add_global_settings' ) ) :
		function solwp_add_global_settings( $cmb, $prefix = 'solwp' ){
			$cmb->add_field(array(
					'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
															<li class="accordion-item" data-accordion-item>
																<a href="#panel-global" role="tab" class="accordion-title" id="panel-global-heading" aria-controls="panel-global">
																	<h6>Global Styles</h6>
																</a>
																<div id="panel-global" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-global-heading">',
					'name' => __('Font Size', $prefix),
					'desc' => __('Global font size and units (default: 100%)', $prefix),
					'id'   => $prefix . '_global_font_size',
					'type' => 'text_small',
					'default' => '100%',
					'attributes' => array(
						'data-default' => '100%'
					)
			));
			$cmb->add_field(array(
					'name' => __('Site Width', $prefix),
					'desc' => __('Global site width and units (default: 1200px)', $prefix),
					'id'   => $prefix . '_global_site_width',
					'type' => 'text_small',
					'default' => '1200px',
					'attributes' => array(
						'data-default' => '1200px'
					)
			));
			$cmb->add_field(array(
					'name' => __('Line Height', $prefix),
					'desc' => __('Global line height (default: 1.5)', $prefix),
					'id'   => $prefix . '_global_line_height',
					'type' => 'text_small',
					'default' => '1.5',
					'attributes' => array(
						'data-default' => '1.5'
					)
			));
			$cmb->add_field(array(
					'name' => __('Body Font Color', $prefix),
											'desc'    => __('Global body font color in hex (default: #b9bed5)', $prefix),
					'id'      => $prefix . '_global_font_color',
					'type'    => 'colorpicker',
					'default' => '#b9bed5',
					'attributes' => array(
						'data-default' => '#b9bed5'
					)
			));
			$cmb->add_field(array(
					'name' => __('Body Font Family', $prefix),
					'desc'    => __('Global body font family (default: Quicksand)', $prefix),
					'id'            => $prefix . '_global_font_family',
					'type'             => 'select',
					'show_option_none' => false,
					'default'          => 'Quicksand',
					'attributes' => array(
						'data-default' => 'Quicksand'
					),
					'options_cb'       => 'solwp_google_fonts',
			));
			$cmb->add_field(array(
					'name' => __('Global Margins', $prefix),
					'desc' => __('Global margins size and units (default: 1rem)', $prefix),
					'id'   => $prefix . '_global_margin_size',
					'type' => 'text_small',
					'default' => '1rem',
					'attributes' => array(
						'data-default' => '1rem'
					)
			));
			$cmb->add_field(array(
					'name' => __('Global Padding', $prefix),
					'desc' => __('Global padding size and units (default: 1rem)', $prefix),
					'id'   => $prefix . '_global_padding_size',
					'type' => 'text_small',
					'default' => '1rem',
					'attributes' => array(
						'data-default' => '1rem'
					)
			));
			$cmb->add_field(array(
					'name' => __('Background Type', $prefix),
											'desc'    => __('Choose the type of background (default: Color)', $prefix),
					'id'      => $prefix . '_global_background_type',
					'type'    => 'select',
					'default' => 'color',
					'options' => array(
							'color' => 'Color',
							'image' => 'Image',
							'video' => 'Video'
					),
					'attributes' => array(
							'data-conditional-parent' => $prefix . '_global_background_type',
							'data-default' => 'color'
					)
			));
			$cmb->add_field(array(
					'name' => __('Background Color', $prefix),
											'desc'    => __('Global background color in hex (default: #202533)', $prefix),
					'id'      => $prefix . '_global_background_color',
					'type'    => 'colorpicker',
					'default' => '#202533',
					'attributes' => array(
							'data-default' => '#202533'
					)
			));
			$cmb->add_field(array(
					'name' => __('Background Image', $prefix),
											'desc'    => __('Global background image from url or media library.)', $prefix),
					'id'      => $prefix . '_global_background_image',
					'type'    => 'file',
					'options' => array(
							'url' => true,
					),
					'text'    => array(
							'add_upload_file_text' => 'Add Image' // Change upload button text. "Add or Upload File"
					),
					'query_args' => array(
							'type' => 'image',
					),
					'attributes' => array(
							'data-conditional-id'    => $prefix . '_global_background_type',
							'data-conditional-value' => 'image',
							'data-default' => ''
					)
			));
			$cmb->add_field(array(
					'name' => __('Background Video', $prefix),
											'desc'    => __('Global background video from url or media library)', $prefix),
					'id'      => $prefix . '_global_background_video',
					'type'    => 'file',
					'options' => array(
							'url' => true,
					),
					'text'    => array(
							'add_upload_file_text' => 'Add Video' // Change upload button text. Default: "Add or Upload File"
					),
					'query_args' => array(
							'type' => 'video',
					),
					'attributes' => array(
							'data-conditional-id'    => $prefix . '_global_background_type',
							'data-conditional-value' => 'video',
							'data-default' => ''
					),
					'after_row' => '</div></li>'
			));
			$cmb->add_field(array(
					'before_row'  => '<li class="accordion-item" data-accordion-item>
															<a href="#panel-global-colors" role="tab" class="accordion-title" id="panel-global-colors-heading" aria-controls="panel-global-colors">
																<h6>Global Color Palette</h6>
															</a>
															<div id="panel-global-colors" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-global-colors-heading">',
					'name'    => __('Primary Color', $prefix),
					'desc'    => __('The theme\'s primary color in hex (default: #5274ff)', $prefix),
					'id'      => $prefix . '_global_primary_color',
					'type'    => 'colorpicker',
					'default' => '#5274ff',
					'attributes' => array(
						'data-default' => '#5274ff'
					)
			));
			$cmb->add_field(array(
					'name'    => __('Dark Primary Color', $prefix),
					'desc'    => __('The theme\'s dark primary color in hex (default: #3F51B5)', $prefix),
					'id'      => $prefix . '_global_dark_primary_color',
					'type'    => 'colorpicker',
					'default' => '#3F51B5',
					'attributes' => array(
						'data-default' => '#3F51B5'
					)
			));
			$cmb->add_field(array(
					'name'    => __('Light Primary Color', $prefix),
					'desc'    => __('The theme\'s light primary color in hex (default: #5c6bc0)', $prefix),
					'id'      => $prefix . '_global_light_primary_color',
					'type'    => 'colorpicker',
					'default' => '#5c6bc0',
					'attributes' => array(
						'data-default' => '#5c6bc0'
					)
			));
			$cmb->add_field(array(
					'name'    => __('Accent Color', $prefix),
					'desc'    => __('The theme\'s accent color in hex (default: #33a0ff)', $prefix),
					'id'      => $prefix . '_global_accent_color',
					'type'    => 'colorpicker',
					'default' => '#33a0ff',
					'attributes' => array(
						'data-default' => '#33a0ff'
					)
			));
			$cmb->add_field(array(
					'name'    => __('Secondary Color', $prefix),
					'desc'    => __('The theme\'s secondary color in hex (default: #9aefea)', $prefix),
					'id'      => $prefix . '_global_secondary_color',
					'type'    => 'colorpicker',
					'default' => '#9aefea',
					'attributes' => array(
						'data-default' => '#9aefea'
					)
			));
			$cmb->add_field(array(
					'name'    => __('Success Color', $prefix),
					'desc'    => __('Color for success notifications in hex (default: #15da78)', $prefix),
					'id'      => $prefix . '_global_success_color',
					'type'    => 'colorpicker',
					'default' => '#15da78',
					'attributes' => array(
						'data-default' => '#15da78'
					)
			));
			$cmb->add_field(array(
					'name'    => __('Success Hover Color', $prefix),
					'desc'    => __('Hover color for success notifications in hex (default: #27e26d)', $prefix),
					'id'      => $prefix . '_global_success_hover_color',
					'type'    => 'colorpicker',
					'default' => '#27e26d',
					'attributes' => array(
						'data-default' => '#27e26d'
					)
			));
			$cmb->add_field(array(
					'name'    => __('Warning Color', $prefix),
					'desc'    => __('Color for warning notifications in hex (default: #e0c285)', $prefix),
					'id'      => $prefix . '_global_warning_color',
					'type'    => 'colorpicker',
					'default' => '#e0c285',
					'attributes' => array(
						'data-default' => '#e0c285'
					)
			));
			$cmb->add_field(array(
					'name'          => __('Alert Color', $prefix),
					'desc'      => __('Color for alert notifications in hex (default: #e05252)', $prefix),
					'id'        => $prefix . '_global_alert_color',
					'type'      => 'colorpicker',
					'default'   => '#e05252',
					'attributes' => array(
						'data-default' => '#e05252'
					),
			));
			$cmb->add_field(array(
					'name'          => __('Alert Hover Color', $prefix),
					'desc'      => __('Color for alert notifications in hex (default: #e03333)', $prefix),
					'id'        => $prefix . '_global_alert_hover_color',
					'type'      => 'colorpicker',
					'default'   => '#e03333',
					'attributes' => array(
						'data-default' => '#e03333'
					),
					'after_row' => '</div></li>'
			));
      $cmb->add_field(array(
					'before_row'  => '<li class="accordion-item" data-accordion-item>
														<a href="#panel-global-grays" role="tab" class="accordion-title" id="panel-global-grays-heading" aria-controls="panel-global-grays">
															<h6>Global Blacks & Whites</h6>
														</a>
														<div id="panel-global-grays" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-global-grays-heading">',
          'name'    => __('White', $prefix),
          'desc'    => __('Color for white in hex (default: #f5faff)', $prefix),
          'id'      => $prefix . '_global_white_color',
          'type'    => 'colorpicker',
          'default' => '#f5faff',
          'attributes' => array(
            'data-default' => '#f5faff'
          )
      ));
			$cmb->add_field(array(
          'name'    => __('Light Gray', $prefix),
					'desc'    => __('Color for light gray in hex (default: #b9bed5)', $prefix),
					'id'      => $prefix . '_global_light_gray_color',
					'type'    => 'colorpicker',
					'default' => '#b9bed5',
					'attributes' => array(
						'data-default' => '#b9bed5'
					)
			));
			$cmb->add_field(array(
					'name'    => __('Medium Gray', $prefix),
					'desc'    => __('Color for medium gray in hex (default: #7b829d)', $prefix),
					'id'      => $prefix . '_global_medium_gray_color',
					'type'    => 'colorpicker',
					'default' => '#7b829d',
					'attributes' => array(
						'data-default' => '#7b829d'
					)
			));
			$cmb->add_field(array(
					'name'    => __('Dark Gray', $prefix),
					'desc'    => __('Color for dark gray in hex (default: #5f6786)', $prefix),
					'id'      => $prefix . '_global_dark_gray_color',
					'type'    => 'colorpicker',
					'default' => '#5f6786',
					'attributes' => array(
						'data-default' => '#5f6786'
					)
			));
			$cmb->add_field(array(
					'name'    => __('Black', $prefix),
					'desc'    => __('Color for black in hex (default: #262831)', $prefix),
					'id'      => $prefix . '_global_black_color',
					'type'    => 'colorpicker',
					'default' => '#262831',
					'attributes' => array(
						'data-default' => '#262831'
					),
					'after_row' => '</div></li></ul>'
			));
			return $cmb;
		}
	endif;

?>
