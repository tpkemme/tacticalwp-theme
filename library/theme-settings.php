<?php
/**
 * CMB2 Theme Options
 * @version 0.1.0
 */
 /*
  1. Global
  	-global styles
  	-posts ( card )
  	-pagination
  	-notifications ( callout, tooltip )
  	-thumnails
  2. Navigation
  	-top Bar
  	-title Bar
  	-breadcrumbs
  	-menu
	3. Colors
  4. Layout
  	-Breakpoints1
  	-The Grid
  	-Off Canvas
  5. Typography
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
class SolWP_Settings {
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
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
			self::$instance->hooks();
		}
		return self::$instance;
	}
	/**
	 * Constructor
	 * @since 0.1.0
	 */
	protected function __construct() {
		// Set our title
		$this->title = __( 'SolWP Settings', $this->prefix );
	}
	/**
	 * Initiate our hooks
	 * @since 0.1.0
	 */
	public function hooks() {
		add_action( 'admin_init', array( $this, 'init' ) );
		add_action( 'admin_menu', array( $this, 'add_options_page' ) );
		add_action( 'cmb2_admin_init', array( $this, 'add_options_page_metabox' ) );
		add_action( 'cmb2_admin_init', array( $this, 'add_options_page_nav_metabox' ) );
	}
	/**
	 * Register our setting to WP
	 * @since  0.1.0
	 */
	public function init() {
		register_setting( $this->key, $this->key );
	}
	/**
	 * Add menu options page
	 * @since 0.1.0
	 */
	public function add_options_page() {
		$this->options_page = add_menu_page( __( 'SolWP Theme Settings', $this->prefix ), $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ), 'dashicons-art' );
		// Include CMB CSS in the head to avoid FOUC
		add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
	}
	/**
	 * Admin page markup. Mostly handled by CMB2
	 * @since  0.1.0
	 */
	public function admin_page_display() {
		?>
		<div class="wrap cmb2-options-page <?php echo $this->key; ?>">
			<h3 id="tabs" class="docs-heading" data-magellan-target="tabs"><a href="#tabs"></a><?php echo esc_html( get_admin_page_title() ); ?></h3>
			<br>
			<ul class="tabs" data-tabs id="settings-tabs">
				<li class="tabs-title is-active"><a href="#front" aria-selected="true">Front</a></li>
				<li class="tabs-title"><a href="#header">Header</a></li>
			</ul>

			<div class="tabs-content" data-tabs-content="settings-tabs">
				<div class="tabs-panel is-active" id="front">
					<?php cmb2_metabox_form( $this->metabox_id, $this->key ); ?>
				</div>
				<div class="tabs-panel" id="header">
					<?php cmb2_metabox_form( $this->metabox_id . '-header', $this->key ); ?>
				</div>
			</div>
		</div>
		<?php // this is so all our javascript is happy ?>
		<div id="footer-container"></div>
		<?php
	}
	/**
	 * Add the options metabox to the array of metaboxes
	 * @since  0.1.0
	 */
	function add_options_page_metabox() {
		// hook in our save notices
		add_action( "cmb2_save_options-page_fields_{$this->metabox_id}", array( $this, 'settings_notices' ), 10, 2 );
		$cmb = new_cmb2_box( array(
			'id'         => $this->metabox_id,
			'hookup'     => false,
			'cmb_styles' => false,
			'show_on'    => array(
				// These are important, don't remove
				'key'   => 'options-page',
				'value' => array( $this->key, )
			),
		) );
		$cmb->add_field( array(
			'before_row'  => '<ul class="accordion" data-accordion role="tablist" data-allow-all-closed="true" data-accordion data-multi-expand="true">
													<li class="accordion-item" data-accordion-item>
														<a href="#panel-global-colors" role="tab" class="accordion-title" id="panel-global-colors-heading" aria-controls="panel-global-colors">
															<h5>Global Styles</h5>
														</a>
								    				<div id="panel-global" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-global-heading">',
			'name' => __( 'Font Size', $this->prefix ),
			'desc' => __( 'Global font size and units (default: 100%)', $this->prefix ),
			'id'   => $this->prefix . '_global_font_size',
			'type' => 'text_small',
			'default' => '100%'
		) );
		$cmb->add_field( array(
			'name' => __( 'Site Width', $this->prefix ),
			'desc' => __( 'Global site width and units (default: 1200px)', $this->prefix ),
			'id'   => $this->prefix . '_global_site_width',
			'type' => 'text_small',
			'default' => 'rem-calc(1200)'
		) );
		$cmb->add_field( array(
			'name' => __( 'Line Height', $this->prefix ),
			'desc' => __( 'Global line height (default: 1.5)', $this->prefix ),
			'id'   => $this->prefix . '_global_line_height',
			'type' => 'text_small',
			'default' => '1.5',
			'after_row' => '</div></li>'
		) );
		$cmb->add_field( array(
			'before_row'  => '<li class="accordion-item" data-accordion-item>
													<a href="#panel-global-colors" role="tab" class="accordion-title" id="panel-global-colors-heading" aria-controls="panel-global-colors">
														<h5>Global Color Palette</h5>
													</a>
								    			<div id="panel-global-colors" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel-global-colors-heading">',
			'name'    => __( 'Primary Color', $this->prefix ),
			'desc'    => __( 'The theme\'s primary color in hex (default: #1779ba)', $this->prefix ),
			'id'      => $this->prefix . '_global_primary_color',
			'type'    => 'colorpicker',
			'default' => '#1779ba'
		) );
		$cmb->add_field( array(
			'name'    => __( 'Secondary Color', $this->prefix ),
			'desc'    => __( 'The theme\'s secondary color in hex (default: #767676)', $this->prefix ),
			'id'      => $this->prefix . '_global_secondary_color',
			'type'    => 'colorpicker',
			'default' => '#767676'
		) );
		$cmb->add_field( array(
			'name'    => __( 'Success Color', $this->prefix ),
			'desc'    => __( 'Color for success notifications in hex (default: #3adb76)', $this->prefix ),
			'id'      => $this->prefix . '_global_success_color',
			'type'    => 'colorpicker',
			'default' => '#3adb76'
		) );
		$cmb->add_field( array(
			'name'    => __( 'Warning Color', $this->prefix ),
			'desc'    => __( 'Color for warning notifications in hex (default: #ffae00)', $this->prefix ),
			'id'      => $this->prefix . '_global_warning_color',
			'type'    => 'colorpicker',
			'default' => '#ffae00'
		) );
		$cmb->add_field( array(
			'name'    => __( 'Alert Color', $this->prefix ),
			'desc'    => __( 'Color for alert notifications in hex (default: #cc4b37)', $this->prefix ),
			'id'      => $this->prefix . '_global_alert_color',
			'type'    => 'colorpicker',
			'default' => '#cc4b37',
			'after_row' => '</div></li></ul>'
		) );

	}

	/**
	 * Add the options metabox to the array of metaboxes
	 * @since  0.1.0
	 */
	function add_options_page_nav_metabox() {
		// hook in our save notices
		add_action( "cmb2_save_options-page_fields_{$this->metabox_id}" . "-nav", array( $this, 'settings_notices' ), 10, 2 );
		$cmb = new_cmb2_box( array(
			'id'         => $this->metabox_id . '-nav',
			'hookup'     => false,
			'cmb_styles' => false,
			'show_on'    => array(
				// These are important, don't remove
				'key'   => 'options-page',
				'value' => array( $this->key . "-nav", )
			),
		) );
		// Set our CMB2 fields
		$cmb->add_field( array(
			'name' => __( 'Test Text', $this->prefix ),
			'desc' => __( 'field description (optional)', $this->prefix ),
			'id'   => 'test_text',
			'type' => 'text',
			'default' => 'Default Text'
		) );
		$cmb->add_field( array(
			'name'    => __( 'Test Color Picker', $this->prefix ),
			'desc'    => __( 'field description (optional)', $this->prefix ),
			'id'      => 'test_colorpicker',
			'type'    => 'colorpicker',
			'default' => '#bada55',
		) );
	}

	/**
	 * Register settings notices for display
	 *
	 * @since  0.1.0
	 * @param  int   $object_id Option key
	 * @param  array $updated   Array of updated fields
	 * @return void
	 */
	public function settings_notices( $object_id, $updated ) {
		if ( $object_id !== $this->key || empty( $updated ) ) {
			return;
		}
		add_settings_error( $this->key . '-notices', '', __( 'Settings updated.', $this->prefix ), 'updated' );
		settings_errors( $this->key . '-notices' );
	}
	/**
	 * Public getter method for retrieving protected/private variables
	 * @since  0.1.0
	 * @param  string  $field Field to retrieve
	 * @return mixed          Field value or exception is thrown
	 */
	public function __get( $field ) {
		// Allowed fields to retrieve
		if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
			return $this->{$field};
		}
		throw new Exception( 'Invalid property: ' . $field );
	}
}

/**
 * Helper function to get/return the SolWP_Settings object
 * @since  0.1.0
 * @return SolWP_Settings object
 */
function solwp_settings() {
	return SolWP_Settings::get_instance();
}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function solwp_get_option( $key = '', $default = null ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		// Use cmb2_get_option as it passes through some key filters.
		return cmb2_get_option( solwp_settings()->key, $key, $default );
	}
	// Fallback to get_option if CMB2 is not loaded yet.
	$opts = get_option( solwp_settings()->key, $key, $default );
	$val = $default;
	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}
	return $val;
}
// Get it started
solwp_settings();
