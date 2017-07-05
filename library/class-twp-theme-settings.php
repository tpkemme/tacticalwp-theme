<?php
/**
 * TacticalWP Theme Settings
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
  * TWP Theme Settings
  *
  * @category TacticalWP-Theme
  * @package TacticalWP
  * @author   Tyler Kemme <dev@tylerkemme.com>
  * @license  MIT https://opensource.org/licenses/MIT
  * @version 1.0.4
  * @link https://github.com/tpkemme/tacticalwp-theme
  * @since 1.0.0
  */
class TWP_Theme_Settings {

    /**
     * Theme prefix
     *
     * @var string
     */
    private $prefix = 'twp';

    /**
     * Option key and option page slug
     *
     * @var string
     */
    private $key = 'twp_options';
    /**
     * Options page metabox id
     *
     * @var string
     */
    private $metabox_id = 'twp_option_metabox';
    /**
     * Array of option names
     *
     * @var string
     */
    private $option_names = array();
    /**
     * Options Page title
     *
     * @var string
     */
    protected $title = '';
    /**
     * Options Page hook
     *
     * @var string
     */
    protected $options_page = '';
    /**
     * Holds an instance of the object
     *
     * @var TacticalWP_Settings
     */
    protected static $instance = null;
    /**
     * Returns the running object
     *
     * @return TacticalWP_Settings
     */
    public static function get_instance() {
        if (null === self::$instance ) {
            self::$instance = new self();
            self::$instance->hooks();
        }
        return self::$instance;
    }
    /**
     * Constructor
     *
     * @since 1.0.0
     */
    protected function __construct() {
        // Set our title
        $this->title = __('TacticalWP Settings', 'twp' );
    }
    /**
     * Initiate our hooks
     *
     * @since 1.0.0
     */
    public function hooks() {
        add_action('admin_init', array( $this, 'init' ));
        add_action('admin_menu', array( $this, 'add_options_page' ));
        add_action('cmb2_admin_init', array( $this, 'add_options_page_metabox' ));
        add_action('cmb2_admin_init', array( $this, 'add_options_page_nav_metabox' ));
        add_action('cmb2_admin_init', array( $this, 'add_options_page_footer_metabox' ));
        add_action('cmb2_admin_init', array( $this, 'add_options_page_layout_metabox' ));
        add_action('cmb2_admin_init', array( $this, 'add_options_page_typo_metabox' ));
        add_action('cmb2_admin_init', array( $this, 'add_options_page_obj_metabox' ));
				add_action('cmb2_admin_init', array( $this, 'add_options_page_advanced_metabox' ));
    }
    /**
     * Register our setting to WP
     *
     * @since  1.0.0
     */
    public function init() {
        register_setting($this->key, $this->key);
    }
    /**
     * Add menu options page
     *
     * @since 1.0.0
     */
    public function add_options_page() {
        $this->options_page = add_menu_page(__('TacticalWP Settings', 'twp' ), $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ), get_template_directory_uri() . '/assets/images/icons/twpicon1.png');
        // Include CMB CSS in the head to avoid FOUC
        add_action("admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ));
    }
    /**
     * Admin page markup. Mostly handled by CMB2
     *
     * @since  1.0.0
     */
    public function admin_page_display() {
        ?>
				<?php /* embedded styles set with theme settings */ get_template_part( 'template-parts/embedded-styles' ); ?>

        <div class="wrap cmb2-options-page <?php echo $this->key; ?>">
            <h3 id="tabs" class="docs-heading" data-magellan-target="tabs"><a href="#tabs"></a><?php echo esc_html(get_admin_page_title()); ?></h3>
            <br>
            <ul class="tabs" data-deep-link="true" data-tabs id="settings-tabs">
                <li class="tabs-title is-active"><a href="#global">Global</a></li>
                <li class="tabs-title"><a href="#nav">Navigation</a></li>
                <li class="tabs-title"><a href="#footer">Footer</a></li>
                <li class="tabs-title"><a href="#layout">Layout</a></li>
                <li class="tabs-title"><a href="#typo">Typography</a></li>
                <li class="tabs-title"><a href="#obj">Object Defaults</a></li>
                <li class="tabs-title"><a href="#advanced">Advanced</a></li>
            </ul>

            <div class="tabs-content" data-tabs-content="settings-tabs">
                <div class="tabs-panel is-active" id="global">
                    <?php
                    cmb2_metabox_form($this->metabox_id, $this->key, array(
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
                    ));
?>
                </div>
                <div class="tabs-panel" id="nav">
                    <?php
                    cmb2_metabox_form($this->metabox_id . '-nav', $this->key, array(
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
                    ));
?>
                </div>
                <div class="tabs-panel" id="footer">
                    <?php
                    cmb2_metabox_form($this->metabox_id . '-footer', $this->key, array(
	                    'save_button' => 'Save Settings',
	                    'form_format' => '<form class="cmb-form" method="post" id="%1$s" enctype="multipart/form-data" encoding="multipart/form-data">
													<input type="hidden" name="object_id" value="%2$s">
													%3$s
													<p style="width: 40vw; float: left; margin-top: 35px;"><input type="submit" name="submit-cmb" id="submit-cmb-footer" class="button button-primary" value="%4$s" /></p>
													<p style="width: 40vw; float: right; margin-top: 35px; text-align: right;"><button style="color:white" type="reset" data-open="resetSettingsModal" id="reset-cmb-%1$s" name="reset-cmb-%1$s" value="Reset" class="button alert">Reset to Default</button>
													<br/><br/><i>Reset all the settings on this page to their default values.</i></p>
													<div class="reveal" id="resetSettingsModal" data-reveal>
														<p class="reset-confirmation">
															<h5><strong>This will set all the settings on this tab to their default values.</strong></h5>
															<p>Are you sure you want to continue?</p>
															<button style="color:white" name="reset-confirmation-global" id="reset-confirmation-footer" class="button alert" type="reset" value="Reset to Default">Reset to Default</button>
														</p>
														<button class="close-button" data-close aria-label="Close reveal" name="reset-settings-close" type="button">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
												</form>',
                    ));
?>
                </div>
                <div class="tabs-panel" id="layout">
                    <?php
                    cmb2_metabox_form($this->metabox_id . '-layout', $this->key, array(
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
                    ));
?>
                </div>
                <div class="tabs-panel" id="typo">
                    <?php
                    cmb2_metabox_form($this->metabox_id . '-typo', $this->key, array(
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
                    ));
?>
                </div>
                <div class="tabs-panel" id="obj">
                    <?php
                    cmb2_metabox_form($this->metabox_id . '-obj', $this->key, array(
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
                    ));
?>
                </div>
                <div class="tabs-panel" id="advanced">
                    <?php
                    cmb2_metabox_form($this->metabox_id . '-advanced', $this->key, array(
	                    'save_button' => 'Save Settings',
	                    'form_format' => '<form class="cmb-form" method="post" id="%1$s" enctype="multipart/form-data" encoding="multipart/form-data">
                          <input type="hidden" name="object_id" value="%2$s">
                          %3$s
                          <p style="width: 40vw; float: left; margin-top: 35px;"><input type="submit" name="submit-cmb" id="submit-cmb-advanced" class="button button-primary" value="%4$s" /></p>
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
                    ));
?>
                </div>
            </div>
        </div>
                <div style="margin-top: 6rem;" id="footer-container"></div>
        <?php
    }
    /**
     * Add the options metabox to the array of metaboxes
     *
     * @since  1.0.0
     */
    function add_options_page_metabox() {
        // hook in our save notices
        add_action("cmb2_save_options-page_fields_{$this->metabox_id}", array( $this, 'settings_notices' ), 10, 2);
        $cmb = new_cmb2_box(array(
	        'id'         => $this->metabox_id,
	        'hookup'     => false,
	        'cmb_styles' => false,
	        'show_on'    => array(
                // These are important, don't remove
		        'key'   => 'options-page',
		        'value' => array( $this->key ),
            ),
        ));
        twp_add_global_settings( $cmb, 'twp' );
        array_push($this->option_names, $cmb);
    }

    /**
     * Add the options metabox to the array of metaboxes
     *
     * @since  1.0.0
     */
    function add_options_page_nav_metabox() {
			// hook in our save notices
			add_action("cmb2_save_options-page_fields_{$this->metabox_id}" . '-nav', array( $this, 'settings_notices' ), 10, 2);
			$cmb = new_cmb2_box(array(
				'id'         => $this->metabox_id . '-nav',
				'hookup'     => false,
				'cmb_styles' => false,
				'show_on'    => array(
							// These are important, don't remove
					'key'   => 'options-page',
					'value' => array( $this->key . '-nav' ),
				),
			));
			twp_add_nav_settings( $cmb, 'twp' );
			array_push($this->option_names, $cmb);
    }

    /**
     * Add the options metabox to the array of metaboxes
     *
     * @since  1.0.0
     */
    function add_options_page_footer_metabox() {
      // hook in our save notices
      add_action("cmb2_save_options-page_fields_{$this->metabox_id}" . '-footer', array( $this, 'settings_notices' ), 10, 2);
      $cmb = new_cmb2_box(array(
	      'id'         => $this->metabox_id . '-footer',
	      'hookup'     => false,
	      'cmb_styles' => false,
	      'show_on'    => array(
              // These are important, don't remove
		      'key'   => 'options-page',
		      'value' => array( $this->key . '-footer' ),
          ),
      ));
      twp_add_footer_settings( $cmb, 'twp' );
      array_push($this->option_names, $cmb);
    }

    /**
     * Add the options metabox to the array of metaboxes
     *
     * @since  1.0.0
     */
    function add_options_page_layout_metabox() {
      // hook in our save notices
      add_action("cmb2_save_options-page_fields_{$this->metabox_id}" . '-layout', array( $this, 'settings_notices' ), 10, 2);
      $cmb = new_cmb2_box(array(
	      'id'         => $this->metabox_id . '-layout',
	      'hookup'     => false,
	      'cmb_styles' => false,
	      'show_on'    => array(
              // These are important, don't remove
		      'key'   => 'options-page',
		      'value' => array( $this->key . '-layout' ),
          ),
      ));
      twp_add_layout_settings( $cmb, 'twp' );
			array_push($this->option_names, $cmb);

      $cmb2 = new_cmb2_box( array(
	      'id'           => 'twp' . '-layout-edit',
	      'title'              => 'TacticalWP Page Overrides',
	      'hookup'       => true,
	      'save_fields'  => true,
	      'object_types' => array( 'page' ),
	      'context'      => 'normal',
	      'priority'     => 'high',
	      'show_names'   => true,
      ) );

      twp_add_layout_edit_settings( $cmb2, 'twp' );

    }

    /**
     * Add the options metabox to the array of metaboxes
     *
     * @since  1.0.0
     */
    function add_options_page_typo_metabox() {
        // hook in our save notices
        add_action("cmb2_save_options-page_fields_{$this->metabox_id}" . '-typo', array( $this, 'settings_notices' ), 10, 2);
        $cmb = new_cmb2_box(array(
	        'id'         => $this->metabox_id . '-typo',
	        'hookup'     => false,
	        'cmb_styles' => false,
	        'show_on'    => array(
                // These are important, don't remove
		        'key'   => 'options-page',
		        'value' => array( $this->key . '-typo' ),
            ),
        ));
				twp_add_typo_settings( $cmb, 'twp' );
        array_push($this->option_names, $cmb);
    }

    /**
     * Add the options metabox to the array of metaboxes
     *
     * @since  1.0.0
     */
    function add_options_page_obj_metabox() {
        // hook in our save notices
				add_action("cmb2_save_options-page_fields_{$this->metabox_id}" . '-obj', array( $this, 'settings_notices' ), 10, 2);
				$cmb = new_cmb2_box(array(
					'id'         => $this->metabox_id . '-obj',
					'hookup'     => false,
					'cmb_styles' => false,
					'show_on'    => array(
								// These are important, don't remove
						'key'   => 'options-page',
						'value' => array( $this->key . '-obj' ),
					),
				));
				twp_add_obj_settings( $cmb, 'twp' );
        array_push($this->option_names, $cmb);
    }

    /**
     * Add the options metabox to the array of metaboxes
     *
     * @since  1.0.0
     */
    function add_options_page_advanced_metabox() {
        // hook in our save notices
				add_action("cmb2_save_options-page_fields_{$this->metabox_id}" . '-advanced', array( $this, 'settings_notices' ), 10, 2);
				$cmb = new_cmb2_box(array(
					'id'         => $this->metabox_id . '-advanced',
					'hookup'     => false,
					'cmb_styles' => false,
					'show_on'    => array(
								// These are important, don't remove
						'key'   => 'options-page',
						'value' => array( $this->key . '-advanced' ),
					),
				));
				twp_add_advanced_settings( $cmb, 'twp' );
        array_push($this->option_names, $cmb);
    }

    /**
     * Register settings notices for display
     *
     * @since  1.0.0
     * @param  int   $object_id Option key.
     * @param  array $updated   Array of updated fields.
     * @return void
     */
    public function settings_notices( $object_id, $updated ) {
        if ($object_id !== $this->key || empty($updated) ) {
            return;
        }
        add_settings_error($this->key . '-notices', '', __('Settings updated.', 'twp'), 'updated');
        settings_errors($this->key . '-notices');
    }
    /**
     * Public getter method for retrieving protected/private variables
     *
     * @since  1.0.0
     * @param  string $field  Field to retrieve.
     * @return mixed          Field value or exception is thrown.
     * @throws Exception      Exception thrown when supplied field is invalid.
     */
    public function __get( $field ) {
        // Allowed fields to retrieve
        if (in_array($field, array( 'key', 'metabox_id', 'title', 'options_page' ), true) ) {
            return $this->{$field};
        }
        throw new Exception('Invalid property: ' . $field);
    }
}

/**
 * Helper function to get/return the TacticalWP_Settings object
 *
 * @since  1.0.0
 * @return TacticalWP_Settings object
 */
function twp_settings() {
    return TWP_Theme_Settings::get_instance();
}

/**
 * Wrapper function around cmb2_get_option
 *
 * @since  1.0.0
 * @param  string $key     Options array key.
 * @param  mixed  $default Optional default value.
 * @return mixed           Option value
 */
function twp_get_option( $key = '', $default = null ) {
    if (function_exists('cmb2_get_option') ) {
        // Use cmb2_get_option as it passes through some key filters.
        return cmb2_get_option(twp_settings()->key, $key, $default);
    }
    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option(twp_settings()->key, $key, $default);
    $val = $default;
    if ('all' === $key ) {
        $val = $opts;
    } elseif (array_key_exists($key, $opts) && false !== $opts[ $key ] ) {
        $val = $opts[ $key ];
    }
    return $val;
}

// Get it started
twp_settings();
