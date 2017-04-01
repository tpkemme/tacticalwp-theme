<?php
/**
 * The template for embedding styles set by theme settings in the header
 *
 * @package SolWP
 * @since 1.0.0
 */
?>
<style>
/*
	Global Font Size
	================================
 */
html {
	font-size: <?php solwp( 'global_font_size' ) ?>;
}

/*
	Global Site Width
	================================
 */
body#tinymce, #footer-container #footer, hr,
#front-hero .hero-section1, #front-hero .hero-section2, .row,
#kitchen-sink, #page, #page-full-width,
#page-sidebar-left, #single-post, .section-divider  {
  max-width: <?php solwp( 'global_site_width' ) ?>;
}
@media print, screen and (min-width: 40em) {
	.reveal {
		max-width: <?php solwp( 'global_site_width' ) ?>; } }
@media print, screen and (min-width: 40em) {
	.reveal.tiny {
		max-width: <?php solwp( 'global_site_width' ) ?>; } }
@media print, screen and (min-width: 40em) {
	.reveal.small {
		max-width: <?php solwp( 'global_site_width' ) ?>; } }
@media print, screen and (min-width: 40em) {
	.reveal.large {
		max-width: <?php solwp( 'global_site_width' ) ?>; } }

/*
	Global Line Height
	================================
 */
body {
	line-height: <?php solwp( 'global_line_height' ) ?>;
}

/*
	Primary Color
	================================
*/
a, .hollow.primary {
	color: <?php solwp( 'global_primary_color' ) ?>;
}
a:hover, .hollow.primary:hover {
	color: <?php solwp( 'global_light_primary_color' ) ?>;
}
button, .button, .button.primary {
	background-color: <?php solwp( 'global_primary_color' ) ?>;
}
button:hover, .button:hover, .button.primary:hover, .button.disabled.primary:hover,
.button[disabled].primary:focus, .button.disabled.primary:focus {
	background-color: <?php solwp( 'global_light_primary_color' ) ?>;
}
.button.primary, .button.disabled.primary, .button[disabled].primary,
.button-group.primary .button, .label.primary,
.progress.primary .progress-meter {
	background-color: <?php solwp( 'global_primary_color' ) ?>;
}
.button.hollow.primary {
	border-color: <?php solwp( 'global_primary_color' ) ?>;
}
.button.dropdown.hollow.primary::after {
	border-top-color: <?php solwp( 'global_primary_color' ) ?>;
}
.badge.primary {
	background: <?php solwp( 'global_primary_color' ) ?>;
}

/*
	Secondary Color
	================================
 */
.hollow.secondary  {
	color: <?php solwp( 'global_secondary_color' ) ?>;
}
.secondary, .disabled.secondary, .disabled.secondary:hover,
.disabled.secondary:focus, [disabled].secondary, [disabled].secondary:hover,
[disabled].secondary:focus, .button-group.secondary .button, .label.secondary,
.progress.secondary .progress-meter {
	background-color: <?php solwp( 'global_secondary_color' ) ?>;
}
.hollow.secondary {
	border-color: <?php solwp( 'global_secondary_color' ) ?>;
}
.dropdown.hollow.secondary::after {
	border-top-color: <?php solwp( 'global_secondary_color' ) ?>;
}
.badge.secondary {
	background: <?php solwp( 'global_secondary_color' ) ?>;
}

/*
	Success Color
	================================
 */
.hollow.success  {
	color: <?php solwp( 'global_success_color' ) ?>;
}
.success, .disabled.success, .disabled.success:hover,
.disabled.success:focus, [disabled].success, [disabled].success:hover,
[disabled].success:focus, .button-group.success , .label.success,
.progress.success .progress-meter {
	background-color: <?php solwp( 'global_success_color' ) ?>;
}
.hollow.success {
	border-color: <?php solwp( 'global_success_color' ) ?>;
}
.dropdown.hollow.success::after {
	border-top-color: <?php solwp( 'global_success_color' ) ?>;
}
.badge.success {
	background: <?php solwp( 'global_success_color' ) ?>;
}

/*
	Warning Color
	================================
 */
.hollow.warning  {
	color: <?php solwp( 'global_warning_color' ) ?>;
}
.warning, .disabled.warning, .disabled.warning:hover,
.disabled.warning:focus, [disabled].warning, [disabled].warning:hover,
[disabled].warning:focus, .button-group.warning, .label.warning,
.progress.warning .progress-meter {
	background-color: <?php solwp( 'global_warning_color' ) ?>;
}
.hollow.warning {
	border-color: <?php solwp( 'global_warning_color' ) ?>;
}
.dropdown.hollow.warning::after {
	border-top-color: <?php solwp( 'global_warning_color' ) ?>;
}
.badge.warning {
	background: <?php solwp( 'global_warning_color' ) ?>;
}

/*
	Alert Color
	================================
 */
.hollow.alert, .form-error, .is-invalid-label {
	color: <?php solwp( 'global_alert_color' ) ?>; }

input.is-invalid-input::-webkit-input-placeholder, textarea::-webkit-input-placeholder{
	color: <?php solwp( 'global_alert_color' ) ?>; }
input.is-invalid-input:-ms-input-placeholder, textarea:-ms-input-placeholder{
	color: <?php solwp( 'global_alert_color' ) ?>; }
input.is-invalid-input::placeholder, textarea::placeholder{
	color: <?php solwp( 'global_alert_color' ) ?>; }

.alert, .disabled.alert, .disabled.alert:hover,
.disabled.alert:focus, [disabled].alert, [disabled].alert:hover,
[disabled].alert:focus, .label.alert, .button-group.alert,
.progress.alert .progress-meter, .callout.alert, .button.alert,
button.button[type="reset"] {
	background-color: <?php solwp( 'global_alert_color' ) ?>;
	color: <?php solwp( 'global_white_color' ) ?>; }

.hollow.alert, .is-invalid-input:not(:focus), .callout.alert,
.button.alert {
	border-color: <?php solwp( 'global_alert_color' ) ?>; }

.dropdown.hollow.alert::after {
	border-top-color: <?php solwp( 'global_alert_color' ) ?>; }

.badge.alert{
background: <?php solwp( 'global_alert_color' ) ?>; }

.button.alert:hover, button.alert:hover, button.button[type="reset"]:hover{
	background-color: <?php solwp( 'global_alert_hover_color' ) ?>;
	border-color: <?php solwp( 'global_alert_hover_color' ) ?>; }

[type="checkbox"] + label.is-invalid-label[for]:before,
[type="radio"] + label.is-invalid-label[for]:before{
	border: 1px solid <?php solwp( 'global_alert_color' ) ?>; }
}
/*
	Global Monochromes
	================================
 */

/*
	Light Gray
	================================
*/
code, .acordion-title, .accordion-content, .card,
.menu.menu-bordered li, .tabs, .tabs-content,
.tabs-content.vertical {
 border: 1px solid <?php solwp( 'global_light_gray_color' ) ?>; }
:last-child:not(.is-active) > .accordion-title,
:last-child > .accordion-content:last-child {
 border-bottom: 1px solid <?php solwp( 'global_light_gray_color' ) ?>; }

kdb, input:disabled, input[readonly],
textarea:disabled, textarea[readonly], .input-group-label,
select:disabled, .accordion-title:hover, .accordion-title:focus,
.menu.menu-hover li:hover, .slider, .progress, .slider-fill {
 background-color: <?php solwp( 'global_light_gray_color' ) ?>; }

.card-divider, .pagination button:hover,
.tabs-title > a:focus, .tabs-title > a[aria-selected='true']  {
 background: <?php solwp( 'global_light_gray_color' ) ?>; }
.label, .label.primary, .orbit-caption, label, [type='text'], [type='password'], [type='date'],
[type='datetime'], [type='datetime-local'], [type='month'],
[type='week'], [type='email'], [type='number'], [type='search'],
[type='tel'], [type='time'], [type='url'], [type='color'],
textarea{
	color: <?php solwp( 'global_light_gray_color' ) ?>; }

[type='text'], [type='password'], [type='date'], [type='datetime'],
[type='datetime-local'], [type='month'], [type='week'],
[type='email'], [type='number'], [type='search'], [type='tel'],
[type='time'], [type='url'], [type='color'], textarea,
.input-group-label, .fieldset, select, .dropdown-pane,
.is-dropdown-submenu, .reveal{
	border-color: <?php solwp( 'global_light_gray_color' ) ?>; }

/*
	Medium Gray
	================================
*/
.orbit-bullets button{
 background-color: <?php solwp( 'global_medium_gray_color' ) ?>;
}
.switch-paddle{
 background: <?php solwp( 'global_medium_gray_color' ) ?>;
}
h1 small, h2 small, h3 small,
h4 small, h5 small, h6 small,
input::-webkit-input-placeholder, textarea::-webkit-input-placeholder,
input:-ms-input-placeholder, textarea:-ms-input-placeholder,
input::placeholder, textarea::placeholder,
.breadcrumbs li:not(:last-child)::after, .breadcrumbs .disabled,
.pagination .disabled {
 color: <?php solwp( 'global_medium_gray_color' ) ?>;
}
hr{
 border-bottom: 1px solid <?php solwp( 'global_medium_gray_color' ) ?>;
}
blockquote {
 border-left: 1px solid <?php solwp( 'global_medium_gray_color' ) ?>;
}
[type='text'], [type='password'], [type='date'],
[type='datetime'], [type='datetime-local'], [type='month'],
[type='week'], [type='email'], [type='number'],
[type='search'], [type='tel'], [type='time'], [type='url'], [type='color'],
textarea, .input-group-label, .fieldset, select, .dropdown-pane,
.is-dropdown-submenu, .reveal {
 border: 1px solid <?php solwp( 'global_medium_gray_color' ) ?>;
}
[type='text']:focus, [type='password']:focus, [type='date']:focus,
[type='datetime']:focus, [type='datetime-local']:focus, [type='month']:focus,
[type='week']:focus, [type='email']:focus, [type='number']:focus,
[type='search']:focus, [type='tel']:focus, [type='time']:focus,
[type='url']:focus, [type='color']:focus, textarea:focus, select:focus {
 -webkit-box-shadow: 0 0 5px <?php solwp( 'global_medium_gray_color' ) ?>;
				 box-shadow: 0 0 5px <?php solwp( 'global_medium_gray_color' ) ?>;
}
.menu-icon:hover::after {
 background: <?php solwp( 'global_medium_gray_color' ) ?>;
 -webkit-box-shadow: 0  7px 0 <?php solwp( 'global_medium_gray_color' ) ?>,
  									 0 14px 0 <?php solwp( 'global_medium_gray_color' ) ?>;
				 box-shadow: 0  7px 0 <?php solwp( 'global_medium_gray_color' ) ?>,
				  					 0 14px 0 <?php solwp( 'global_medium_gray_color' ) ?>;
}

/*
 Dark Gray
 ================================
*/
blockquote, blockquote p, .subheader, .close-button{
 color: <?php solwp( 'global_dark_gray_color' ) ?>;
}
pre, blockquote, [type='text']:focus, [type='password']:focus,
[type='date']:focus, [type='datetime']:focus, [type='datetime-local']:focus,
[type='month']:focus, [type='week']:focus, [type='email']:focus,
[type='number']:focus, [type='search']:focus, [type='tel']:focus,
[type='time']:focus, [type='url']:focus, [type='color']:focus,
textarea:focus, select:focus {
 border: 1px solid <?php solwp( 'global_dark_gray_color' ) ?>;
}
.menu-icon.dark:hover::after {
 background: <?php solwp( 'global_dark_gray_color' ) ?>;
 -webkit-box-shadow: 0  7px 0 <?php solwp( 'global_dark_gray_color' ) ?>,
 										 0 14px 0 <?php solwp( 'global_dark_gray_color' ) ?>;
				 box-shadow: 0  7px 0 <?php solwp( 'global_dark_gray_color' ) ?>,
				 						 0 14px 0 <?php solwp( 'global_dark_gray_color' ) ?>;
}
.orbit-bullets button:hover, .orbit-bullets button.is-active{
 background-color: <?php solwp( 'global_dark_gray_color' ) ?>;
}
.has-tip {
 border-bottom: <?php solwp( 'global_dark_gray_color' ) ?>;
}

/*
 Black
 ================================
*/
abbr, body, code, kdb, label, .help-text, .input-group-label, select, .button.success,
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
 color: <?php solwp( 'global_black_color' ) ?>
}
abbr {
 border-bottom: 1px dotted <?php solwp( 'global_black_color' ) ?>;
}
.menu-icon.dark::after {
 background: <?php solwp( 'global_black_color' ) ?>;
 -webkit-box-shadow: 0  7px 0 <?php solwp( 'global_black_color' ) ?>,
  									 0 14px 0 <?php solwp( 'global_black_color' ) ?>;
				 box-shadow: 0  7px 0 <?php solwp( 'global_black_color' ) ?>,
				 						 0 14px 0 <?php solwp( 'global_black_color' ) ?>;
}
.tooltip{
 background-color: <?php solwp( 'global_black_color' ) ?>;
}
.tooltip.top::before {
 border-color: <?php solwp( 'global_black_color' ) ?> transparent transparent;
}
.tooltip.left::before {
 border-color: transparent transparent transparent <?php solwp( 'global_black_color' ) ?>;
}
.tooltip.right::before {
 border-color: transparent <?php solwp( 'global_black_color' ) ?> transparent transparent;
}

/*
 White
 ================================
*/
body, fieldset legend, .accordion, .card, .is-drilldown-submenu, .is-dropdown-submenu {
 color: <?php solwp( 'global_white_color' ) ?>;
}
[type='text']:focus, [type='password']:focus,
[type='date']:focus, [type='datetime']:focus, [type='datetime-local']:focus,
[type='month']:focus, [type='week']:focus, [type='email']:focus,
[type='number']:focus, [type='search']:focus, [type='tel']:focus,
[type='time']:focus, [type='url']:focus, [type='color']:focus,
textarea:focus, select, select:focus, .accordion-content, .dropdown-pane {
 color: <?php solwp( 'global_white_color' ) ?>;
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
 color: <?php solwp( 'global_white_color' ) ?>;
}
.button.dropdown::after {
 border-color: <?php solwp( 'global_white_color' ) ?> transparent transparent;
}
.menu-icon::after {
 background: <?php solwp( 'global_white_color' ) ?>;
 -webkit-box-shadow: 0 7px 0 <?php solwp( 'global_white_color' ) ?>, 0 14px 0 <?php solwp( 'global_white_color' ) ?>;
				 box-shadow: 0 7px 0 <?php solwp( 'global_white_color' ) ?>, 0 14px 0 <?php solwp( 'global_white_color' ) ?>;
	}

/*
	Global Background
	================================
 */
<?php if( solwp_get_option( 'solwp_global_background_type' ) === 'color' ): ?>
	body, .fieldset legend  {
		background: <?php solwp( 'global_background_color' ) ?>;
	}
<?php elseif( solwp_get_option( 'solwp_global_background_type' ) === 'image' ): ?>
	body, .fieldset legend  {
		background-color: <?php solwp( 'global_background_color' ) ?>;
		background: url('<?php solwp( 'global_background_image' ) ?>');
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
	}
	.dropdown-pane{
		background-color: <?php solwp( 'global_background_color' ) ?>;
	}
<?php else: ?>
	body, .fieldset legend  {
		background: <?php solwp( 'global_background_color' ) ?>;
	}
	.dropdown-pane{
		background-color: <?php solwp( 'global_background_color' ) ?>;
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
	background-color: <?php solwp( 'global_background_color' ) ?>;
}

/*
	Global Font Color
	================================
 */
body, abbr, .accordion-content, .callout,
.callout.primary, .callout.secondary, .callout.success,
.callout.warning, .callout.alert, .card, table thead, table tfoot,
.tabs-content {
	color: <?php solwp( 'global_font_color' ) ?>
}

/*
	Global Font Color
	================================
 */
body, h1, h2, h3, h4, h5, h6 {
	font-family: <?php '"' . solwp( 'global_font_family' ) . '"' ?>;
}

/*
Global Margins
================================
*/
.button, .breadcrumbs {
 margin: 0 0 <?php solwp( 'global_margin_size' ) ?> 0;
}
.card, .media-object, .pagination, .progress, .switch, table, .thumbnail{
 margin-bottom: <?php solwp( 'global_margin_size' ) ?>;
}

/*
Global padding
================================
*/
.card-divider, .card-section, .reveal{
 padding: <?php solwp( 'global_padding_size' ) ?>;
}
.media-object-section:first-child{
 padding-right: <?php solwp( 'global_padding_size' ) ?>;
}
.media-object-section:last-child:not(:nth-child(2)){
 padding-left: <?php solwp( 'global_padding_size' ) ?>;
}
@media screen and (max-width: 39.9375em) {
	.media-object.stack-for-small .media-object-section {
	 	padding-bottom: <?php solwp( 'global_padding_size' ) ?>;
	}
}

/*
	Header styles
	================================
 */
h1,h2,h3,h4,h5,h6 {
line-height: <?php solwp( 'typo_header_line_height' ) ?>;
margin-bottom: <?php solwp( 'typo_header_margin_bottom' ) ?>;
}
h1 {
font-weight: <?php solwp( 'typo_header_weight' ) ?>;
font-size: <?php solwp( 'typo_h1_size' ) ?>;
color: <?php solwp( 'typo_h1_color' ) ?>;
font-family: <?php '"' . solwp( 'typo_header_family' ) . '"' ?>;
}
h2 {
font-weight: <?php solwp( 'typo_header_weight' ) ?>;
font-size: <?php solwp( 'typo_h2_size' ) ?>;
color: <?php solwp( 'typo_h2_color' ) ?>;
font-family: <?php '"' . solwp( 'typo_header_family' ) . '"' ?>;
}
h3 {
font-weight: <?php solwp( 'typo_header_weight' ) ?>;
font-size: <?php solwp( 'typo_h3_size' ) ?>;
color: <?php solwp( 'typo_h3_color' ) ?>;
font-family: <?php '"' . solwp( 'typo_header_family' ) . '"' ?>;
}
h4 {
font-weight: <?php solwp( 'typo_sub_header_weight' ) ?>;
font-size: <?php solwp( 'typo_h4_size' ) ?>;
color: <?php solwp( 'typo_h4_color' ) ?>;
font-family: <?php '"' . solwp( 'typo_sub_header_family' ) . '"' ?>;
letter-spacing: 0.05em;
}
h5 {
font-weight: <?php solwp( 'typo_sub_header_weight' ) ?>;
font-size: <?php solwp( 'typo_h5_size' ) ?>;
color: <?php solwp( 'typo_h5_color' ) ?>;
font-family: <?php '"' . solwp( 'typo_sub_header_family' ) . '"' ?>;
letter-spacing: 0.05em;
}
h6 {
font-weight: <?php solwp( 'typo_sub_header_weight' ) ?>;
font-size: <?php solwp( 'typo_h6_size' ) ?>;
color: <?php solwp( 'typo_h6_color' ) ?>;
font-family: <?php '"' . solwp( 'typo_sub_header_family' ) . '"' ?>;
letter-spacing: 0.05em;
 }
@media print, screen and (min-width: 40em) {
 h1 {
	 <?php
	 		$h1 =  strval( floatval( solwp_get_option( 'solwp_typo_h1_size' ) ) * 2.0 );
			$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', solwp_get_option( 'solwp_typo_h1_size' ) );
	  ?>
   font-size: <?php echo $h1 . $units ?>;
 }
 h2 {
	 <?php
	 		$h2 =  strval( floatval( solwp_get_option( 'solwp_typo_h2_size' ) ) * 2.0 );
			$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', solwp_get_option( 'solwp_typo_h2_size' ) );
	  ?>
   font-size: <?php echo $h2 . $units ?>;
 }
 h3 {
	 <?php
	 		$h3 =  strval( floatval( solwp_get_option( 'solwp_typo_h3_size' ) ) * 2.0 );
			$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', solwp_get_option( 'solwp_typo_h3_size' ) );
	  ?>
   font-size: <?php echo $h3 . $units ?>;
 }
 h4 {
	 <?php
	 		$h4 =  strval( floatval( solwp_get_option( 'solwp_typo_h4_size' ) ) * 2.0 );
			$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', solwp_get_option( 'solwp_typo_h4_size' ) );
	  ?>
   font-size: <?php echo $h4 . $units ?>;
 }
 h5 {
	 <?php
	 		$h5 =  strval( floatval( solwp_get_option( 'solwp_typo_h5_size' ) ) * 2.0 );
			$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', solwp_get_option( 'solwp_typo_h5_size' ) );
	  ?>
   font-size: <?php echo $h5 . $units ?>;
 }
 h6 {
	 <?php
	 		$h6 =  strval( floatval( solwp_get_option( 'solwp_typo_h6_size' ) ) * 2.0 );
			$units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', solwp_get_option( 'solwp_typo_h6_size' ) );
	  ?>
   font-size: <?php echo $h6 . $units ?>;
 }
}

/* Body Typogrphay */

/* Small Text */
small{
 font-size: <?php solwp( 'typo_body_small_size' ) ?>;
 color: <?php solwp( 'typo_body_small_color' ) ?>;
}

h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small {
 color: <?php solwp( 'typo_body_small_color' ) ?>;
}

/* Paragraph Styles */
p {
 line-height: <?php solwp( 'typo_body_paragraph_line_height' ) ?>;
 margin-bottom: <?php solwp( 'typo_body_paragraph_margin_bottom' ) ?>;
}

/* Link Styles */
a {
	color: <?php solwp( 'typo_body_link_font_color' ) ?>;
	text-decoration: <?php solwp( 'typo_body_link_font_decoration' ) ?>;}
.dropdown.menu > li.is-dropdown-submenu-parent > a::after {
	border-color: <?php solwp( 'typo_body_link_font_color' ) ?> transparent transparent;}
.dropdown.menu.vertical > li.opens-left > a::after {
	border-color: transparent <?php solwp( 'typo_body_link_font_color' ) ?> transparent transparent; }
.dropdown.menu.vertical > li.opens-right > a::after {
	border-color: transparent transparent transparent <?php solwp( 'typo_body_link_font_color' ) ?>; }
.dropdown.menu.medium-horizontal > li.is-dropdown-submenu-parent > a::after {
	border-color: <?php solwp( 'typo_body_link_font_color' ) ?> transparent transparent; }
@media print, screen and (min-width: 40em) {
	.dropdown.menu.medium-horizontal > li.is-dropdown-submenu-parent > a::after {
		border-color: <?php solwp( 'typo_body_link_font_color' ) ?> transparent transparent;
		margin-top: -3px; }
	.dropdown.menu.medium-vertical > li.opens-left > a::after {
		border-color: transparent <?php solwp( 'typo_body_link_font_color' ) ?> transparent transparent; }
	.dropdown.menu.medium-vertical > li.opens-right > a::after {
		border-color: transparent transparent transparent <?php solwp( 'typo_body_link_font_color' ) ?>; } }
@media print, screen and (min-width: 64em) {
	.dropdown.menu.large-horizontal > li.is-dropdown-submenu-parent > a::after {
		border-color: <?php solwp( 'typo_body_link_font_color' ) ?> transparent transparent; }
	.dropdown.menu.large-vertical > li.opens-left > a::after {
		border-color: transparent <?php solwp( 'typo_body_link_font_color' ) ?> transparent transparent; }
	.dropdown.menu.large-vertical > li.opens-right > a::after {
		border-color: transparent transparent transparent <?php solwp( 'typo_body_link_font_color' ) ?>; } }
.is-dropdown-submenu .is-dropdown-submenu-parent.opens-left > a::after {
	border-color: transparent <?php solwp( 'typo_body_link_font_color' ) ?> transparent transparent; }
.is-dropdown-submenu .is-dropdown-submenu-parent.opens-right > a::after {
	border-color: transparent transparent transparent <?php solwp( 'typo_body_link_font_color' ) ?>; }

a:hover, a:focus {
	color: <?php solwp( 'typo_body_link_hover_font_color' ) ?>;
	text-decoration: <?php solwp( 'typo_body_link_hover_font_decoration' ) ?>;}

/* Hr styles */
hr {
  max-width: <?php solwp( 'typo_body_hr_width' ) ?>;
	margin: <?php solwp( 'typo_body_hr_margin' ) ?> auto;
	border-bottom: <?php solwp( 'typo_body_hr_thickness' ) ?> <?php solwp( 'typo_body_hr_style' ) ?> <?php solwp( 'typo_body_hr_color' ) ?>; }

/* Lists */
ul,
ol,
dl {
  line-height: <?php solwp( 'typo_list_line_height' ) ?>;
  margin-bottom: <?php solwp( 'typo_list_margin_bottom' ) ?>;
	list-style-position: <?php solwp( 'typo_list_style_position') ?>; }
ul {
  list-style-type: <?php solwp( 'typo_list_style_type' ) ?>;
	margin-left: <?php solwp( 'typo_list_margin_left' ) ?>; }

ol {
	margin-left: <?php solwp( 'typo_list_margin_left' ) ?>; }

ul ul, ol ul, ul ol, ol ol {
	margin-left: <?php solwp( 'typo_list_margin_left' ) ?>;
	margin-bottom: 0; }

/* Menu Settings */
.menu{
	margin: <?php solwp( 'nav_menu_margin' ) ?>;
}
.menu > li > a {
	padding: <?php solwp( 'nav_menu_padding' ) ?> <?php solwp( 'global_padding_size' ) ?>;
}
.is-drilldown-submenu, .is-dropdown-submenu {
    background: <?php solwp( 'nav_submenu_background_color' ) ?>;
		border: none;
}

/* Breadcrumbs */
  .breadcrumbs li {
    font-size: <?php solwp( 'nav_breadcrumb_font_size' ) ?>;
    color: <?php solwp( 'nav_breadcrumb_current_color' ) ?>;
		text-transform: <?php solwp( 'nav_breadcrumb_font_uppercase' ) ?>; }
    .breadcrumbs li:not(:last-child)::after {
      content: "<?php solwp( 'nav_breadcrumb_divider_symbol' ) ?>";
      color: <?php solwp( 'nav_breadcrumb_divider_color' ) ?>;
			top: -1px; }
  .breadcrumbs a {
    color: <?php solwp( 'nav_breadcrumb_color' ) ?>; }
  .breadcrumbs a:hover {
    color: <?php solwp( 'nav_breadcrumb_hover_color' ) ?>; }
  .breadcrumbs .disabled {
    color: #<?php solwp( 'global_white_color' ) ?>; }

/* Topbar */
.top-bar {
  padding: <?php solwp( 'nav_top_padding' ) ?>;
  background: <?php solwp( 'nav_top_background_color') ?>;
  box-shadow: 0 0.1625rem 0.25rem rgba(0, 0, 0, 0.12), 0 0.0625rem 0.25rem rgba(0, 0, 0, 0.24); }
.top-bar ul{
	background: <?php solwp( 'nav_top_item_background_color') ?>; }
<?php if( solwp_get_option( 'solwp_nav_top_menu_shadow') === 'show' ): ?>
	<?php if( solwp_get_option( 'solwp_nav_top_menu_alignment') === 'right' ): ?>
		.top-bar .top-bar-left:not(.top-bar-search) ul{
			box-shadow: -0.1625rem 0.0625rem 0.25rem rgba(0, 0, 0, 0.12), -0.0625rem 0.0625rem 0.25rem rgba(0, 0, 0, 0.24); }
		.top-bar .top-bar-right:not(.top-bar-search) ul{
			box-shadow: -0.1625rem 0.0625rem 0.25rem rgba(0, 0, 0, 0.12), -0.0625rem 0.0625rem 0.25rem rgba(0, 0, 0, 0.24); }
	<?php else: ?>
		.top-bar .top-bar-left:not(.top-bar-search) ul{
			box-shadow: 0.1625rem 0.0625rem 0.25rem rgba(0, 0, 0, 0.12), 0.0625rem 0.0625rem 0.25rem rgba(0, 0, 0, 0.24); }
		.top-bar .top-bar-right:not(.top-bar-search) ul{
			box-shadow: 0.1625rem 0.0625rem 0.25rem rgba(0, 0, 0, 0.12), 0.0625rem 0.0625rem 0.25rem rgba(0, 0, 0, 0.24); }
	<?php endif; ?>
<?php endif; ?>
.top-bar ul li{
	border-right: none !important; }
.top-bar .menu:not(.submenu) a:hover:not(.button){
	background: <?php solwp( 'nav_top_item_hover_background_color') ?>;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
	position: relative;
	z-index: 1; }
.top-bar ul li.current-menu-item a{
	border-bottom: .2rem solid <?php solwp( 'global_accent_color') ?> !important;
	padding-bottom: .8rem; }
.top-bar ul.submenu li.current-menu-item a{
	border-right: .2rem solid <?php solwp( 'global_accent_color') ?> !important;
	padding-right: .8rem;
	border-bottom: none !important;
	padding-bottom: <?php solwp( 'global_padding_size' ) ?>; }
.top-bar .menu .active > a{
	background: <?php solwp( 'nav_top_item_background_color') ?>; }
.top-bar ul ul {
    background-color: <?php solwp( 'nav_top_submenu_background_color') ?>; }
.top-bar ul ul li{
  background-color: <?php solwp( 'nav_top_submenu_background_color') ?>; }
.top-bar ul ul li a{
    background-color: <?php solwp( 'nav_top_submenu_background_color') ?>; }
.top-bar ul li a:hover{
  color: <?php solwp( 'nav_top_item_hover_font_color' ) ?>;
}

/* sticky topbar */
<?php if ( solwp_get_option( 'solwp_nav_top_sticky' ) === 'sticky' ): ?>
.logged-in .site-header {
    position: fixed;
    top: 32px;
    width: 100vw;
}
.site-header {
    position: fixed;
    top: 0px;
    width: 100vw;
    z-index: 999;
}

.site-header + .container {
    padding-top: 32px;
}
.logged-in .site-header + .container {
	<?php $p_top = strval( ( floatval( solwp_get_option( 'solwp_nav_top_padding' ) ) + 1.40625 )  * 2.0 ); ?>
	<?php $units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', solwp_get_option( 'solwp_nav_top_padding' ) ); ?>
	padding-top:   <?php echo $p_top . $units ?>;
}
<?php endif; ?>

/* search */
.top-bar .top-bar-search button {
    background-color: <?php solwp( 'nav_top_search_button_color' ) ?>;
}
.top-bar .top-bar-search button:hover {
    background-color: <?php solwp( 'nav_top_search_button_hover_color' ) ?>;
}
.top-bar .top-bar-search input {
  max-width: 200px;
  margin-right: 0;
  <?php $p_top = strval( floatval( solwp_get_option( 'solwp_nav_top_padding' ) ) + 1.4 ); ?>
  <?php $units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', solwp_get_option( 'solwp_nav_top_padding' ) ); ?>
  padding:   <?php echo $p_top . $units ?> <?php solwp( 'global_padding_size' ) ?> <?php echo $p_top . $units ?>;
  border: none;
  -webkit-box-shadow: inset 0px 0px 3px 1px <?php solwp( 'global_black_color') ?>;
  -moz-box-shadow: inset 0px 0px 3px 1px <?php solwp( 'global_black_color') ?>;
  box-shadow: inset 0px 0px 3px 1px <?php solwp( 'global_black_color') ?>; }

.top-bar .top-bar-search input:focus{
	border: none; }

.top-bar .top-bar-search button{
  <?php $p_top = strval( floatval( solwp_get_option( 'solwp_nav_top_padding' ) ) + .9); ?>
  <?php $units = preg_replace( array( '/\d+/u', '/[.,]/' ), '', solwp_get_option( 'solwp_nav_top_padding' ) ); ?>
  padding: <?php echo $p_top . $units ?> <?php solwp( 'global_padding_size' ) ?> <?php echo $p_top . $units ?>;
}

.top-bar ul li a,
.top-bar .menu a{
  color: <?php solwp( 'nav_top_item_font_color' ) ?>;
  font-family: <?php solwp( 'nav_top_item_font_family' ) ?>;
  font-size: <?php solwp( 'nav_top_item_font_size' ) ?>; }
.top-bar .menu.desktop-menu {
    display: inline-flex; }

/* Title bar */
.title-bar-title li {
	padding: 0; }
.title-bar-title li a {
  height: auto !important;
	color: <?php solwp( 'nav_title_font_color' ) ?> !important	;
	font-size: <?php solwp( 'nav_title_font_size' ) ?> !important;
	padding:  <?php solwp( 'global_padding_size' ) ?> !important;
	line-height: 0.55 !important; }
.top-bar .title-bar-title {
  box-shadow: none !important; }
.top-bar .title-bar-title:hover {
	box-shadow: -0.1625rem 0.0625rem 0.25rem rgba(0, 0, 0, 0.12), -0.0625rem 0.0625rem 0.25rem rgba(0, 0, 0, 0.24) !important; }


/* Logo */
.menu > li > a img.site-logo {
    width: 80px;
    display: inline-block;
    margin-right: .25rem;
    margin-top: -100%;
    position: relative;
    transform: translateY(95%); }
/* Object Defaults */

/* Forms */
[type='text'], [type='password'], [type='date'],
[type='datetime'], [type='datetime-local'], [type='month'],
[type='week'], [type='email'], [type='number'],
[type='tel'], [type='time'], [type='url'],
[type='color'], textarea.fieldset, select, .input-group-label, textarea{
    padding: 8px 30px 8px 10px;
}
[type='text'], [type='password'], [type='date'],
[type='datetime'], [type='datetime-local'], [type='month'],
[type='week'], [type='email'], [type='number'], [type='search'],
[type='tel'], [type='time'], [type='url'],
[type='color'], textarea.fieldset, select, .input-group-label, textarea{
	background-color: <?php solwp( 'obj_form_background_color' ) ?>;
	border-color: <?php solwp( 'obj_form_border_color' ) ?>;
	padding: 8px 30px 8px 10px;
	-webkit-box-shadow: inset 2px 2px 3px 0px <?php solwp( 'global_black_color') ?>;
	-moz-box-shadow: inset 2px 2px 3px 0px <?php solwp( 'global_black_color') ?>;
	box-shadow: inset 2px 2px 3px 0px <?php solwp( 'global_black_color') ?>;
	color: <?php solwp( 'obj_form_input_color' ) ?>;
}
[type='text']:focus, [type='password']:focus, [type='date']:focus,
[type='datetime']:focus, [type='datetime-local']:focus, [type='month']:focus,
[type='week']:focus, [type='email']:focus, [type='number']:focus, [type='search']:focus,
[type='tel']:focus, [type='time']:focus, [type='url']:focus, textarea:focus,
[type='color']:focus, textarea.fieldset:focus, select:focus, .is-invalid-input:not(:focus){
	background-color: <?php solwp( 'obj_form_background_color' ) ?>;
	color: <?php solwp( 'obj_form_input_focus_color' ) ?>;
}
.help-text, .input-group-label{
	color: <?php solwp( 'obj_form_helptext_color' ) ?>;
	font-size: <?php solwp( 'obj_form_helptext_font_size' ) ?>;
}
label, fieldset legend{
	color: <?php solwp( 'obj_form_label_color' ) ?>;
	font-weight: 700;
	font-size: <?php solwp( 'obj_form_label_font_size' ) ?>;
}
input::-webkit-input-placeholder, textarea::-webkit-input-placeholder{
	color: <?php solwp( 'obj_form_placeholder_color' ) ?>; }
input:-ms-input-placeholder, textarea:-ms-input-placeholder{
	color: <?php solwp( 'obj_form_placeholder_color' ) ?>; }
input::placeholder, textarea::placeholder{
	color: <?php solwp( 'obj_form_placeholder_color' ) ?>; }

[type="checkbox"]:not(.switch-input), [type="radio"] {
  display: none;
}

[type="checkbox"]:not(.switch-input) + label,
[type="radio"] + label{
  position: relative;
  display: inline-block;
  cursor: pointer;
  position: relative;
  padding-left: 25px;
  margin-right: <?php solwp( 'global_pmargin_size' ) ?>;
  margin-bottom: <?php solwp( 'global_margin_size' ) ?>;
  line-height: 1.0625rem; }

[type="checkbox"]:not(.switch-input) + label[for]:before,
[type="radio"] + label[for]:before{
  content: "";
  display: inline-block;
  width: <?php solwp( 'global_margin_size' ) ?>;
  height: <?php solwp( 'global_margin_size' ) ?>;
  margin-right: <?php solwp( 'global_margin_size' ) ?>;
  position: absolute;
  left: 0;
  bottom: 1px;
  background-color: <?php solwp( 'obj_form_background_color' ) ?>;
  box-shadow: inset 1px 0px 3px 0px rgba(0, 0, 0, .3), inset 1px 0px 4px -1px rgba(0, 0, 0, .75); }

[type="radio"] + label[for]:before{
  border-radius: 8px; }

input[type=radio]:checked + label:before {
    content: "\2022";
    color: <?php solwp( 'obj_form_input_color' ) ?>;
    font-size: 30px;
    text-align: center;
    line-height: <?php solwp( 'global_padding_size' ) ?>; }

input[type=checkbox]:not(.switch-input):checked + label:before {
  content: "\2713";
  text-shadow: 1px 1px 1px rgba(0, 0, 0, .2);
  font-size: 15px;
  color: <?php solwp( 'obj_form_input_color' ) ?>;
  text-align: center;
  line-height: <?php solwp( 'global_padding_size' ) ?>; }

.input-group-label:first-child {
    border-right: 0;
    padding: 8px <?php solwp( 'global_padding_size' ) ?>;}



	 /*
	 	SolWP Theme Overrides
		================================
	  */

 	 /*.card {
 	     box-shadow: 0 1px 1px rgba(0,0,0,.1) !important;
 	     margin: 10px 0 !important;
 	     border-radius: 4px !important;
 	     display: block !important;
 	     position: relative !important;
 	     -webkit-transition: all .15s ease-in-out !important;
 	     transition: all .15s ease-in-out !important;
 	     background: #fff !important;
 	 }

 	 .card:hover {
 	     box-shadow: 0 4px 20px 0 rgba(168,182,191,.6) !important;
 	 }

 	 .top-bar{
 	   box-shadow: 0 2px 5px 0 rgba(0,0,0,0.26) !important;
 	   background-color: #4a5ab9 !important;
 	   color: white !important;
 	   font-family: "Roboto","Helvetica Neue",Helvetica,Arial,sans-serif  !important;
 	   font-size: 14px  !important;
 	   -webkit-font-smoothing: antialiased  !important;
 	   line-height: 1.42857143  !important;
 	 }

 	 .top-bar li a{
 	   background: #4a5ab9;
 	   color: #fefefe;
 	 }

 	 .top-bar li a:hover:not(.button){
 	   background-color: #4a5ab9 !important;
 	 }
 	 .top-bar .menu li:not(:last-child){
 	   border: none !important;
 	 }
 	 .top-bar-right .button {
 	     background: #2c3840;
 	     top: 3px;
 	     position: relative;
 	 }
 	 .top-bar-right .button:hover {
 	     background: #607D8B;
 	     position: relative;
 	 }
 	 .top-bar-right input[type="search"]{
 	     position: relative !important;
 	     top: 3px !important;
 	 }

 	 .top-bar ul {
 	     background-color: #2c3840;
 	     height: 45px !important;
 	     position: relative;
 	 }

 	 .button {
 	     box-shadow: 0 2px 5px 0 rgba(0,0,0,0.26);
 	 }
 	 .button:hover {
 	     -webkit-transform: translate3d(0,-1px,0);
 	     transform: translate3d(0,-1px,0);
 	     box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
 	 }

 	 .progress-meter {
 	     float: left;
 	     width: 0;
 	     height: 100%;
 	     font-size: 12px;
 	     line-height: 20px;
 	     color: #fff;
 	     text-align: center;
 	     background-color: #337ab7;
 	     -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
 	     box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
 	     -webkit-transition: width .6s ease;
 	     -o-transition: width .6s ease;
 	     transition: width .6s ease;
 	     animation: progress-bar-stripes 2s linear infinite;
 	     -webkit-animation: progress-bar-stripes 2s linear infinite;
 	 }
 	 .top-bar .menu li:first-child a {
 	     background-color: #2c3840;
 	     padding: 1rem 1.5rem;
 	     font-size: 30px;
 	     line-height: 10px;
 	     font-weight: 300;
 	 }
 	 .top-bar .menu li:not(:first-child) a {
 	     font-size: .9rem;
 	 }
 	 h1, h2, h3, h4{
 	     font-weight: 300 !important;
 	     font-family: 'Helvetica Neue';
 	 }

 	 p, .help-text{
 	     font-weight: 400;
 	     color: #8a8a8a;
 	 }*/

</style>
