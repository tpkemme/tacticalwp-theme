<?php
/**
 * CMB2 Theme Options
 * @version 0.1.0
 */
 /*
  1. Global
  	-global styles
  2. Navigation
  	-top Bar
  	-title Bar
  	-breadcrumbs
  	-menu
	3. Colors
	4. Posts
		-posts ( card )
		-pagination
		-notifications ( callout, tooltip )
		-thumnails
  5. Layout
  	-Breakpoints
  	-The Grid
  	-Off Canvas
  6. Typography
  	-Base Typography
  	-Typography Helpers?
  6. Object Default settings
  	-accordions (accordions, accordion menu)
  	-badges
  	-buttons (button, button group, close button)
  	-dropdown (dropdown, drilldown, dropdown menu)
  	-forms (abide, forms)
  	-labels
  	-media objects
  	-meters
  	-orbits
  	-progress bars
  	-responsive embeds
  	-reveals
  	-sliders
  	-switchs
  	-table
  	-tabs
 	*/
class SolWP_Settings
{
    /**
     * Option key, and option page slug
     * @var string
     */
    private $key = 'solwp_options';
    /**
     * Theme prefix
     * @var string
     */
    private $prefix = 'solwp';
    /**
     * Options page metabox id
     * @var string
     */
    private $metabox_id = 'solwp_option_metabox';
    /**
     * Array of option names
     * @var string
     */
    private $option_names = array();
    /**
     * Options Page title
     * @var string
     */
    protected $title = '';
    /**
     * Options Page hook
     * @var string
     */
    protected $options_page = '';
    /**
     * Holds an instance of the object
     *
     * @var SolWP_Settings
     */
    protected static $instance = null;
    /**
     * Returns the running object
     *
     * @return SolWP_Settings
     */
    public static function get_instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
            self::$instance->hooks();
        }
        return self::$instance;
    }
    /**
     * Constructor
     * @since 0.1.0
     */
    protected function __construct()
    {
        // Set our title
        $this->title = __('SolWP Settings', $this->prefix);
    }
    /**
     * Initiate our hooks
     * @since 0.1.0
     */
    public function hooks()
    {
        add_action('admin_init', array( $this, 'init' ));
        add_action('admin_menu', array( $this, 'add_options_page' ));
        add_action('cmb2_admin_init', array( $this, 'add_options_page_metabox' ));
        add_action('cmb2_admin_init', array( $this, 'add_options_page_nav_metabox' ));
        add_action('cmb2_admin_init', array( $this, 'add_options_page_colors_metabox' ));
        add_action('cmb2_admin_init', array( $this, 'add_options_page_posts_metabox' ));
        add_action('cmb2_admin_init', array( $this, 'add_options_page_layout_metabox' ));
        add_action('cmb2_admin_init', array( $this, 'add_options_page_typo_metabox' ));
        add_action('cmb2_admin_init', array( $this, 'add_options_page_obj_metabox' ));
    }
    /**
     * Register our setting to WP
     * @since  0.1.0
     */
    public function init()
    {
        register_setting($this->key, $this->key);
    }
    /**
     * Add menu options page
     * @since 0.1.0
     */
    public function add_options_page()
    {
        $this->options_page = add_menu_page(__('SolWP Theme Settings', $this->prefix), $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ), 'dashicons-art');
        // Include CMB CSS in the head to avoid FOUC
        add_action("admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ));
    }
    /**
     * Admin page markup. Mostly handled by CMB2
     * @since  0.1.0
     */
    public function admin_page_display()
    {
        ?>
				<?php /* embedded styles set with theme settings */ get_template_part( 'template-parts/embedded-styles' ); ?>

        <div class="wrap cmb2-options-page <?php echo $this->key; ?>">
            <h3 id="tabs" class="docs-heading" data-magellan-target="tabs"><a href="#tabs"></a><?php echo esc_html(get_admin_page_title()); ?></h3>
            <br>
            <ul class="tabs" data-deep-link="true" data-tabs id="settings-tabs">
                <li class="tabs-title is-active"><a href="#global">Global</a></li>
                <li class="tabs-title"><a href="#nav">Navigation</a></li>
                <li class="tabs-title"><a href="#colors">Colors</a></li>
                <li class="tabs-title"><a href="#posts">Posts</a></li>
                <li class="tabs-title"><a href="#layout">Layout</a></li>
                <li class="tabs-title"><a href="#typo">Typography</a></li>
                <li class="tabs-title"><a href="#obj">Object Defaults</a></li>
            </ul>

            <div class="tabs-content" data-tabs-content="settings-tabs">
                <div class="tabs-panel is-active" id="global">
                    <?php cmb2_metabox_form($this->metabox_id, $this->key, array(
											'save_button' => 'Save Settings',
											'form_format' => '<form class="cmb-form" method="post" id="%1$s" enctype="multipart/form-data" encoding="multipart/form-data">
																					<input type="hidden" name="object_id" value="%2$s">
																					%3$s
																					<p style="width: 40vw; float: left; margin-top: 35px;"><input type="submit" name="submit-cmb" id="submit-cmb-global" class="button button-primary" value="%4$s" /></p>
																					<p style="width: 40vw; float: right; margin-top: 35px; text-align: right;"><button style="color:white" type="reset" data-open="resetSettingsModal" id="reset-cmb-%1$s" name="reset-cmb-%1$s" value="Reset" class="button alert">Reset to Default</button>
																					<br/><br/><i>Reset all the settings on this page to their default values.</i></p>
																					<div class="reveal" id="resetSettingsModal" data-reveal>
																						<p class="reset-confirmation">
																							<h5><strong>This will set all the settings on this tab to their default values.</strong></h5>
																							<p>Are you sure you want to continue?</p>
																							<button style="color:white" name="reset-confirmation-global" id="reset-confirmation-global" class="button alert" type="reset" value="Reset to Default">Reset to Default</button>
																						</p>
																						<button class="close-button" data-close aria-label="Close reveal" name="reset-settings-close" type="button">
																							<span aria-hidden="true">&times;</span>
																						</button>
																					</div>
																				</form>',
										)); ?>
                </div>
                <div class="tabs-panel" id="nav">
                    <?php cmb2_metabox_form($this->metabox_id . '-nav', $this->key, array(
											'save_button' => 'Save Settings',
											'form_format' => '<form class="cmb-form" method="post" id="%1$s" enctype="multipart/form-data" encoding="multipart/form-data">
																					<input type="hidden" name="object_id" value="%2$s">
																					%3$s
																					<p style="width: 40vw; float: left; margin-top: 35px;"><input type="submit" name="submit-cmb" id="submit-cmb-nav" class="button button-primary" value="%4$s" /></p>
																					<p style="width: 40vw; float: right; margin-top: 35px; text-align: right;"><button style="color:white" type="reset" data-open="resetSettingsModal" id="reset-cmb-%1$s" name="reset-cmb-%1$s" value="Reset" class="button alert">Reset to Default</button>
																					<br/><br/><i>Reset all the settings on this page to their default values.</i></p>
																					<div class="reveal" id="resetSettingsModal" data-reveal>
																						<p class="reset-confirmation">
																							<h5><strong>This will set all the settings on this tab to their default values.</strong></h5>
																							<p>Are you sure you want to continue?</p>
																							<button style="color:white" name="reset-confirmation-global" id="reset-confirmation-nav" class="button alert" type="reset" value="Reset to Default">Reset to Default</button>
																						</p>
																						<button class="close-button" data-close aria-label="Close reveal" name="reset-settings-close" type="button">
																							<span aria-hidden="true">&times;</span>
																						</button>
																					</div>
																				</form>',
										)); ?>
                </div>
                <div class="tabs-panel" id="colors">
                    <?php cmb2_metabox_form($this->metabox_id . '-colors', $this->key, array(
											'save_button' => 'Save Settings',
											'form_format' => '<form class="cmb-form" method="post" id="%1$s" enctype="multipart/form-data" encoding="multipart/form-data">
																					<input type="hidden" name="object_id" value="%2$s">
																					%3$s
																					<p style="width: 40vw; float: left; margin-top: 35px;"><input type="submit" name="submit-cmb" id="submit-cmb-colors" class="button button-primary" value="%4$s" /></p>
																					<p style="width: 40vw; float: right; margin-top: 35px; text-align: right;"><button style="color:white" type="reset" data-open="resetSettingsModal" id="reset-cmb-%1$s" name="reset-cmb-%1$s" value="Reset" class="button alert">Reset to Default</button>
																					<br/><br/><i>Reset all the settings on this page to their default values.</i></p>
																					<div class="reveal" id="resetSettingsModal" data-reveal>
																						<p class="reset-confirmation">
																							<h5><strong>This will set all the settings on this tab to their default values.</strong></h5>
																							<p>Are you sure you want to continue?</p>
																							<button style="color:white" name="reset-confirmation-global" id="reset-confirmation-colors" class="button alert" type="reset" value="Reset to Default">Reset to Default</button>
																						</p>
																						<button class="close-button" data-close aria-label="Close reveal" name="reset-settings-close" type="button">
																							<span aria-hidden="true">&times;</span>
																						</button>
																					</div>
																				</form>',
										)); ?>
                </div>
                <div class="tabs-panel" id="posts">
                    <?php cmb2_metabox_form($this->metabox_id . '-posts', $this->key, array(
											'save_button' => 'Save Settings',
											'form_format' => '<form class="cmb-form" method="post" id="%1$s" enctype="multipart/form-data" encoding="multipart/form-data">
																					<input type="hidden" name="object_id" value="%2$s">
																					%3$s
																					<p style="width: 40vw; float: left; margin-top: 35px;"><input type="submit" name="submit-cmb" id="submit-cmb-posts" class="button button-primary" value="%4$s" /></p>
																					<p style="width: 40vw; float: right; margin-top: 35px; text-align: right;"><button style="color:white" type="reset" data-open="resetSettingsModal" id="reset-cmb-%1$s" name="reset-cmb-%1$s" value="Reset" class="button alert">Reset to Default</button>
																					<br/><br/><i>Reset all the settings on this page to their default values.</i></p>
																					<div class="reveal" id="resetSettingsModal" data-reveal>
																						<p class="reset-confirmation">
																							<h5><strong>This will set all the settings on this tab to their default values.</strong></h5>
																							<p>Are you sure you want to continue?</p>
																							<button style="color:white" name="reset-confirmation-global" id="reset-confirmation-posts" class="button alert" type="reset" value="Reset to Default">Reset to Default</button>
																						</p>
																						<button class="close-button" data-close aria-label="Close reveal" name="reset-settings-close" type="button">
																							<span aria-hidden="true">&times;</span>
																						</button>
																					</div>
																				</form>',
										)); ?>
                </div>
                <div class="tabs-panel" id="layout">
                    <?php cmb2_metabox_form($this->metabox_id . '-layout', $this->key, array(
											'save_button' => 'Save Settings',
											'form_format' => '<form class="cmb-form" method="post" id="%1$s" enctype="multipart/form-data" encoding="multipart/form-data">
																					<input type="hidden" name="object_id" value="%2$s">
																					%3$s
																					<p style="width: 40vw; float: left; margin-top: 35px;"><input type="submit" name="submit-cmb" id="submit-cmb-layout" class="button button-primary" value="%4$s" /></p>
																					<p style="width: 40vw; float: right; margin-top: 35px; text-align: right;"><button style="color:white" type="reset" data-open="resetSettingsModal" id="reset-cmb-%1$s" name="reset-cmb-%1$s" value="Reset" class="button alert">Reset to Default</button>
																					<br/><br/><i>Reset all the settings on this page to their default values.</i></p>
																					<div class="reveal" id="resetSettingsModal" data-reveal>
																						<p class="reset-confirmation">
																							<h5><strong>This will set all the settings on this tab to their default values.</strong></h5>
																							<p>Are you sure you want to continue?</p>
																							<button style="color:white" name="reset-confirmation-global" id="reset-confirmation-layout" class="button alert" type="reset" value="Reset to Default">Reset to Default</button>
																						</p>
																						<button class="close-button" data-close aria-label="Close reveal" name="reset-settings-close" type="button">
																							<span aria-hidden="true">&times;</span>
																						</button>
																					</div>
																				</form>',
										)); ?>
                </div>
                <div class="tabs-panel" id="typo">
                    <?php cmb2_metabox_form($this->metabox_id . '-typo', $this->key, array(
											'save_button' => 'Save Settings',
											'form_format' => '<form class="cmb-form" method="post" id="%1$s" enctype="multipart/form-data" encoding="multipart/form-data">
																					<input type="hidden" name="object_id" value="%2$s">
																					%3$s
																					<p style="width: 40vw; float: left; margin-top: 35px;"><input type="submit" name="submit-cmb" id="submit-cmb-typo" class="button button-primary" value="%4$s" /></p>
																					<p style="width: 40vw; float: right; margin-top: 35px; text-align: right;"><button style="color:white" type="reset" data-open="resetSettingsModal" id="reset-cmb-%1$s" name="reset-cmb-%1$s" value="Reset" class="button alert">Reset to Default</button>
																					<br/><br/><i>Reset all the settings on this page to their default values.</i></p>
																					<div class="reveal" id="resetSettingsModal" data-reveal>
																						<p class="reset-confirmation">
																							<h5><strong>This will set all the settings on this tab to their default values.</strong></h5>
																							<p>Are you sure you want to continue?</p>
																							<button style="color:white" name="reset-confirmation-global" id="reset-confirmation-typo" class="button alert" type="reset" value="Reset to Default">Reset to Default</button>
																						</p>
																						<button class="close-button" data-close aria-label="Close reveal" name="reset-settings-close" type="button">
																							<span aria-hidden="true">&times;</span>
																						</button>
																					</div>
																				</form>',
										)); ?>
                </div>
                <div class="tabs-panel" id="obj">
                    <?php cmb2_metabox_form($this->metabox_id . '-obj', $this->key, array(
											'save_button' => 'Save Settings',
											'form_format' => '<form class="cmb-form" method="post" id="%1$s" enctype="multipart/form-data" encoding="multipart/form-data">
																					<input type="hidden" name="object_id" value="%2$s">
																					%3$s
																					<p style="width: 40vw; float: left; margin-top: 35px;"><input type="submit" name="submit-cmb" id="submit-cmb-obj" class="button button-primary" value="%4$s" /></p>
																					<p style="width: 40vw; float: right; margin-top: 35px; text-align: right;"><button style="color:white" type="reset" data-open="resetSettingsModal" id="reset-cmb-%1$s" name="reset-cmb-%1$s" value="Reset" class="button alert">Reset to Default</button>
																					<br/><br/><i>Reset all the settings on this page to their default values.</i></p>
																					<div class="reveal" id="resetSettingsModal" data-reveal>
																						<p class="reset-confirmation">
																							<h5><strong>This will set all the settings on this tab to their default values.</strong></h5>
																							<p>Are you sure you want to continue?</p>
																							<button style="color:white" name="reset-confirmation-global" id="reset-confirmation-obj" class="button alert" type="reset" value="Reset to Default">Reset to Default</button>
																						</p>
																						<button class="close-button" data-close aria-label="Close reveal" name="reset-settings-close" type="button">
																							<span aria-hidden="true">&times;</span>
																						</button>
																					</div>
																				</form>',
										)); ?>
                </div>
            </div>
        </div>
        <?php // this is so all our javascript is happy ?>
        <div style="margin-top: 6rem;" id="footer-container"></div>
        <?php
    }
    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    function add_options_page_metabox()
		{
        // hook in our save notices
        add_action("cmb2_save_options-page_fields_{$this->metabox_id}", array( $this, 'settings_notices' ), 10, 2);
        $cmb = new_cmb2_box(array(
            'id'         => $this->metabox_id,
            'hookup'     => false,
            'cmb_styles' => false,
            'show_on'    => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            )
        ));
        solwp_add_global_settings( $cmb, 'solwp' );
        array_push($this->option_names, $cmb);
    }

    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    function add_options_page_nav_metabox()
    {
			// hook in our save notices
			add_action("cmb2_save_options-page_fields_{$this->metabox_id}" . "-nav", array( $this, 'settings_notices' ), 10, 2);
			$cmb = new_cmb2_box(array(
					'id'         => $this->metabox_id . '-nav',
					'hookup'     => false,
					'cmb_styles' => false,
					'show_on'    => array(
							// These are important, don't remove
							'key'   => 'options-page',
							'value' => array( $this->key . "-nav", )
					),
			));
			solwp_add_nav_settings( $cmb, 'solwp' );
			array_push($this->option_names, $cmb);
    }

    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    function add_options_page_colors_metabox()
    {
      // hook in our save notices
      add_action("cmb2_save_options-page_fields_{$this->metabox_id}" . "-colors", array( $this, 'settings_notices' ), 10, 2);
      $cmb = new_cmb2_box(array(
          'id'         => $this->metabox_id . '-colors',
          'hookup'     => false,
          'cmb_styles' => false,
          'show_on'    => array(
              // These are important, don't remove
              'key'   => 'options-page',
              'value' => array( $this->key . "-colors", )
          ),
      ));
      // Set our CMB2 fields
      $cmb->add_field(array(
          'name' => __('Colors test', $this->prefix),
          'desc' => __('field description (optional)', $this->prefix),
          'id'   => 'colors_test_text',
          'type' => 'text',
          'default' => 'Default Text'
      ));
      $cmb->add_field(array(
          'name'    => __('Test Color Picker', $this->prefix),
          'desc'    => __('field description (optional)', $this->prefix),
          'id'      => 'colors_est_colorpicker',
          'type'    => 'colorpicker',
          'default' => '#bada55',
      ));
      array_push($this->option_names, $cmb);
    }

    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    function add_options_page_posts_metabox()
    {
      // hook in our save notices
      add_action("cmb2_save_options-page_fields_{$this->metabox_id}" . "-posts", array( $this, 'settings_notices' ), 10, 2);
      $cmb = new_cmb2_box(array(
          'id'         => $this->metabox_id . '-posts',
          'hookup'     => false,
          'cmb_styles' => false,
          'show_on'    => array(
              // These are important, don't remove
              'key'   => 'options-page',
              'value' => array( $this->key . "-posts", )
          ),
      ));
      // Set our CMB2 fields
      $cmb->add_field(array(
          'name' => __('Posts Text', $this->prefix),
          'desc' => __('field description (optional)', $this->prefix),
          'id'   => 'posts_test_text',
          'type' => 'text',
          'default' => 'Default Text'
      ));
      $cmb->add_field(array(
          'name'    => __('Test Color Picker', $this->prefix),
          'desc'    => __('field description (optional)', $this->prefix),
          'id'      => 'posts_test_colorpicker',
          'type'    => 'colorpicker',
          'default' => '#bada55',
      ));
      array_push($this->option_names, $cmb);
    }

    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    function add_options_page_layout_metabox()
    {
      // hook in our save notices
      add_action("cmb2_save_options-page_fields_{$this->metabox_id}" . "-layout", array( $this, 'settings_notices' ), 10, 2);
      $cmb = new_cmb2_box(array(
          'id'         => $this->metabox_id . '-layout',
          'hookup'     => false,
          'cmb_styles' => false,
          'show_on'    => array(
              // These are important, don't remove
              'key'   => 'options-page',
              'value' => array( $this->key . "-layout", )
          ),
      ));
      // Set our CMB2 fields
      $cmb->add_field(array(
                  'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
													<li class="accordion-item" data-accordion-item>
														<a href="#panel-layout-grid" role="tab" class="accordion-title" id="panel-layout-grid-heading" aria-controls="panel-layout-grid">
															<h6>The Grid</h6>
														</a>
														<div id="panel-layout-grid" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-layout-grid-heading">',
        'name' => __('Grid column count', $this->prefix),
        'desc' => __('Set the grid for tablet devices in the vertical layout (default = 640px)', $this->prefix),
        'id'   => $this->prefix . '_layout_grid_tablet_vertical',
        'type' => 'text_small',
        'default' => '640px'
      ));
      $cmb->add_field(array(
                  'name' => __('Tablet Horizontal Breakpoint', $this->prefix),
                  'desc' => __('Set the grid for tablet devices in the vertical layout (default = 1024px)', $this->prefix),
                  'id'   => $this->prefix . '_layout_grid_tablet_horizontal',
                  'type' => 'text_small',
                  'default' => '1024px'
      ));
      $cmb->add_field(array(
                  'name' => __('Desktop Breakpoint', $this->prefix),
                  'desc' => __('Set the grid for desktop devices (default = 1200px)', $this->prefix),
                  'id'   => $this->prefix . '_layout_grid_desktop',
                  'type'    => 'select',
                  'default' => 'color',
                  'options' => array(
                      '300' => 'Color',
                      '500' => 'Image',
                      '700' => 'Video'
                  ),
                  'after_row' => '</div></li></ul>'
      ));
			array_push($this->option_names, $cmb);
    }

    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    function add_options_page_typo_metabox()
    {
        // hook in our save notices
        add_action("cmb2_save_options-page_fields_{$this->metabox_id}" . "-typo", array( $this, 'settings_notices' ), 10, 2);
        $cmb = new_cmb2_box(array(
            'id'         => $this->metabox_id . '-typo',
            'hookup'     => false,
            'cmb_styles' => false,
            'show_on'    => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key . "-typo", )
            ),
        ));
				solwp_add_typo_settings( $cmb, 'solwp' );
        array_push($this->option_names, $cmb);
    }

    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    function add_options_page_obj_metabox()
    {
        // hook in our save notices
				add_action("cmb2_save_options-page_fields_{$this->metabox_id}" . "-obj", array( $this, 'settings_notices' ), 10, 2);
				$cmb = new_cmb2_box(array(
						'id'         => $this->metabox_id . '-obj',
						'hookup'     => false,
						'cmb_styles' => false,
						'show_on'    => array(
								// These are important, don't remove
								'key'   => 'options-page',
								'value' => array( $this->key . "-obj", )
						),
				));
				solwp_add_obj_settings( $cmb, 'solwp' );
        array_push($this->option_names, $cmb);
    }

    /**
     * Register settings notices for display
     *
     * @since  0.1.0
     * @param  int   $object_id Option key
     * @param  array $updated   Array of updated fields
     * @return void
     */
    public function settings_notices($object_id, $updated)
    {
        if ($object_id !== $this->key || empty($updated)) {
            return;
        }
        add_settings_error($this->key . '-notices', '', __('Settings updated.', $this->prefix), 'updated');
        settings_errors($this->key . '-notices');
    }
    /**
     * Public getter method for retrieving protected/private variables
     * @since  0.1.0
     * @param  string  $field Field to retrieve
     * @return mixed          Field value or exception is thrown
     */
    public function __get($field)
    {
        // Allowed fields to retrieve
        if (in_array($field, array( 'key', 'metabox_id', 'title', 'options_page' ), true)) {
            return $this->{$field};
        }
        throw new Exception('Invalid property: ' . $field);
    }
}

/**
 * Helper function to get/return the SolWP_Settings object
 * @since  0.1.0
 * @return SolWP_Settings object
 */
function solwp_settings()
{
    return SolWP_Settings::get_instance();
}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function solwp_get_option($key = '', $default = null)
{
    if (function_exists('cmb2_get_option')) {
        // Use cmb2_get_option as it passes through some key filters.
        return cmb2_get_option(solwp_settings()->key, $key, $default);
    }
    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option(solwp_settings()->key, $key, $default);
    $val = $default;
    if ('all' == $key) {
        $val = $opts;
    } elseif (array_key_exists($key, $opts) && false !== $opts[ $key ]) {
        $val = $opts[ $key ];
    }
    return $val;
}

// Get it started
solwp_settings();
