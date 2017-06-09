<?php
/**
 * The template for embedding styles set by theme settings in the header
 *
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.2
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
 */

?>
<style>

/* Font Faces */

<?php
// Only enqueue Google Font families if they're being used
$families = array();
$global_family    = twp_get_option( 'twp_global_font_family' );
$header_family    = twp_get_option( 'twp_typo_header_family' );
$subheader_family = twp_get_option( 'twp_typo_sub_header_family' );
$title_family       = twp_get_option( 'twp_nav_title_font_family' );
$menu_family            = twp_get_option( 'twp_nav_top_item_font_family' );
$code_family            = twp_get_option( 'twp_typo_code_font_family' );
if ( ! in_array($global_family,      $families) ) { array_push( $families , $global_family );
}
if ( ! in_array($header_family,      $families) ) { array_push( $families , $header_family );
}
if ( ! in_array($subheader_family, $families) ) { array_push( $families , $subheader_family );
}
if ( ! in_array($title_family,     $families) ) { array_push( $families , $title_family );
}
if ( ! in_array($menu_family,        $families) ) { array_push( $families , $menu_family );
}
if ( ! in_array($code_family,        $families) ) { array_push( $families , $code_family );
}
foreach ( $families as $family ) {
	$variants = twp_google_fonts_src( $family );
	$variants_string = '';
	foreach ( $variants as $variant ) {
		$variants_string .= $variant . ',';
	}
	$font_url = substr( $family . ':' . $variants_string, 0, -1);
	?>
	@import url('https://fonts.googleapis.com/css?family=<?php echo $font_url; ?>');
	<?php
}

?>


/*
	Global Font Size
	================================
 */
html {
	font-size: <?php twp( 'global_font_size' ) ?>;
}
:focus {
    outline: none;
}
/*
	Global Site Width
	================================
 */
body#tinymce, #footer-container #footer, hr,
#front-hero .hero-section1, #front-hero .hero-section2, .row,
#kitchen-sink, #page, #page-full-width,
#page-sidebar-left, #single-post, .section-divider  {
  max-width: <?php twp( 'global_site_width' ) ?>;
}
@media print, screen and (min-width: 40em) {
	.reveal {
		max-width: <?php twp( 'global_site_width' ) ?>; } }
@media print, screen and (min-width: 40em) {
	.reveal.tiny {
		max-width: <?php twp( 'global_site_width' ) ?>; } }
@media print, screen and (min-width: 40em) {
	.reveal.small {
		max-width: <?php twp( 'global_site_width' ) ?>; } }
@media print, screen and (min-width: 40em) {
	.reveal.large {
		max-width: <?php twp( 'global_site_width' ) ?>; } }

/*
	Global Line Height
	================================
 */
body {
	line-height: <?php twp( 'global_line_height' ) ?>;
}

/*
	Primary Color
	================================
*/
a, .hollow.primary, .button.hollow, .button.hollow:focus{
	color: <?php twp( 'global_primary_color' ) ?>;
}
a:hover, .hollow.primary:hover, .button.hollow:hover {
	color: <?php twp( 'global_light_primary_color' ) ?>;
}
button, .button, .button.primary, button:focus, .button:focus, .button.primary:focus, input[type="button"]  {
	background-color: <?php twp( 'global_primary_color' ) ?>;
}
button:hover, .button:hover, .button.primary:hover, .button.disabled.primary:hover,
.button[disabled].primary:focus, .button.disabled.primary:focus{
	background-color: <?php twp( 'global_light_primary_color' ) ?>;
}
.button.primary, .button.disabled.primary, .button[disabled].primary,
.button-group.primary .button, .label.primary,
.progress.primary .progress-meter {
	background-color: <?php twp( 'global_primary_color' ) ?>;
}
.button.hollow.primary, .button.hollow, .button.hollow:focus, input[type="button"]  {
	border-color: <?php twp( 'global_primary_color' ) ?>;
}
.button.hollow.primary:hover, .button.hollow:hover, input[type="button"]  {
	border-color: <?php twp( 'global_secondary_color' ) ?>;
}
.button.dropdown.hollow.primary::after {
	border-top-color: <?php twp( 'global_primary_color' ) ?>;
}
.badge.primary, .active, input[type="button"] {
	background: <?php twp( 'global_primary_color' ) ?>;
	color: <?php twp( 'global_white_color' ) ?>;
}
.label.primary, .label.primary * {
	background: <?php twp( 'global_primary_color' ) ?>;
	color: <?php twp( 'global_white_color' ) ?>;
	margin-bottom: 0;
}
/*
	Secondary Color
	================================
 */
.hollow.secondary  {
	color: <?php twp( 'global_secondary_color' ) ?>;
}
.secondary, .disabled.secondary, .disabled.secondary:hover,
.disabled.secondary:focus, [disabled].secondary, [disabled].secondary:hover,
[disabled].secondary:focus, .button-group.secondary .button, .label.secondary,
.progress.secondary .progress-meter, .button.secondary:focus {
	background-color: <?php twp( 'global_secondary_color' ) ?>;
}
.hollow.secondary {
	border-color: <?php twp( 'global_secondary_color' ) ?>;
}
.dropdown.hollow.secondary::after {
	border-top-color: <?php twp( 'global_secondary_color' ) ?>;
}
.badge.secondary{
	background: <?php twp( 'global_secondary_color' ) ?>;
	color: <?php twp( 'global_white_color' ) ?> !important;
}
.label.secondary, .label.secondary * {
	background: <?php twp( 'global_secondary_color' ) ?> !important;
	color: <?php twp( 'global_white_color' ) ?> !important;
	margin-bottom: 0;
}
/*
	Success Color
	================================
 */
.hollow.success  {
	color: <?php twp( 'global_success_color' ) ?>;
}
.success, .disabled.success, .disabled.success:hover,
.disabled.success:focus, [disabled].success, [disabled].success:hover,
[disabled].success:focus, .button-group.success , .label.success,
.progress.success .progress-meter {
	background-color: <?php twp( 'global_success_color' ) ?>;
}

.button.success, button.success, .button.success:focus, button.success:focus{
	color: <?php twp( 'global_white_color' ) ?> !important;
  background-color: <?php twp( 'global_success_color' )?>; }
.button.success:hover{
	color: <?php twp( 'global_white_color' ) ?> !important;
	background-color: <?php twp( 'global_success_hover_color' )?>; }

.hollow.success {
	border-color: <?php twp( 'global_success_color' ) ?>;
}
.dropdown.hollow.success::after {
	border-top-color: <?php twp( 'global_success_color' ) ?>;
}
.badge.success{
	background: <?php twp( 'global_success_color' ) ?>;
	color: <?php twp( 'global_white_color' ) ?> !important;
}
.label.success, .label.success * {
	background: <?php twp( 'global_success_color' ) ?> !important;
	color: <?php twp( 'global_white_color' ) ?> !important;
	margin-bottom: 0;
}
/*
	Warning Color
	================================
 */
.hollow.warning  {
	color: <?php twp( 'global_warning_color' ) ?>;
}
.warning, .disabled.warning, .disabled.warning:hover,
.disabled.warning:focus, [disabled].warning, [disabled].warning:hover,
[disabled].warning:focus, .button-group.warning, .label.warning,
.progress.warning .progress-meter {
	background-color: <?php twp( 'global_warning_color' ) ?>;
}
.hollow.warning {
	border-color: <?php twp( 'global_warning_color' ) ?>;
}
.dropdown.hollow.warning::after {
	border-top-color: <?php twp( 'global_warning_color' ) ?>;
}
.badge.warning{
	background: <?php twp( 'global_warning_color' ) ?>;
	color: <?php twp( 'global_white_color' ) ?> !important;
}
.label.warning, .label.warning * {
	background: <?php twp( 'global_warning_color' ) ?> !important;
	color: <?php twp( 'global_white_color' ) ?> !important;
	margin-bottom: 0;
}
/*
	Alert Color
	================================
 */
.hollow.alert, .form-error, .is-invalid-label {
	color: <?php twp( 'global_alert_color' ) ?>; }

input.is-invalid-input::-webkit-input-placeholder, textarea::-webkit-input-placeholder{
	color: <?php twp( 'global_alert_color' ) ?>; }
input.is-invalid-input:-ms-input-placeholder, textarea:-ms-input-placeholder{
	color: <?php twp( 'global_alert_color' ) ?>; }
input.is-invalid-input::placeholder, textarea::placeholder{
	color: <?php twp( 'global_alert_color' ) ?>; }

.alert, .disabled.alert, .disabled.alert:hover,
.disabled.alert:focus, [disabled].alert, [disabled].alert:hover,
[disabled].alert:focus, .label.alert, .button-group.alert,
.progress.alert .progress-meter,
button.button[type="reset"],
.button.alert, .button.alert:focus, button.alert:focus,
button.button[type="reset"]:focus, .alert:focus {
	background-color: <?php twp( 'global_alert_color' ) ?>;
	color: <?php twp( 'global_white_color' ) ?>;  }

.hollow.alert, .is-invalid-input:not(:focus), .callout.alert,
.button.alert {
	border-color: <?php twp( 'global_alert_color' ) ?>; }

.dropdown.hollow.alert::after {
	border-top-color: <?php twp( 'global_alert_color' ) ?>; }

.badge.alert{
	background: <?php twp( 'global_alert_color' ) ?>;
	color: <?php twp( 'global_white_color' ) ?> !important;
}
.label.alert, .label.alert * {
	background: <?php twp( 'global_alert_color' ) ?> !important;
	color: <?php twp( 'global_white_color' ) ?> !important;
	margin-bottom: 0;
}
.button.alert:hover, button.alert:hover, button.button[type="reset"]:hover{
	background-color: <?php twp( 'global_alert_hover_color' ) ?>;
	border-color: <?php twp( 'global_alert_hover_color' ) ?>; }
.button.alert:hover {
	color: <?php twp( 'global_white_color' ) ?>;  }

[type="checkbox"] + label.is-invalid-label[for]:before,
[type="radio"] + label.is-invalid-label[for]:before{
	border: 1px solid <?php twp( 'global_alert_color' ) ?>; }
}
/*
	Global Monochromes
	================================
 */

/*
	Light Gray
	================================
*/
code, .code, .acordion-title, .accordion-content, .card,
.menu.menu-bordered li, .tabs, .tabs-content,
.tabs-content.vertical {
 border: 1px solid <?php twp( 'global_light_gray_color' ) ?>; }
:last-child:not(.is-active) > .accordion-title,
:last-child > .accordion-content:last-child {
 border-bottom: 1px solid <?php twp( 'global_light_gray_color' ) ?>; }

kdb, input:disabled, input[readonly],
textarea:disabled, textarea[readonly], .input-group-label,
select:disabled, .accordion-title:hover, .accordion-title:focus,
.menu.menu-hover li:hover, .slider, .progress, .slider-fill {
 background-color: <?php twp( 'global_light_gray_color' ) ?>; }

.card-divider, .pagination button:hover,
.tabs-title > a:focus, .tabs-title > a[aria-selected='true']  {
 background: <?php twp( 'global_light_gray_color' ) ?>; }
.label, .label.primary, .orbit-caption, label, [type='text'], [type='password'], [type='date'],
[type='datetime'], [type='datetime-local'], [type='month'],
[type='week'], [type='email'], [type='number'], [type='search'],
[type='tel'], [type='time'], [type='url'], [type='color'],
textarea{
	color: <?php twp( 'global_light_gray_color' ) ?>; }

[type='text'], [type='password'], [type='date'], [type='datetime'],
[type='datetime-local'], [type='month'], [type='week'],
[type='email'], [type='number'], [type='search'], [type='tel'],
[type='time'], [type='url'], [type='color'], textarea,
.input-group-label, .fieldset, select,
.is-dropdown-submenu, .reveal{
	border-color: <?php twp( 'global_light_gray_color' ) ?>; }

/*
	Medium Gray
	================================
*/
.orbit-bullets button{
	background-color: <?php twp( 'global_medium_gray_color' ) ?>;
}
.switch-paddle{
	background: <?php twp( 'global_medium_gray_color' ) ?>;
}
h1 small, h2 small, h3 small,
h4 small, h5 small, h6 small,
input::-webkit-input-placeholder, textarea::-webkit-input-placeholder,
input:-ms-input-placeholder, textarea:-ms-input-placeholder,
input::placeholder, textarea::placeholder,
.breadcrumbs li:not(:last-child)::after, .breadcrumbs .disabled,
.pagination .disabled {
	color: <?php twp( 'global_medium_gray_color' ) ?>;
}
hr{
	border-bottom: 1px solid <?php twp( 'global_medium_gray_color' ) ?>;
}
blockquote {
	border-left: 1px solid <?php twp( 'global_medium_gray_color' ) ?>;
}
[type='text'], [type='password'], [type='date'],
[type='datetime'], [type='datetime-local'], [type='month'],
[type='week'], [type='email'], [type='number'],
[type='search'], [type='tel'], [type='time'], [type='url'], [type='color'],
textarea, .input-group-label, .fieldset, select, .dropdown-pane,
.is-dropdown-submenu, .reveal {
	border: 1px solid <?php twp( 'global_medium_gray_color' ) ?>;
}
[type='text']:focus, [type='password']:focus, [type='date']:focus,
[type='datetime']:focus, [type='datetime-local']:focus, [type='month']:focus,
[type='week']:focus, [type='email']:focus, [type='number']:focus,
[type='search']:focus, [type='tel']:focus, [type='time']:focus,
[type='url']:focus, [type='color']:focus, textarea:focus, select:focus {
	-webkit-box-shadow: 0 0 5px <?php twp( 'global_medium_gray_color' ) ?>;
				 box-shadow: 0 0 5px <?php twp( 'global_medium_gray_color' ) ?>;
}
.menu-icon:hover::after {
	background: <?php twp( 'global_medium_gray_color' ) ?>;
	-webkit-box-shadow: 0  7px 0 <?php twp( 'global_medium_gray_color' ) ?>,
										 0 14px 0 <?php twp( 'global_medium_gray_color' ) ?>;
				 box-shadow: 0  7px 0 <?php twp( 'global_medium_gray_color' ) ?>,
				  					 0 14px 0 <?php twp( 'global_medium_gray_color' ) ?>;
}

/*
 Dark Gray
 ================================
*/
blockquote, blockquote p, .subheader, .close-button{
	color: <?php twp( 'global_dark_gray_color' ) ?>;
}
pre, blockquote, [type='text']:focus, [type='password']:focus,
[type='date']:focus, [type='datetime']:focus, [type='datetime-local']:focus,
[type='month']:focus, [type='week']:focus, [type='email']:focus,
[type='number']:focus, [type='search']:focus, [type='tel']:focus,
[type='time']:focus, [type='url']:focus, [type='color']:focus,
textarea:focus, select:focus {
	border: 1px solid <?php twp( 'global_dark_gray_color' ) ?>;
}
.menu-icon.dark:hover::after {
	background: <?php twp( 'global_dark_gray_color' ) ?>;
	-webkit-box-shadow: 0  7px 0 <?php twp( 'global_dark_gray_color' ) ?>,
											 0 14px 0 <?php twp( 'global_dark_gray_color' ) ?>;
				 box-shadow: 0  7px 0 <?php twp( 'global_dark_gray_color' ) ?>,
				 						 0 14px 0 <?php twp( 'global_dark_gray_color' ) ?>;
}
.orbit-bullets button:hover, .orbit-bullets button.is-active{
	background-color: <?php twp( 'global_dark_gray_color' ) ?>;
}
.has-tip {
	border-bottom: <?php twp( 'global_dark_gray_color' ) ?>;
	color: <?php twp( 'typo_body_link_font_color' ) ?>;
}

/*
 Black
 ================================
*/
abbr, body, code, .code, kdb, label, .help-text, .input-group-label, select, .button.success,
.button.success:hover, .button.success:focus, .button.warning, .button.warning:hover, .button.warning:focus,
.button.disabled.success, .button.disabled.success:hover, .button.disabled.success:focus,
.button[disabled].success, .button[disabled].success:hover, .button[disabled].success:focus,
.button.disabled.warning, .button.disabled.warning:hover, .button.disabled.warning:focus,
.button[disabled].warning, .button[disabled].warning:hover, .button[disabled].warning:focus,
.accordion-content, .badge, .badge.success, .badge.warning, .breadcrumbs li, .button-group.success .button,
.button-group.success .button:hover, .button-group.success .button:focus, .button-group.warning .button,
.button-group.warning .button:hover, .button-group.warning .button:focus, .callout, .callout.primary,
.callout.secondary, .callout.success, .callout.warning, .card, .close-button:hover,
.close-button:focus, .label.success, .label.warning, .pagination button, .pagination .ellipsis::after,
table thead, table tfoot, .tabs-content{
	color: <?php twp( 'global_black_color' ) ?>
}
abbr {
	border-bottom: 1px dotted <?php twp( 'global_black_color' ) ?>;
}
.menu-icon.dark::after {
	background: <?php twp( 'global_black_color' ) ?>;
	-webkit-box-shadow: 0  7px 0 <?php twp( 'global_black_color' ) ?>,
										 0 14px 0 <?php twp( 'global_black_color' ) ?>;
				 box-shadow: 0  7px 0 <?php twp( 'global_black_color' ) ?>,
				 						 0 14px 0 <?php twp( 'global_black_color' ) ?>;
}

.tooltip{
	background-color: <?php twp( 'global_black_color' ) ?>;
}
.tooltip.top::before {
	border-color: <?php twp( 'global_black_color' ) ?> transparent transparent;
}
.tooltip.left::before {
	border-color: transparent transparent transparent <?php twp( 'global_black_color' ) ?>;
}
.tooltip.right::before {
	border-color: transparent <?php twp( 'global_black_color' ) ?> transparent transparent;
}

/*
 White
 ================================
*/
body, fieldset legend, .accordion, .card, .is-drilldown-submenu, .is-dropdown-submenu {
	color: <?php twp( 'global_white_color' ) ?>;
}
[type='text']:focus, [type='password']:focus,
[type='date']:focus, [type='datetime']:focus, [type='datetime-local']:focus,
[type='month']:focus, [type='week']:focus, [type='email']:focus,
[type='number']:focus, [type='search']:focus, [type='tel']:focus,
[type='time']:focus, [type='url']:focus, [type='color']:focus,
textarea:focus, select, select:focus, .accordion-content, .dropdown-pane {
	color: <?php twp( 'global_white_color' ) ?>;
}
.button:hover, .button:focus, .button.alert, .button.alert:focus,
.button.alert:hover, .button.primary, .button.primary:hover,
.button.primary:focus, .button.disabled, .button.disabled:hover,
.button.disabled:focus, .button[disabled], .button[disabled]:hover,
.button[disabled]:focus, .button.disabled.primary, .button.disabled.primary:hover,
.button.disabled.primary:focus, .button[disabled].primary, .button[disabled].primary:hover,
.button[disabled].primary:focus, .badge, .badge.primary, .button-group.primary .button,
.button-group.primary .button:hover, .button-group.primary .button:focus,
.menu .active > a {
c	olor: <?php twp( 'global_white_color' ) ?>;
}
.button.dropdown::after {
	border-color: <?php twp( 'global_white_color' ) ?> transparent transparent;
}
.menu-icon::after {
	 background: <?php twp( 'global_white_color' ) ?>;
	 -webkit-box-shadow: 0 7px 0 <?php twp( 'global_white_color' ) ?>, 0 14px 0 <?php twp( 'global_white_color' ) ?>;
	 box-shadow: 0 7px 0 <?php twp( 'global_white_color' ) ?>, 0 14px 0 <?php twp( 'global_white_color' ) ?>;
}

/*
	Global Background
	================================
 */
<?php if ( twp_get_option( 'twp_global_background_type' ) === 'color' ) : ?>
	body, .fieldset legend  {
		background: <?php twp( 'global_background_color' ) ?>;
	}
<?php elseif ( twp_get_option( 'twp_global_background_type' ) === 'image' ) : ?>
	body, .fieldset legend  {
		background-color: <?php twp( 'global_background_color' ) ?>;
		background: url('<?php twp( 'global_background_image' ) ?>');
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
	}
	.dropdown-pane{
		background-color: <?php twp( 'global_background_color' ) ?>;
	}
<?php else : ?>
	body, .fieldset legend  {
		background: <?php twp( 'global_background_color' ) ?>;
	}
	.dropdown-pane{
		background-color: <?php twp( 'global_background_color' ) ?>;
	}
<?php endif; ?>
[type='text'], [type='password'], [type='date'],
[type='datetime'], [type='datetime-local'], [type='month'],
[type='week'], [type='email'], [type='number'], [type='search'],
[type='tel'], [type='time'], [type='url'], [type='color'],
textarea, [type='text']:focus, [type='password']:focus,
[type='date']:focus, [type='datetime']:focus,
[type='datetime-local']:focus, [type='month']:focus,
[type='week']:focus, [type='email']:focus, [type='number']:focus,
[type='search']:focus, [type='tel']:focus, [type='time']:focus,
[type='url']:focus, [type='color']:focus, textarea:focus, select,
select:focus, .accordion-content, .dropdown-pane .dropdown-pane,
fieldset legend, .accordion, .is-drilldown-submenu, .is-dropdown-submenu{
	background-color: <?php twp( 'global_background_color' ) ?>;
}

/*
	Global Font Color
	================================
 */
body, abbr, .accordion-content, .callout,
.callout.primary, .callout.secondary, .callout.success,
.callout.warning, .callout.alert, .card, table thead, table tfoot,
.tabs-content {
	color: <?php twp( 'global_font_color' ) ?>
}

/*
	Global Font family
	================================
 */
body {
	font-family: <?php '"' . twp( 'global_font_family' ) . '"' ?>;
}

/*
Global Margins
================================
*/
.button, .breadcrumbs {
 margin: 0 0 <?php twp( 'global_margin_size' ) ?> 0;
}
.card, .media-object, .pagination, .progress, .switch, table, .thumbnail{
 margin-bottom: <?php twp( 'global_margin_size' ) ?>;
}

/*
Global padding
================================
*/
.card-divider, .card-section, .reveal{
 padding: <?php twp( 'global_padding_size' ) ?>;
}
.media-object-section:first-child{
 padding-right: <?php twp( 'global_padding_size' ) ?>;
}
.media-object-section:last-child:not(:nth-child(2)){
 padding-left: <?php twp( 'global_padding_size' ) ?>;
}
@media screen and (max-width: 39.9375em) {
	.media-object.stack-for-small .media-object-section {
	 	padding-bottom: <?php twp( 'global_padding_size' ) ?>;
	}
}

/*
	Header styles
	================================
 */
h1,h2,h3,h4,h5,h6 {
line-height: <?php twp( 'typo_header_line_height' ) ?>;
margin-bottom: <?php twp( 'typo_header_margin_bottom' ) ?>;
letter-spacing: -0.04rem;
}
h1 {
font-weight: <?php twp( 'typo_header_weight' ) ?>;
<?php $h1 = strval( floatval( twp_get_option( 'twp_typo_h1_size' ) ) / 2.0 );
$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_typo_h1_size' ) ); ?>
font-size: <?php echo $h1 . $units ?>;
color: <?php twp( 'typo_h1_color' ) ?>;
font-family: <?php '"' . twp( 'typo_header_family' ) . '"' ?>;
}
h2 {
font-weight: <?php twp( 'typo_header_weight' ) ?>;
<?php $h2 = strval( floatval( twp_get_option( 'twp_typo_h2_size' ) ) / 2.0 );
$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_typo_h2_size' ) ); ?>
font-size: <?php echo $h2 . $units ?>;
color: <?php twp( 'typo_h2_color' ) ?>;
font-family: <?php '"' . twp( 'typo_header_family' ) . '"' ?>;
}
h3 {
font-weight: <?php twp( 'typo_header_weight' ) ?>;
<?php $h3 = strval( floatval( twp_get_option( 'twp_typo_h3_size' ) ) / 2.0 );
$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_typo_h3_size' ) ); ?>
font-size: <?php echo $h3 . $units ?>;
color: <?php twp( 'typo_h3_color' ) ?>;
font-family: <?php '"' . twp( 'typo_header_family' ) . '"' ?>;
}
h4 {
font-weight: <?php twp( 'typo_sub_header_weight' ) ?>;
<?php $h4 = strval( floatval( twp_get_option( 'twp_typo_h4_size' ) ) / 2.0 );
$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_typo_h4_size' ) ); ?>
font-size: <?php echo $h4 . $units ?>;
color: <?php twp( 'typo_h4_color' ) ?>;
font-family: <?php '"' . twp( 'typo_sub_header_family' ) . '"' ?>;
}
h5 {
font-weight: <?php twp( 'typo_sub_header_weight' ) ?>;
<?php $h5 = strval( floatval( twp_get_option( 'twp_typo_h5_size' ) ) / 2.0 );
$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_typo_h5_size' ) ); ?>
font-size: <?php echo $h5 . $units ?>;
color: <?php twp( 'typo_h5_color' ) ?>;
font-family: <?php '"' . twp( 'typo_sub_header_family' ) . '"' ?>;
}
h6 {
font-weight: <?php twp( 'typo_sub_header_weight' ) ?>;
<?php $h6 = strval( floatval( twp_get_option( 'twp_typo_h6_size' ) ) / 2.0 );
$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_typo_h6_size' ) ); ?>
font-size: <?php echo $h6 . $units ?>;
color: <?php twp( 'typo_h6_color' ) ?>;
font-family: <?php '"' . twp( 'typo_sub_header_family' ) . '"' ?>;
 }
@media print, screen and (min-width: 40em) {
 h1 {
	 <?php
	 		$h1 = strval( floatval( twp_get_option( 'twp_typo_h1_size' ) ) );
			$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_typo_h1_size' ) );
	  ?>
   font-size: <?php echo $h1 . $units ?>;
 }
 h2 {
	 <?php
	 		$h2 = strval( floatval( twp_get_option( 'twp_typo_h2_size' ) ) );
			$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_typo_h2_size' ) );
	  ?>
   font-size: <?php echo $h2 . $units ?>;
 }
 h3 {
	 <?php
	 		$h3 = strval( floatval( twp_get_option( 'twp_typo_h3_size' ) ) );
			$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_typo_h3_size' ) );
	  ?>
   font-size: <?php echo $h3 . $units ?>;
 }
 h4 {
	 <?php
	 		$h4 = strval( floatval( twp_get_option( 'twp_typo_h4_size' ) ) );
			$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_typo_h4_size' ) );
	  ?>
   font-size: <?php echo $h4 . $units ?>;
 }
 h5 {
	 <?php
	 		$h5 = strval( floatval( twp_get_option( 'twp_typo_h5_size' ) ) );
			$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_typo_h5_size' ) );
	  ?>
   font-size: <?php echo $h5 . $units ?>;
 }
 h6 {
	 <?php
	 		$h6 = strval( floatval( twp_get_option( 'twp_typo_h6_size' ) ) );
			$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_typo_h6_size' ) );
	  ?>
   font-size: <?php echo $h6 . $units ?>;
 }
}
.site-header + .container > .row {
    margin-top: 3rem;
}
/* Body Typogrphay */

/* Small Text */
small{
 font-size: <?php twp( 'typo_body_small_size' ) ?>;
 color: <?php twp( 'typo_body_small_color' ) ?>;
}

h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small {
 color: <?php twp( 'typo_body_small_color' ) ?>;
}

/* Paragraph Styles */
p {
 color: <?php twp( 'typo_body_paragraph_color' ) ?>;
 line-height: <?php twp( 'typo_body_paragraph_line_height' ) ?>;
 font-weight: <?php twp( 'typo_body_paragraph_weight' ) ?>;
 margin-bottom: <?php twp( 'typo_body_paragraph_margin_bottom' ) ?>;
}

/* Link Styles */
a {
	color: <?php twp( 'typo_body_link_font_color' ) ?>;
	text-decoration: <?php twp( 'typo_body_link_font_decoration' ) ?>;}
.dropdown.menu > li.is-dropdown-submenu-parent > a::after {
	border-color: <?php twp( 'global_primary_color' ) ?> transparent transparent;}
.dropdown.menu.vertical > li.opens-left > a::after {
	border-color: transparent <?php twp( 'global_primary_color' ) ?> transparent transparent; }
.dropdown.menu.vertical > li.opens-right > a::after {
	border-color: transparent transparent transparent <?php twp( 'global_primary_color' ) ?>; }
.dropdown.menu.medium-horizontal > li.is-dropdown-submenu-parent > a::after {
	border-color: <?php twp( 'global_primary_color' ) ?> transparent transparent; }
@media print, screen and (min-width: 40em) {
	.dropdown.menu.medium-horizontal > li.is-dropdown-submenu-parent > a::after {
		border-color: <?php twp( 'global_primary_color' ) ?> transparent transparent;
		margin-top: -3px; }
	.dropdown.menu.medium-vertical > li.opens-left > a::after {
		border-color: transparent <?php twp( 'global_primary_color' ) ?> transparent transparent; }
	.dropdown.menu.medium-vertical > li.opens-right > a::after {
		border-color: transparent transparent transparent <?php twp( 'global_primary_color' ) ?>; } }
@media print, screen and (min-width: 64em) {
	.dropdown.menu.large-horizontal > li.is-dropdown-submenu-parent > a::after {
		border-color: <?php twp( 'global_primary_color' ) ?> transparent transparent; }
	.dropdown.menu.large-vertical > li.opens-left > a::after {
		border-color: transparent <?php twp( 'global_primary_color' ) ?> transparent transparent; }
	.dropdown.menu.large-vertical > li.opens-right > a::after {
		border-color: transparent transparent transparent <?php twp( 'typo_body_link_font_color' ) ?>; } }
.is-dropdown-submenu-parent.opens-left > a::after {
	border-color: transparent <?php twp( 'global_primary_color' ) ?> transparent transparent; }
.is-dropdown-submenu-parent.opens-right > a::after {
	border-color: transparent transparent transparent <?php twp( 'global_primary_color' ) ?>; }

.dropdown-pane {
    width: auto;
}
a:hover, a:focus {
	color: <?php twp( 'typo_body_link_hover_font_color' ) ?>;
	text-decoration: <?php twp( 'typo_body_link_hover_font_decoration' ) ?>;}

/* Hr styles */
hr {
  max-width: <?php twp( 'typo_body_hr_width' ) ?>;
	margin: <?php twp( 'typo_body_hr_margin' ) ?> auto;
	border-bottom: <?php twp( 'typo_body_hr_thickness' ) ?> <?php twp( 'typo_body_hr_style' ) ?> <?php twp( 'typo_body_hr_color' ) ?>; }

/* Lists */
ul,
ol,
dl {
  line-height: <?php twp( 'typo_list_line_height' ) ?>;
  margin-bottom: <?php twp( 'typo_list_margin_bottom' ) ?>;
	list-style-position: <?php twp( 'typo_list_style_position') ?>; }
ul {
  list-style-type: <?php twp( 'typo_list_style_type' ) ?>;
	margin-left: <?php twp( 'typo_list_margin_left' ) ?>; }

ol {
	margin-left: <?php twp( 'typo_list_margin_left' ) ?>; }

ul ul, ol ul, ul ol, ol ol {
	margin-left: <?php twp( 'typo_list_margin_left' ) ?>;
	margin-bottom: 0; }

/* Code */
code, .code{
	padding: 0.125rem 0.3125rem 0.0625rem;
  border: 1px solid <?php twp( 'typo_code_border_color' ) ?>;
  background-color: <?php twp( 'typo_code_background_color' ) ?>;
  font-family: <?php twp( 'typo_code_font_family' ) ?>;
  font-weight: normal;
}
.code-container {
	overflow: auto;
	display: block;
}
.code {
  display: inline-block;
  white-space: nowrap;
}
.code-wrapper{
	display: inline;
}

/* Menu Settings */
.menu{
	margin: <?php twp( 'nav_menu_margin' ) ?>;
}
.menu > li > a {
	padding: <?php twp( 'nav_menu_padding' ) ?> <?php twp( 'global_padding_size' ) ?>;
}
.is-drilldown-submenu, .is-dropdown-submenu {
  background: <?php twp( 'nav_submenu_background_color' ) ?>;
	border: none;
}
.is-drilldown-submenu-parent > a::after {
  right: 1.5rem;
  border-left-color: <?php twp( 'global_primary_color' ) ?>;
}
.js-drilldown-back > a::before {
  right: 1.5rem;
  border-right-color: <?php twp( 'global_primary_color' ) ?>;
}
.is-accordion-submenu-parent > a::after{
	border-top-color:  <?php twp( 'global_primary_color' ) ?>;
}

.submenu.is-dropdown-submenu{
	white-space: nowrap;
}
/* Breadcrumbs */
  .breadcrumbs li {
    font-size: <?php twp( 'nav_breadcrumb_font_size' ) ?>;
    color: <?php twp( 'nav_breadcrumb_current_color' ) ?>;
		text-transform: <?php twp( 'nav_breadcrumb_font_uppercase' ) ?>; }
    .breadcrumbs li:not(:last-child)::after {
      content: "<?php twp( 'nav_breadcrumb_divider_symbol' ) ?>";
      color: <?php twp( 'nav_breadcrumb_divider_color' ) ?>;
			top: -1px; }
  .breadcrumbs a {
    color: <?php twp( 'nav_breadcrumb_color' ) ?>; }
  .breadcrumbs a:hover {
    color: <?php twp( 'nav_breadcrumb_hover_color' ) ?>; }
  .breadcrumbs .disabled {
    color: #<?php twp( 'global_white_color' ) ?>; }

/* Topbar */
/* TODO: clean this */
.top-bar {
  padding: <?php twp( 'nav_top_padding' ) ?>;
  background: <?php twp( 'nav_top_background_color') ?>;
  box-shadow: 0 2px 5px rgba(0,0,0,.18), 0 4px 10px rgba(0,0,0,.15); 	}
.top-bar ul{
	background: <?php twp( 'nav_top_item_background_color') ?>; }
<?php if ( twp_get_option( 'twp_nav_top_title_shadow') === 'show' ) : ?>
	.top-bar ul.title-bar-title li a{
		box-shadow: 0px 0px 4px 0px rgba(0,0,0,.18), 1px 0px 8px 0px rgba(0,0,0,.15);
	 	position: relative;
		z-index: 999;
		transition: .2s ease-in-out;}
	.top-bar ul.title-bar-title li a:hover{
		box-shadow: 0 0 6px 0px rgba(0,0,0,.18), 1px 0px 12px 0px rgba(0,0,0,.15);
	 	position: relative;
		z-index: 999;
		transform: rotate3d(0%, 50%, 100%, 20deg); }
<?php endif; ?>
.top-bar ul li{
	border-right: none !important; }
.top-bar .top-bar-left + .menu:not(.submenu) li:hover,
.top-bar .top-bar-left + .menu:not(.submenu) li a:not(.button):hover,
.top-bar .top-bar-right:not(.top-bar-search) + .menu:not(.submenu) li:hover,
.top-bar .top-bar-right:not(.top-bar-search) + .menu:not(.submenu) li a:not(.button):hover,
.top-bar .menu a:hover:not(.button){
	background: <?php twp( 'nav_top_item_hover_background_color') ?>;
	position: relative;
	z-index: 1; }
.top-bar ul > li.current-menu-item > a{
	border-bottom: .2rem solid <?php twp( 'global_white_color') ?>;
	padding-bottom: .8rem; }
.top-bar ul.submenu li.current-menu-item a{
	border-right: .2rem solid <?php twp( 'global_white_color') ?>;
	border-bottom: none !important;
	padding-bottom: <?php twp( 'global_padding_size' ) ?>; }
.top-bar .menu .active > a{
	background: <?php twp( 'nav_top_item_background_color') ?>; }
.top-bar ul ul.submenu {
  background-color: <?php twp( 'nav_top_submenu_background_color') ?>;
	box-shadow: 0 4px 6px -2px rgba(0,0,0,0.16), 0 3px 4px -1px rgba(0,0,0,0.23); }
.top-bar ul ul li{
  background-color: <?php twp( 'nav_top_submenu_background_color') ?>; }
.top-bar ul li a{
  color: <?php twp( 'nav_top_item_font_color' ) ?>;
}
.top-bar ul li a:hover{
  color: <?php twp( 'nav_top_item_hover_font_color' ) ?>;;
}
.top-bar ul ul li a{
  color: <?php twp( 'nav_top_submenu_font_color' ) ?>;
	background-color: <?php twp( 'nav_top_submenu_background_color') ?>;
}
.top-bar ul ul li a:hover{
	background-color: <?php twp( 'nav_top_submenu_hover_background_color') ?>;
  color: <?php twp( 'nav_top_submenu_hover_font_color' ) ?>;;
}
.top-bar .menu > li:not(.menu-text) > a {
  padding: 1rem;
	font-weight: 400;
}

.top-bar .top-bar-right:not(.top-bar-search) button:hover,
.top-bar .top-bar-right:not(.top-bar-search) .button:hover,
.top-bar .top-bar-right:not(.top-bar-search) .btn:hover{
	box-shadow: 0 4px 8px 0 rgba(0,0,0,.28), 0 8px 16px 0 rgba(0,0,0,.25);
	transform: translate(0px, -1px) scale(1.01); }
.top-bar .top-bar-right.top-bar-search button:hover,
.top-bar .top-bar-right.top-bar-search .button:hover,
.top-bar .top-bar-right.top-bar-search .btn:hover{
	box-shadow: 0 4px 8px 0 rgba(0,0,0,.28), 0 8px 16px 0 rgba(0,0,0,.25);
	transform: scale(1.01); }
.top-bar .top-bar-search input {
  max-width: 200px;
  <?php $p_top = strval( floatval( twp_get_option( 'twp_nav_top_padding' ) ) + .75 ); ?>
  <?php $units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_nav_top_padding' ) ); ?>
  padding:   <?php echo $p_top . $units ?> <?php twp( 'global_padding_size' ) ?> <?php echo $p_top . $units ?>;
	top: -1px;
	position: relative;
	border-top-right-radius: 0px;
	border-bottom-right-radius: 0px;
  border-right-width: 0; }
.top-bar-right{
  padding-left: .5rem;
}
.top-bar-right.top-bar-search {
  position: relative;
  top: 4px; }
.top-bar-right.top-bar-search button{
  position: relative;
  top: -1px; }
.top-bar .top-bar-search button{
	border-top-left-radius: 0px;
	border-bottom-left-radius: 0px;
	margin-left: -25px;
	<?php $p_top = strval( floatval( twp_get_option( 'twp_nav_top_padding' ) ) + .725 ); ?>
  <?php $units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_nav_top_padding' ) ); ?>
  padding:   <?php echo $p_top . $units ?> <?php twp( 'global_padding_size' ) ?> <?php echo $p_top . $units ?>;  }

.top-bar .menu:not(.submenu) > li:not(.menu-text):last-child > a {
    background: <?php twp( 'global_primary_color' ) ?>;
    box-shadow: 0 1px 3px rgba(0,0,0,0.16), 0 1px 3px rgba(0,0,0,0.23);
    transition:  0.2s ease-in-out;
    transition:  0.2s ease-in-out;
    -webkit-font-smoothing: subpixel-antialiased; }
.top-bar .menu:not(.submenu) > li:not(.menu-text):last-child > a:hover {
    background: <?php twp( 'global_secondary_color' ) ?>;
    box-shadow: 0 3px 6px rgba(0,0,0,0.19), 0 3px 6px rgba(0,0,0,0.23);
    transform: translate(0px, -1px) scale(1.01); }

/* sticky topbar */
<?php if ( twp_get_option( 'twp_nav_top_sticky' ) === 'sticky' ) : ?>
.site-header {
  position: fixed;
  top: 0px;
  width: 100vw;
  z-index: 888;
}
.admin-bar .site-header{
	top: 32px;
}
.site-header + .container {
  padding-top: 45px;
}
.admin-bar .site-header + .container {
	<?php $p_top = strval( ( floatval( twp_get_option( 'twp_nav_top_padding' ) ) + 1 ) * 2.0 ); ?>
	<?php $units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', twp_get_option( 'twp_nav_top_padding' ) ); ?>
	padding-top: <?php echo $p_top . $units ?>;
}
@media screen and (max-width: 782px){
	.admin-bar .site-header {
	  position: fixed;
	  top: 46px;
	  width: 100vw;
	}
	.site-header + .container {
    padding-top: 46px;
	}
}
body.elementor-editor-active .site-header {
    top: 0px;
}
<?php endif; ?>

.sticky-sidebar-container {
    position: fixed;
    right: 0;
    width: 33.3%;
    overflow: scroll;
    height: 76vh;
}

aside.sidebar.sticky-sidebar {
    width: 100%;
}
.top-bar ul.submenu li a {
    padding: 0rem !important;
    height: inherit;
}
.top-bar ul.submenu li {
    padding: 1rem !important;
    padding-right: 0rem !important;
}
/* search */
.top-bar .top-bar-search button {
  background-color: <?php twp( 'nav_top_search_button_color' ) ?>;
  color: <?php twp( 'nav_top_search_button_text_color' ) ?>; }
.top-bar .top-bar-search button:hover {
  background-color: <?php twp( 'nav_top_search_button_hover_color' ) ?>;
	color: <?php twp( 'nav_top_search_button_text_hover_color' ) ?>; }
.top-bar .top-bar-search input:focus{
	border: none; }

.top-bar .top-bar-search button{
	margin-right: <?php twp( 'global_margin_size' ) ?>; }
.top-bar .top-bar-search .menu{
  background: none !important;
}
.top-bar-right.top-bar-search {
    margin-left: 10px;
}
.top-bar ul li a,
.top-bar .menu a{
  color: <?php twp( 'nav_top_item_font_color' ) ?>;
  font-family: <?php twp( 'nav_top_item_font_family' ) ?>;
  font-size: <?php twp( 'nav_top_item_font_size' ) ?>; }
.top-bar .menu.desktop-menu {
  display: inline-flex; }

/* Title bar */
.top-bar ul.title-bar-title li {
	padding: 0; }
.top-bar ul.title-bar-title li a {
	height: auto;
	color: <?php twp( 'nav_title_font_color' ) ?>	;
	font-size: <?php twp( 'nav_title_font_size' ) ?>;
	padding:  <?php twp( 'global_padding_size' ) ?>;
	font-family: <?php twp( 'nav_title_font_family' ) ?>;
	line-height: .5; }
.top-bar .title-bar-title {
	box-shadow: none;
  float:left }


/* Logo */
.menu > li > a img.site-logo {
  width: 42px;
  display: inline-block;
  position: relative;
  margin: 0;
  margin-top: -18px;
  margin-bottom: -15px;
 }

/* Footer styles */
#footer-container{
	background-color: <?php twp( 'footer_background_color' ) ?>;
	border: none;
	color: <?php twp( 'footer_font_color' ) ?>;
  position: relative;
}

#footer-container p {
    color: <?php twp( 'footer_font_color' ) ?>;
}

#footer-container a {
    color: <?php twp( 'footer_link_font_color' ) ?>;
}

#footer-container a:hover {
    color: <?php twp( 'footer_link_hover_font_color' ) ?>;
}
<?php if ( twp_get_option( 'twp_footer_sticky') === 'sticky' ) : ?>
#footer-container{
	position: fixed;
	bottom: 0rem;
	z-index: 9999999;
}
<?php endif; ?>
/* Color picker */
.mce-container .wp-picker-container { display: block; margin: 0px; }
.mce-container .wp-picker-input-wrap input.mce-colorpicker {
		width: 65px !important;
		position: static !important;
		float: left;
		margin: 0;
		line-height: 1;
}
.mce-container .wp-color-result {
		background-color: #f7f7f7;
		border: 1px solid #ccc;
		border-radius: 3px;
		box-shadow: 0 1px 0 #ccc;
		cursor: pointer;
		display: block;
		height: 22px;
		margin: 0 6px 6px 0;
		padding-left: 30px;
		position: relative;
		top: 1px;
		float: right;
		vertical-align: bottom;
}
.wp-picker-open+.wp-picker-input-wrap {
		float: right;
		margin-right: 16px;
}
.wp-picker-container.wp-picker-active .wp-picker-holder {
		background: white;
		position: relative;
		z-index: 9;
		border: 1px solid #a8a8a8;
		padding: 1rem;
		float: right;
		right: -30px;
}
.mce-container .wp-picker-container{
	float: right;
}

/* Object Defaults */
/* Accordions */
.accordion{
	box-shadow: 0 1px 3px rgba(0,0,0,0.16), 0 1px 3px rgba(0,0,0,0.23);
	border: none;
}
.accordion-title::before{
  font-size: 20px;
}
.accordion .accordion-item{
	border: none;
	transition: all 0.2s ease-in-out;
}
.accordion .accordion-item:focus{
	outline: none;
}

.accordion .accordion-content{
	border: none;
	padding: 1.5rem;
}

.accordion .accordion-title
{
	color: <?php twp( 'obj_accord_font_color' ) ?>;
	background-color: <?php twp( 'obj_accord_inactive_color' ) ?>;
	border: none;
}
.accordion .accordion-title:focus
{
	color: <?php twp( 'obj_accord_font_color' ) ?>;
	background-color: <?php twp( 'obj_accord_inactive_color' ) ?>;
	border: none;
	outline: none;
	box-shadow: none;
}
.accordion .accordion-title h1,
.accordion .accordion-title h2,
.accordion .accordion-title h3,
.accordion .accordion-title h4,
.accordion .accordion-title h5,
.accordion .accordion-title h6,
.accordion .accordion-title p,
.accordion .accordion-title a{
	color: <?php twp( 'obj_accord_font_color' ) ?>;
	margin: 0;
}
.accordion .accordion-title:hover{
	color: <?php twp( 'obj_accord_font_color' ) ?>;
	background-color: <?php twp( 'obj_accord_hover_color' ) ?>;
}
.accordion .accordion-item.is-active .accordion-title{
	color: <?php twp( 'obj_accord_font_color' ) ?>;
	background-color: <?php twp( 'obj_accord_active_color' ) ?>;
}
:last-child:not(.is-active) > .accordion-title, :last-child > .accordion-content:last-child{
	border: none;
}

/* badges */
.badge {
  position: relative;
  top: -3px;
}

/* buttons */
button, .button{
	border: none;
  text-transform: uppercase !important;
}
/* Box Shadows? */
.card, button, .button, .btn, section.container button,
section.container .button, section.container.btn{
	box-shadow: 0 1px 3px rgba(0,0,0,0.16), 0 1px 3px rgba(0,0,0,0.23);
	transition:  0.2s ease-in-out;
  transition:  0.2s ease-in-out;
  -webkit-font-smoothing: subpixel-antialiased; }
.card:hover, section.container button:hover,
section.container .button:hover, section.container.btn:hover{
	box-shadow: 0 3px 6px rgba(0,0,0,0.19), 0 3px 6px rgba(0,0,0,0.23);
	transform: translate(0px, -1px) scale(1.01); }

/* Callouts */
.callout{
	box-shadow: 0 1px 3px rgba(0,0,0,0.16), 0 1px 3px rgba(0,0,0,0.23);
	border: none;
}

/* Card Styles */
.card {
  border: none;
  border-radius: 15px; }
.card-divider, .pagination button:hover {
  background: <?php twp( 'global_secondary_color' )?>;
  border: none; }
.card {
  color: <?php twp( 'global_black_color' )?>;
  background-color: <?php twp( 'global_white_color' )?>; }
.card .card-content{
  padding: 1rem; }
.card .card-divider p{
	color: <?php twp( 'global_white_color' )?>;
}
.card-content h4 {
  text-transform: uppercase;
  font-weight: 700;
  font-size: 150%;
}
.card p img {
    margin-bottom: -20px;
}
/* Close Button */
button.close-button {
	position: absolute;
  padding: .3rem .7rem;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.close-button span {
  top: -2px;
  position: relative;
	color: white;
}

/* Cubes */
div[class^="twp-cube-container"]{
	-webkit-perspective: 700px;
	margin: auto;
	z-index: 999;
}
.twp-cube{
	position: relative;
	text-align:center;
  transition: all 0.4s ease-in-out;
  -webkit-font-smoothing: subpixel-antialiased;
  margin: 0 auto;
  transform-style: preserve-3d;
	-webkit-transform-style: preserve-3d;
}

.twp-cube-front, .twp-cube-back {
	padding: 0 .5rem 0 .5rem;
	position: absolute;
	width: 100%;
	height: 100%;
	-webkit-backface-visibility: visible;
	-webkit-transform-origin: 0 0;
  box-shadow: 0 0px 16px rgba(0,0,0,0.16), 0 0px 16px rgba(0,0,0,0.23);
}

/* Cube Left */
.twp-cube-container-left .twp-cube-front {
	transform: rotateY(0deg);
	-webkit-transform: rotateY(0deg);
	z-index: 2;
}
.twp-cube-container-left .twp-cube-back {
	transform: rotateY(90deg);
	z-index: 1;
	left: 100%;
}
.twp-cube-container-left:hover .twp-cube {
	transform: rotateY(-90deg);
	-webkit-transform: rotateY(-90deg);
}

/* Cube Right */
.twp-cube-container-right .twp-cube-front {
	transform: rotateX(0deg) rotateY(0deg);
	-webkit-transform: rotateY(0deg);
	z-index: 2;
}
.twp-cube-container-right .twp-cube-back {
	transform: rotateY(270deg);
	transform-origin: top right;
	z-index: 1;
	right: 100%;
}
.twp-cube-container-right:hover .twp-cube {
	transform: rotateX(0deg) rotateY(90deg);
	-webkit-transform: rotateY(90deg);
}
/* Cube Up */
.twp-cube-container-top .twp-cube-front {
	transform: rotateY(0deg) rotateX(0deg);
	-webkit-transform: rotateY(0deg) rotateX(0deg);
	z-index: 2;
}
.twp-cube-container-top .twp-cube-back {
	transform: rotateY(0deg) rotateX(-90deg);
	z-index: 1;
	top: 100%;
}
.twp-cube-container-top:hover .twp-cube {
	transform: rotateY(0deg) rotateX(90deg);
	-webkit-transform: rotateY(0deg) rotateX(90deg);
}

/* Cube bottom */
.twp-cube-container-bottom .twp-cube-front {
	transform: rotateX(0deg) rotateY(0deg);
	-webkit-transform: rotateX(0deg) rotateY(0deg);
	z-index: 2;
}
.twp-cube-container-bottom .twp-cube-back {
  transform: rotateX(90deg);
  transform-origin: bottom center;
  z-index: 1;
  bottom: 100%;
}
.twp-cube-container-bottom:hover .twp-cube {
	transform: rotateX(-90deg) rotateY(0deg);
	-webkit-transform: rotateX(-90deg) rotateY(0deg);
}

/*div[class^="twp-cube-container"]{
	content: '';
  display: block;
  height: 100%;
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
	box-shadow: 0 12px 24px rgba(0,0,0,0.12), 0 12px 24px rgba(0,0,0,0.24);
	z-index: 999;
}*/
/* Drop downs menus */
.submenu.is-dropdown-submenu{
	box-shadow: 0 1px 3px rgba(0,0,0,0.16), 0 1px 3px rgba(0,0,0,0.23);
}
.dropdown.menu > li .is-dropdown-submenu {padding: 10px 25px 10px 10px;}

.dropdown.menu li {list-style-type: none;}
.is-dropdown-submenu .is-dropdown-submenu-parent.opens-right > a::after {
    right: 0px;
}
/* Dropdown pane */
button.dropdown-pane{
	border: none;
	position: relative;
	z-index: 0;
}
div.dropdown-pane.is-open{
	border: none;
	z-index: 0;
	box-shadow: 0 1px 3px rgba(0,0,0,0.16), 0 1px 3px rgba(0,0,0,0.23);
	border: none;
	color: <?php twp( 'typo_body_paragraph_color') ?>;
}
#mobile-menu .submenu {
    margin-left: 0px;
    padding-left: 1rem;
}
#mobile-menu > .menu {
    display: none;
    transition: .2s ease-in-out;
}
/* Forms */
[type='text'], [type='password'], [type='date'],
[type='datetime'], [type='datetime-local'], [type='month'],
[type='week'], [type='email'], [type='number'],
[type='tel'], [type='time'], [type='url'],
[type='color'], textarea.fieldset, select, .input-group-label, textarea{
    padding: 7px 30px 5px 10px;
}
[type='text'], [type='password'], [type='date'],
[type='datetime'], [type='datetime-local'], [type='month'],
[type='week'], [type='email'], [type='number'], [type='search'],
[type='tel'], [type='time'], [type='url'],
[type='color'], textarea.fieldset, select, .input-group-label, textarea{
	background-color: <?php twp( 'obj_form_background_color' ) ?>;
	border-color: <?php twp( 'obj_form_border_color' ) ?>;
	padding: 8px 30px 8px 10px;
	color: <?php twp( 'obj_form_input_color' ) ?>;
}
[type='text']:focus, [type='password']:focus, [type='date']:focus,
[type='datetime']:focus, [type='datetime-local']:focus, [type='month']:focus,
[type='week']:focus, [type='email']:focus, [type='number']:focus, [type='search']:focus,
[type='tel']:focus, [type='time']:focus, [type='url']:focus, textarea:focus,
[type='color']:focus, textarea.fieldset:focus, select:focus, .is-invalid-input:not(:focus){
	background-color: <?php twp( 'obj_form_background_color' ) ?>;
	color: <?php twp( 'obj_form_input_focus_color' ) ?>;
}
.help-text, .input-group-label{
	color: <?php twp( 'obj_form_helptext_color' ) ?>;
	font-size: <?php twp( 'obj_form_helptext_font_size' ) ?>;
}
label, fieldset legend{
	color: <?php twp( 'obj_form_label_color' ) ?>;
	font-weight: 700;
	font-size: <?php twp( 'obj_form_label_font_size' ) ?>;
}
input::-webkit-input-placeholder, textarea::-webkit-input-placeholder{
	color: <?php twp( 'obj_form_placeholder_color' ) ?>; }
input:-ms-input-placeholder, textarea:-ms-input-placeholder{
	color: <?php twp( 'obj_form_placeholder_color' ) ?>; }
input::placeholder, textarea::placeholder{
	color: <?php twp( 'obj_form_placeholder_color' ) ?>; }

[type="checkbox"]:not(.switch-input), [type="radio"] {
  display: none !important;
}

[type="checkbox"]:not(.switch-input) + label,
[type="radio"] + label{
  position: relative;
  display: inline-block;
  cursor: pointer;
  position: relative;
  padding-left: 25px;
  margin-right: <?php twp( 'global_margin_size' ) ?>;
  margin-bottom: <?php twp( 'global_margin_size' ) ?>;
  line-height: 1.0625rem; }

[type="checkbox"]:not(.switch-input) + label[for]:before,
[type="radio"] + label[for]:before{
  content: "";
  display: inline-block;
  width: <?php twp( 'global_margin_size' ) ?>;
  height: <?php twp( 'global_margin_size' ) ?>;
  margin-right: <?php twp( 'global_margin_size' ) ?>;
  position: absolute;
  left: 0;
  bottom: 1px;
  background-color: <?php twp( 'obj_form_background_color' ) ?>;
	border: 1px solid <?php twp( 'obj_form_border_color' ) ?>; }

[type="radio"] + label[for]:before{
  border-radius: 8px; }

[type="checkbox"] + label[for]:before{
  border-radius: 0px; }

input[type=radio]:checked + label:before {
	content: "";
	background-color: <?php twp( 'obj_form_border_color' ) ?>;
	font-size: 30px;
	text-align: center;
	line-height: <?php twp( 'global_padding_size' ) ?>; }

input[type=checkbox]:not(.switch-input):checked + label:before {
  content: "\2713";
  font-size: 15px;
  color: <?php twp( 'obj_form_border_color' ) ?>;
  text-align: center;
  line-height: <?php twp( 'global_padding_size' ) ?>; }

.input-group-label:first-child {
  border-right: 0;
  padding: 8px <?php twp( 'global_padding_size' ) ?>;}

.dropdown.menu > li.is-dropdown-submenu-parent > a::after{
	display: none; }


/* Grids */
.row.display{
	box-shadow: 0 1px 3px rgba(0,0,0,0.16), 0 1px 3px rgba(0,0,0,0.23);
	border: none !important;
}

/* Media object */

/* Orbit/Testimonials */
button.orbit-previous:hover, button.orbit-next:hover {
  transform: translateY(-60%) scale(1.01) !important;
	background-color: <?php twp( 'global_secondary_color') ?>;
}
.orbit-slide.is-active {
    padding: 0 70px;
}

.orbit-container{
    height: 100%;
}
.orbit-bullets button.is-active {
	background-color: <?php twp( 'global_secondary_color') ?>;
}
.orbit-rating{
	width: 50px;
	height: 50px;
	margin-bottom: 1rem;
}
.orbit-bullets button {
	background-color: <?php twp( 'global_gray_color') ?>;
}
/* Pagination */
.pagination .current{
	background-color: <?php twp( 'global_primary_color') ?>;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

/* Progress */
.progress {
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	height: 1.5rem;
}

/* Reveal/ Modals */
.reveal {
  padding: 1.5rem;
	border: none;
	box-shadow: 0 10px 20px rgba(0,0,0,0.12), 0 10px 20px rgba(0,0,0,0.24);
}
.reveal:focus{
	outline: none;
}
.reveal button.close-button {
  top: .5rem;
  right: .5rem;
	box-shadow: 0 1px 3px rgba(0,0,0,0.16), 0 1px 3px rgba(0,0,0,0.23);
	transition: all 0.2s ease-in-out; }

.reveal button.close-button:hover{
	box-shadow: 0 3px 6px rgba(0,0,0,0.19), 0 3px 6px rgba(0,0,0,0.23);
	transform: translate(0px, -1px) scale(1.01); }

.admin-bar .reveal.full {
  top: 32px !important;
}
@media screen and (max-width: 781px){
	.admin-bar .reveal.full {
	  top: 46px !important;
	}
}

/* slider */
.slider-handle{
	background-color: <?php twp( 'global_primary_color') ?>;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.slider.vertical .slider-handle{
	box-shadow: 0 -1px 3px rgba(0,0,0,0.12), 0 -1px 2px rgba(0,0,0,0.24);
}

.slider-handle:focus{
	outline: none;
}

.slider-handle:hover{
	background-color: <?php twp( 'global_secondary_color') ?>;
}

/* Switches */
.switch-paddle{
	background-color: <?php twp( 'global_light_gray_color') ?>;
}
input:checked ~ .switch-paddle{
	background-color: <?php twp( 'global_primary_color') ?>;
}
.switch-paddle:after{
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.slider.vertical {
    transform: scale(1, -1) rotateX(180deg);
}
/* Tabs */
.tabs{
	border: none;
	background: transparent;
	display: inline-block;
	margin-bottom: -7px;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 3px rgba(0,0,0,0.24);
}
.tabs-content{
	box-shadow: 0 3px 6px rgba(0,0,0,0.12), 0 3px 6px rgba(0,0,0,0.24);
	border: none;
	position: relative;
	z-index: 0;
}
.tabs-title > a{
	color: <?php twp( 'obj_tab_font_color') ?>;
	background-color: <?php twp( 'obj_tab_inactive_color') ?>; }
.tabs-title > a[aria-selected="true"]{
	color: <?php twp( 'obj_tab_font_color' ) ?>;
	background-color: <?php twp( 'obj_tab_active_color' ) ?>;
	box-shadow: 0 3px 6px rgba(0,0,0,0.12), 0 3px 6px rgba(0,0,0,0.24);
	position: relative;
	z-index: 0;
 }
.tabs-title > a:hover{
	background: <?php twp( 'obj_tab_hover_color') ?>;
	color: <?php twp( 'obj_tab_font_color' ) ?>; }
.tabs-title > a[aria-selected="true"]:hover{
	background-color: <?php twp( 'obj_tab_active_color') ?>;
	color: <?php twp( 'obj_tab_font_color' ) ?>; }

/* Tables */
table thead{
	background-color: <?php twp( 'obj_table_header_color') ?>;
}

table tbody tr:nth-child(even){
	background-color: <?php twp( 'obj_table_odd_color') ?>;
}
table tbody tr:nth-child(odd){
	background-color: <?php twp( 'obj_table_even_color') ?>;
}


/* Thumbnail */
.thumbnail{
	border: none;
	width: 200px;
	height: 200px;
	box-shadow: 0 2px 4px rgba(0,0,0,0.12), 0 2px 4px rgba(0,0,0,0.24) !important;
	transition: 0.2s ease-in-out; }
.thumbnail:hover{
	box-shadow: 0 6px 12px rgba(0,0,0,0.19), 0 6px 12px rgba(0,0,0,0.23) !important;
	transform: translate(0px, -1px) scale(1.1); }

/* Videos */
.flex-video{
	padding-bottom: 56%;
}

/* Visibility */
@media screen and (max-width: 74.9375em) {
  .show-for-xlarge-only {
    display: none !important; } }

@media screen and (min-width: 75em) {
  .hide-for-xlarge-only {
    display: none !important; } }

/* posts */
/* TODO: make an option? */
.nav-links{
  display: none;
}

</style>
