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
        <div class="wrap cmb2-options-page <?php echo $this->key; ?>">
            <h3 id="tabs" class="docs-heading" data-magellan-target="tabs"><a href="#tabs"></a><?php echo esc_html(get_admin_page_title()); ?></h3>
            <br>
            <ul class="tabs" data-tabs id="settings-tabs">
                <li class="tabs-title is-active"><a href="#global" aria-selected="true">Global</a></li>
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
        $cmb->add_field(array(
            'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
																<li class="accordion-item" data-accordion-item>
																	<a href="#panel-global" role="tab" class="accordion-title" id="panel-global-heading" aria-controls="panel-global">
																		<h6>Global Styles</h6>
																	</a>
								    							<div id="panel-global" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-global-heading">',
            'name' => __('Font Size', $this->prefix),
            'desc' => __('Global font size and units (default: 100%)', $this->prefix),
            'id'   => $this->prefix . '_global_font_size',
            'type' => 'text_small',
            'default' => '100%',
            'attributes' => array(
              'data-default' => '100%'
            )
        ));
        $cmb->add_field(array(
            'name' => __('Site Width', $this->prefix),
            'desc' => __('Global site width and units (default: 1200px)', $this->prefix),
            'id'   => $this->prefix . '_global_site_width',
            'type' => 'text_small',
            'default' => '1200px',
            'attributes' => array(
              'data-default' => '1200px'
            )
        ));
        $cmb->add_field(array(
            'name' => __('Line Height', $this->prefix),
            'desc' => __('Global line height (default: 1.5)', $this->prefix),
            'id'   => $this->prefix . '_global_line_height',
            'type' => 'text_small',
            'default' => '1.5',
            'attributes' => array(
              'data-default' => '1.5'
            )
        ));
				$cmb->add_field(array(
            'name' => __('Body Font Color', $this->prefix),
                        'desc'    => __('Global body font color in hex (default: #b9bed5)', $this->prefix),
            'id'      => $this->prefix . '_global_font_color',
            'type'    => 'colorpicker',
            'default' => '#b9bed5',
            'attributes' => array(
              'data-default' => '#b9bed5'
            )
        ));
        $cmb->add_field(array(
            'name' => __('Body Font Family', $this->prefix),
            'desc'    => __('Global body font family (default: Quicksand)', $this->prefix),
            'id'            => $this->prefix . '_global_font_family',
            'type'             => 'select',
            'show_option_none' => false,
            'default'          => 'Quicksand',
            'attributes' => array(
              'data-default' => 'Quicksand'
            ),
            'options_cb'       => array($this, 'solwp_google_fonts'),
        ));
        $cmb->add_field(array(
            'name' => __('Global Margins', $this->prefix),
            'desc' => __('Global margins size and units (default: 1rem)', $this->prefix),
            'id'   => $this->prefix . '_global_margin_size',
            'type' => 'text_small',
            'default' => '1rem',
            'attributes' => array(
              'data-default' => '1rem'
            )
        ));
        $cmb->add_field(array(
            'name' => __('Global Padding', $this->prefix),
            'desc' => __('Global padding size and units (default: 1rem)', $this->prefix),
            'id'   => $this->prefix . '_global_padding_size',
            'type' => 'text_small',
            'default' => '1rem',
            'attributes' => array(
              'data-default' => '1rem'
            )
        ));
        $cmb->add_field(array(
            'name' => __('Background Type', $this->prefix),
                        'desc'    => __('Choose the type of background (default: Color)', $this->prefix),
            'id'      => $this->prefix . '_global_background_type',
            'type'    => 'select',
            'default' => 'color',
            'options' => array(
                'color' => 'Color',
                'image' => 'Image',
                'video' => 'Video'
            ),
            'attributes' => array(
                'data-conditional-parent' => $this->prefix . '_global_background_type',
                'data-default' => 'color'
            )
        ));
        $cmb->add_field(array(
            'name' => __('Background Color', $this->prefix),
                        'desc'    => __('Global background color in hex (default: #202533)', $this->prefix),
            'id'      => $this->prefix . '_global_background_color',
            'type'    => 'colorpicker',
            'default' => '#202533',
            'attributes' => array(
                'data-conditional-id'    => $this->prefix . '_global_background_type',
                'data-conditional-value' => 'color',
                'data-default' => '#202533'
            )
        ));
        $cmb->add_field(array(
            'name' => __('Background Image', $this->prefix),
                        'desc'    => __('Global background image from url or media library.)', $this->prefix),
            'id'      => $this->prefix . '_global_background_image',
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
                'data-conditional-id'    => $this->prefix . '_global_background_type',
                'data-conditional-value' => 'image',
                'data-default' => ''
            )
        ));
        $cmb->add_field(array(
            'name' => __('Background Video', $this->prefix),
                        'desc'    => __('Global background video from url or media library)', $this->prefix),
            'id'      => $this->prefix . '_global_background_video',
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
                'data-conditional-id'    => $this->prefix . '_global_background_type',
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
            'name'    => __('Primary Color', $this->prefix),
            'desc'    => __('The theme\'s primary color in hex (default: #5274ff)', $this->prefix),
            'id'      => $this->prefix . '_global_primary_color',
            'type'    => 'colorpicker',
            'default' => '#5274ff',
            'attributes' => array(
              'data-default' => '#5274ff'
            )
        ));
        $cmb->add_field(array(
            'name'    => __('Dark Primary Color', $this->prefix),
            'desc'    => __('The theme\'s dark primary color in hex (default: #3F51B5)', $this->prefix),
            'id'      => $this->prefix . '_global_dark_primary_color',
            'type'    => 'colorpicker',
            'default' => '#3F51B5',
            'attributes' => array(
              'data-default' => '#3F51B5'
            )
        ));
        $cmb->add_field(array(
            'name'    => __('Light Primary Color', $this->prefix),
            'desc'    => __('The theme\'s light primary color in hex (default: #5c6bc0)', $this->prefix),
            'id'      => $this->prefix . '_global_light_primary_color',
            'type'    => 'colorpicker',
            'default' => '#5c6bc0',
            'attributes' => array(
              'data-default' => '#5c6bc0'
            )
        ));
        $cmb->add_field(array(
            'name'    => __('Accent Color', $this->prefix),
            'desc'    => __('The theme\'s accent color in hex (default: #33a0ff)', $this->prefix),
            'id'      => $this->prefix . '_global_accent_color',
            'type'    => 'colorpicker',
            'default' => '#33a0ff',
            'attributes' => array(
              'data-default' => '#33a0ff'
            )
        ));
        $cmb->add_field(array(
            'name'    => __('Secondary Color', $this->prefix),
            'desc'    => __('The theme\'s secondary color in hex (default: #9aefea)', $this->prefix),
            'id'      => $this->prefix . '_global_secondary_color',
            'type'    => 'colorpicker',
            'default' => '#9aefea',
            'attributes' => array(
              'data-default' => '#9aefea'
            )
        ));
        $cmb->add_field(array(
            'name'    => __('Success Color', $this->prefix),
            'desc'    => __('Color for success notifications in hex (default: #43d08a)', $this->prefix),
            'id'      => $this->prefix . '_global_success_color',
            'type'    => 'colorpicker',
            'default' => '#43d08a',
            'attributes' => array(
              'data-default' => '#43d08a'
            )
        ));
        $cmb->add_field(array(
            'name'    => __('Warning Color', $this->prefix),
            'desc'    => __('Color for warning notifications in hex (default: #e0c285)', $this->prefix),
            'id'      => $this->prefix . '_global_warning_color',
            'type'    => 'colorpicker',
            'default' => '#e0c285',
            'attributes' => array(
              'data-default' => '#e0c285'
            )
        ));
        $cmb->add_field(array(
            'name'          => __('Alert Color', $this->prefix),
            'desc'      => __('Color for alert notifications in hex (default: #e05252)', $this->prefix),
            'id'        => $this->prefix . '_global_alert_color',
            'type'      => 'colorpicker',
            'default'   => '#e05252',
            'attributes' => array(
              'data-default' => '#e05252'
            ),
            'after_row' => '</div></li>'
        ));
        $cmb->add_field(array(
            'before_row'  => '<li class="accordion-item" data-accordion-item>
															<a href="#panel-global-grays" role="tab" class="accordion-title" id="panel-global-grays-heading" aria-controls="panel-global-grays">
																<h6>Global Monochromes</h6>
															</a>
															<div id="panel-global-grays" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-global-grays-heading">',
            'name'    => __('Light Gray', $this->prefix),
            'desc'    => __('Color for light gray in hex (default: #b9bed5)', $this->prefix),
            'id'      => $this->prefix . '_global_light_gray_color',
            'type'    => 'colorpicker',
            'default' => '#b9bed5',
            'attributes' => array(
              'data-default' => '#b9bed5'
            )
        ));
        $cmb->add_field(array(
            'name'    => __('Medium Gray', $this->prefix),
            'desc'    => __('Color for medium gray in hex (default: #7b829d)', $this->prefix),
            'id'      => $this->prefix . '_global_medium_gray_color',
            'type'    => 'colorpicker',
            'default' => '#7b829d',
            'attributes' => array(
              'data-default' => '#7b829d'
            )
        ));
        $cmb->add_field(array(
            'name'    => __('Dark Gray', $this->prefix),
            'desc'    => __('Color for dark gray in hex (default: #5f6786)', $this->prefix),
            'id'      => $this->prefix . '_global_dark_gray_color',
            'type'    => 'colorpicker',
            'default' => '#5f6786',
            'attributes' => array(
              'data-default' => '#5f6786'
            )
        ));
        $cmb->add_field(array(
            'name'    => __('White', $this->prefix),
            'desc'    => __('Color for white in hex (default: #f5faff)', $this->prefix),
            'id'      => $this->prefix . '_global_white_color',
            'type'    => 'colorpicker',
            'default' => '#f5faff',
            'attributes' => array(
              'data-default' => '#f5faff'
            )
        ));
        $cmb->add_field(array(
            'name'    => __('Black', $this->prefix),
            'desc'    => __('Color for black in hex (default: #262831)', $this->prefix),
            'id'      => $this->prefix . '_global_black_color',
            'type'    => 'colorpicker',
            'default' => '#262831',
            'attributes' => array(
              'data-default' => '#262831'
            ),
            'after_row' => '</div></li></ul>'
        ));
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
        // Set our CMB2 fields
        $cmb->add_field(array(
            'name' => __('Nav Text', $this->prefix),
            'desc' => __('field description (optional)', $this->prefix),
            'id'   => 'nav_test_text',
            'type' => 'text',
            'default' => 'Default Text'
        ));
        $cmb->add_field(array(
            'name'    => __('Test Color Picker', $this->prefix),
            'desc'    => __('field description (optional)', $this->prefix),
            'id'      => 'nav_test_colorpicker',
            'type'    => 'colorpicker',
            'default' => '#bada55',
        ));
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
        // Set our CMB2 fields
        $cmb->add_field(array(
            'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
								<li class="accordion-item" data-accordion-item>
									<a href="#panel-typo-base" role="tab" class="accordion-title" id="panel-typo-base-heading" aria-controls="panel-typo-base">
										<h6>Header Typography</h6>
									</a>
									<div id="panel-typo-base" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-typ-base-heading">',
            'name' => __('Header Font Family', $this->prefix),
            'desc'    => __('Font family for header elements h1, h2, and h3. (default: Josefin Sans)', $this->prefix),
            'id'            => $this->prefix . '_typo_header_family',
            'type'             => 'select',
            'show_option_none' => false,
            'default'          => 'Josefin Sans',
            'options_cb'       => array($this, 'solwp_google_fonts'),
						'attributes'			 => array(
							'data-default'	 => 'Josefin Sans'
						),
        ));
        $cmb->add_field(array(
            'name' => __('Header Font Weight', $this->prefix),
            'desc' => __('Set the weight of the header font (default = 300)', $this->prefix),
            'id'   => $this->prefix . '_typo_header_weight',
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
            'name' => __('Sub-Header Font Family', $this->prefix),
            'desc'    => __('Font family for header elements h4, h5, h6 (default: Archivo Narrow)', $this->prefix),
            'id'            => $this->prefix . '_typo_sub_header_family',
            'type'             => 'select',
            'show_option_none' => false,
            'default'          => 'Archivo Narrow',
            'options_cb'       => array($this, 'solwp_google_fonts'),
						'attributes'			 => array(
							'data-default'	 => 'Archivo Narrow',
						),
        ));
        $cmb->add_field(array(
            'name' => __('Sub-Header Font Weight', $this->prefix),
            'desc' => __('Set the font weight for h4, h5, and h6 (default = 700)', $this->prefix),
            'id'   => $this->prefix . '_typo_sub_header_weight',
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
            'name' => __('Header Line Height', $this->prefix),
            'desc' => __('Set the line height of the header text (default = 1.4)', $this->prefix),
            'id'   => $this->prefix . '_typo_header_line_height',
            'type'    => 'text_small',
            'default' => '1.4',
						'attributes'			 => array(
							'data-default'	 => '1.4'
						),
        ));
        $cmb->add_field(array(
            'name' => __('Header Margin Bottom', $this->prefix),
            'desc' => __('Set the how much space is below each header element (default = 0.65rem)', $this->prefix),
            'id'   => $this->prefix . '_typo_header_margin_bottom',
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
            'name' => __('H1 Font Size', $this->prefix),
            'desc' => __('Font size of all h1 elements (default: 1.75rem)', $this->prefix),
            'id'   => $this->prefix . '_typo_h1_size',
            'type' => 'text_small',
            'default' => '1.75rem',
						'attributes'			 => array(
							'data-default'	 => '1.75rem'
						),
        ));
        $cmb->add_field(array(
            'name' => __('H1 Font Color', $this->prefix),
            'desc' => __('Font color of all h1 elements (default: #f5faff)', $this->prefix),
            'id'   => $this->prefix . '_typo_h1_color',
            'type' => 'colorpicker',
            'default' => '#f5faff',
						'attributes'			 => array(
							'data-default'	 => '#f5faff'
						),
        ));
        $cmb->add_field(array(
            'name' => __('H2 Font Size', $this->prefix),
            'desc' => __('Font size of all h2 elements (default: 1.5rem)', $this->prefix),
            'id'   => $this->prefix . '_typo_h2_size',
            'type' => 'text_small',
            'default' => '1.5rem',
						'attributes'			 => array(
							'data-default'	 => '1.5rem'
						),
        ));
        $cmb->add_field(array(
            'name' => __('H2 Font Color', $this->prefix),
            'desc' => __('Font color of all h2 elements (default: #93ddfb)', $this->prefix),
            'id'   => $this->prefix . '_typo_h2_color',
            'type' => 'colorpicker',
            'default' => '#93ddfb',
						'attributes'			 => array(
							'data-default'	 => '#93ddfb'
						),
        ));
        $cmb->add_field(array(
            'name' => __('H3 Font Size', $this->prefix),
            'desc' => __('Font size of all h3 elements (default: 1.25rem)', $this->prefix),
            'id'   => $this->prefix . '_typo_h3_size',
            'type' => 'text_small',
            'default' => '1.25rem',
						'attributes'			 => array(
							'data-default'	 => '1.25rem'
						)
        ));
        $cmb->add_field(array(
            'name' => __('H3 Font Color', $this->prefix),
            'desc' => __('Font color of all h3 elements (default: #85b1e0)', $this->prefix),
            'id'   => $this->prefix . '_typo_h3_color',
            'type' => 'colorpicker',
            'default' => '#85b1e0',
						'attributes'			 => array(
							'data-default'	 => '#85b1e0'
						)
        ));
        $cmb->add_field(array(
            'name' => __('H4 Font Size', $this->prefix),
            'desc' => __('Font size of all h4 elements (default: 1rem)', $this->prefix),
            'id'   => $this->prefix . '_typo_h4_size',
            'type' => 'text_small',
            'default' => '1rem',
						'attributes'			 => array(
							'data-default'	 => '1rem'
						)
        ));
        $cmb->add_field(array(
            'name' => __('H4 Font Color', $this->prefix),
            'desc' => __('Font color of all h4 elements (default: #9aefea)', $this->prefix),
            'id'   => $this->prefix . '_typo_h4_color',
            'type' => 'colorpicker',
            'default' => '#9aefea',
						'attributes'			 => array(
							'data-default'	 => '#9aefea'
						)
        ));
        $cmb->add_field(array(
            'name' => __('H5 Font Size', $this->prefix),
            'desc' => __('Font size of all h5 elements (default: 0.875rem)', $this->prefix),
            'id'   => $this->prefix . '_typo_h5_size',
            'type' => 'text_small',
            'default' => '0.875rem',
						'attributes'			 => array(
							'data-default'	 => '0.875rem'
						)
        ));
        $cmb->add_field(array(
            'name' => __('H5 Font Color', $this->prefix),
            'desc' => __('Font color of all h5 elements (default: #7e7edd)', $this->prefix),
            'id'   => $this->prefix . '_typo_h5_color',
            'type' => 'colorpicker',
            'default' => '#7e7edd',
						'attributes'			 => array(
							'data-default'	 => '#7e7edd'
						)
        ));
        $cmb->add_field(array(
            'name' => __('H6 Font Size', $this->prefix),
            'desc' => __('Font size of all h6 elements (default: 0.85rem)', $this->prefix),
            'id'   => $this->prefix . '_typo_h6_size',
            'type' => 'text_small',
            'default' => '0.75rem',
						'attributes'			 => array(
							'data-default'	 => '0.75rem'
						)
        ));
        $cmb->add_field(array(
            'name' => __('H6 Font Color', $this->prefix),
            'desc' => __('Font color of all h6 elements (default: #99adff)', $this->prefix),
            'id'   => $this->prefix . '_typo_h6_color',
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
            'name' => __('Small Font Size', $this->prefix),
            'desc'    => __('Font size for small text elements like meta information. (default: 80%)', $this->prefix),
            'id'            => $this->prefix . '_typo_body_small_size',
            'type'             => 'text_small',
            'default'          => '80%',
						'attributes'			 => array(
							'data-default'	 => '80%'
						),
        ));
				$cmb->add_field(array(
						'name' => __('Small Font Color', $this->prefix),
            'desc'    => __('Font color for small text elements like meta information. (default: #7b829d)', $this->prefix),
            'id'            => $this->prefix . '_typo_body_small_color',
            'type'             => 'colorpicker',
            'default'          => '#7b829d',
						'attributes'			 => array(
							'data-default'	 => '#7b829d'
						),
        ));
				$cmb->add_field(array(
						'name' => __('Paragraph Line Height', $this->prefix),
						'desc'    => __('Line height for paragraph elements. (default: 1.6)', $this->prefix),
						'id'            => $this->prefix . '_typo_body_paragraph_line_height',
						'type'             => 'text_small',
						'default'          => '1.6',
						'attributes'			 => array(
							'data-default'	 => '1.6'
						),
				));
				$cmb->add_field(array(
						'name' => __('Paragraph Margin Bottom', $this->prefix),
						'desc'    => __('Extra space below paragraph elements. (default: 1rem)', $this->prefix),
						'id'            => $this->prefix . '_typo_body_paragraph_margin_bottom',
						'type'             => 'text_small',
						'default'          => '1rem',
						'attributes'			 => array(
							'data-default'	 => '1rem'
						),
				));
				$cmb->add_field(array(
						'name' => __('Link Font Color', $this->prefix),
						'desc'    => __('Font color of all links. (default: #5274ff)', $this->prefix),
						'id'            => $this->prefix . '_typo_body_link_font_color',
						'type'             => 'colorpicker',
						'default'          => '#5274ff',
						'attributes'			 => array(
							'data-default'	 => '#5274ff'
						),
				));
				$cmb->add_field(array(
						'name' => __('Link Hover Font Color', $this->prefix),
						'desc'    => __('Hover color for all links. (default: #5c6bc0)', $this->prefix),
						'id'            => $this->prefix . '_typo_body_link_hover_font_color',
						'type'             => 'colorpicker',
						'default'          => '#5c6bc0',
						'attributes'			 => array(
							'data-default'	 => '#5c6bc0'
						),
				));
				$cmb->add_field(array(
						'name' => __('Link Font Decoration', $this->prefix),
						'desc'    => __('Font decoration for all links. (default: none)', $this->prefix),
						'id'            => $this->prefix . '_typo_body_link_font_decoration',
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
					'name' => __('Link Hover Font Decoration', $this->prefix),
					'desc'    => __('Font decoration for all hovered links. (default: none)', $this->prefix),
					'id'            => $this->prefix . '_typo_body_link_hover_font_decoration',
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
						'name' => __('Horizontal Line Width', $this->prefix),
						'desc'    => __('Width of horizontal line used to separate body elements. (default: 1200px)', $this->prefix),
						'id'            => $this->prefix . '_typo_body_hr_width',
						'type'    => 'text_small',
						'default' => '1200px',
						'attributes'			 => array(
							'data-default'	 => '1200px'
						),
				));
				$cmb->add_field(array(
						'name' => __('Horizontal Line Thickness', $this->prefix),
						'desc'    => __('Thickness of horizontal line used to separate body elements. (default: 1px)', $this->prefix),
						'id'            => $this->prefix . '_typo_body_hr_thickness',
						'type'    => 'text_small',
						'default' => '1px',
						'attributes'			 => array(
							'data-default'	 => '1px'
						),
				));
				$cmb->add_field(array(
						'name' => __('Horizontal Line Style', $this->prefix),
						'desc'    => __('Style of horizontal line used to separate body elements. (default: solid)', $this->prefix),
						'id'            => $this->prefix . '_typo_body_hr_style',
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
						'name' => __('Horizontal Line Color', $this->prefix),
						'desc'    => __('Color of horizontal line used to separate body elements. (default: #7b829d)', $this->prefix),
						'id'            => $this->prefix . '_typo_body_hr_color',
						'type'    => 'colorpicker',
						'default' => '#7b829d',
						'attributes'			 => array(
							'data-default'	 => '#7b829d'
						),
				));
				$cmb->add_field(array(
						'name' => __('Horizontal Line Margin', $this->prefix),
						'desc'    => __('Space above and below horizontal lines. (default: 1.6rem)', $this->prefix),
						'id'            => $this->prefix . '_typo_body_hr_margin',
						'type'    => 'text_small',
						'default' => '1.6rem',
						'attributes'			 => array(
							'data-default'	 => '1.6rem'
						),
						'after_row' => '</div></li></ul>'
				));

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
        // Set our CMB2 fields
        $cmb->add_field(array(
            'name' => __('Object Text', $this->prefix),
            'desc' => __('field description (optional)', $this->prefix),
            'id'   => 'test_text',
            'type' => 'text',
            'default' => 'Default Text'
        ));
        $cmb->add_field(array(
            'name'    => __('Test Color Picker', $this->prefix),
            'desc'    => __('field description (optional)', $this->prefix),
            'id'      => 'test_colorpicker',
            'type'    => 'colorpicker',
            'default' => '#bada55',
        ));

                array_push($this->option_names, $cmb);
    }

    /**
     * Gets a list of google fonts for font settings
     *
     * @since  0.1.0
     * @return $options array of fonts
     */
    public function solwp_google_fonts()
    {
        $json_google_fonts = file_get_contents(get_template_directory_uri() . '/assets/fonts/google-fonts.json');
        $jgf = json_decode($json_google_fonts);
        $options = array();

        foreach ($jgf->items as $gfont) {
            $options[ str_replace('/s', '+', $gfont->family) ] = $gfont->family;
        }
        array_shift($options);
        return $options;
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
