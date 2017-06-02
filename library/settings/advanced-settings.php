<?php
/**
 * Advanced Default Settings.
 *
 * @since 1.0.0
 */

  /**
   *	Adds all fields for Advanced defaults settings to custom meta box.
   *
   * @param [cmb]    $cmb    [ custom metabox (cmb), required ]
   * @param [string] $prefix [ plugin prefix (twp), optional ]
   *
   * @return [cmb] $CMB2	 [ cmb with fields added ]
   *
   * @since 	1.0.0
   *
   * @version 1.0.0
   */
  if ( ! function_exists('twp_add_advanced_settings') ) :
    function twp_add_advanced_settings( $cmb, $prefix = 'twp' ) {
        // Set our CMB2 fields
        $cmb->add_field(array(
            'before_row' => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
						<li class="accordion-item" data-accordion-item>
						<a href="#panel-advanced-forms" role="tab" class="accordion-title" id="panel-advanced-forms-heading" aria-controls="panel-advanced-forms">
							<h6>Advanced Settings</h6>
						</a>
						<div id="panel-advanced-forms" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-nav-forms-heading">',
            'name' => __('Enable Browsersync', $prefix),
            'desc' => __('Enable Browsersync for use only in development. (default: Disabled)', $prefix),
            'id' => $prefix . '_advanced_browser_sync',
            'type' => 'radio_inline',
            'options' => array(
                'yes' => __('Enabled', 'twp'),
                'no' => __('Disabled', 'twp'),
            ),
            'default' => 'no',
            'attributes' => array(
                'data-default' => 'no',
            ),
        ));
        // Set our CMB2 fields
        $cmb->add_field(array(
                        'name' => __('Google Analytics', $prefix),
            'desc' => __('Paste your Google Analytics tracking code here to enable analytics site-wide.', $prefix),
            'id' => $prefix . '_google_analytics',
            'type' => 'textarea_code',
            'default' => '',
            'attributes' => array(
                'data-default' => '',
            ),
            'after_row' => '</div></li></ul>',
        ));

        return $cmb;
    }
  endif;
