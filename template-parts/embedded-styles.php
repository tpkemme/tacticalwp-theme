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
.hollow.alert  {
	color: <?php solwp( 'global_alert_color' ) ?>;
}
.alert, .disabled.alert, .disabled.alert:hover,
.disabled.alert:focus, [disabled].alert, [disabled].alert:hover,
[disabled].alert:focus, .label.alert, .button-group.alert
.progress.alert .progress-meter {
	background-color: <?php solwp( 'global_alert_color' ) ?>;
	color: <?php solwp( 'global_white_color' ) ?>;
}
.hollow.alert {
	border-color: <?php solwp( 'global_alert_color' ) ?>;
}
.dropdown.hollow.alert::after {
	border-top-color: <?php solwp( 'global_alert_color' ) ?>;
}
.badge.alert {
	background: <?php solwp( 'global_alert_color' ) ?>;
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
 border: 1px solid <?php solwp( 'global_light_gray_color' ) ?>;
}
:last-child:not(.is-active) > .accordion-title,
:last-child > .accordion-content:last-child {
 border-bottom: 1px solid <?php solwp( 'global_light_gray_color' ) ?>;
}

kdb, input:disabled, input[readonly],
textarea:disabled, textarea[readonly], .input-group-label,
select:disabled, .accordion-title:hover, .accordion-title:focus,
.menu.menu-hover li:hover, .slider, .progress, .slider-fill {
 background-color: <?php solwp( 'global_light_gray_color' ) ?>;
}

.card-divider, .pagination button:hover,
.tabs-title > a:focus, .tabs-title > a[aria-selected='true']  {
 background: <?php solwp( 'global_light_gray_color' ) ?>;
}

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
[type='text'], [type='password'], [type='date'],
[type='datetime'], [type='datetime-local'], [type='month'],
[type='week'], [type='email'], [type='number'], [type='search'],
[type='tel'], [type='time'], [type='url'], [type='color'],
textarea {
 color: <?php solwp( 'global_black_color' ) ?>
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
 background: <?php solwp( 'global_white_color' ) ?>;
}
[type='text'], [type='password'], [type='date'],
[type='datetime'], [type='datetime-local'], [type='month'],
[type='week'], [type='email'], [type='number'], [type='search'],
[type='tel'], [type='time'], [type='url'], [type='color'],
textarea, [type='text']:focus, [type='password']:focus,
[type='date']:focus, [type='datetime']:focus, [type='datetime-local']:focus,
[type='month']:focus, [type='week']:focus, [type='email']:focus,
[type='number']:focus, [type='search']:focus, [type='tel']:focus,
[type='time']:focus, [type='url']:focus, [type='color']:focus,
textarea:focus, select, select:focus, .accordion-content, .dropdown-pane {
 background-color: <?php solwp( 'global_white_color' ) ?>;
}
.button:hover, .button:focus, .button.alert, .button.alert:focus,
.button.alert:hover, .button.primary, .button.primary:hover,
.button.primary:focus, .button.disabled, .button.disabled:hover,
.button.disabled:focus, .button[disabled], .button[disabled]:hover,
.button[disabled]:focus, .button.disabled.primary, .button.disabled.primary:hover,
.button.disabled.primary:focus, .button[disabled].primary, .button[disabled].primary:hover,
.button[disabled].primary:focus, .badge, .badge.primary, .button-group.primary .button,
.button-group.primary .button:hover, .button-group.primary .button:focus,
.menu .active > a, .label, .label.primary, .orbit-caption  {
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
	.dropdown-pane{
		background-color: <?php solwp( 'global_background_color' ) ?>;
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
letter-spacing: 0.1em;
}
h5 {
font-weight: <?php solwp( 'typo_sub_header_weight' ) ?>;
font-size: <?php solwp( 'typo_h5_size' ) ?>;
color: <?php solwp( 'typo_h5_color' ) ?>;
font-family: <?php '"' . solwp( 'typo_sub_header_family' ) . '"' ?>;
letter-spacing: 0.1em;
}
h6 {
font-weight: <?php solwp( 'typo_sub_header_weight' ) ?>;
font-size: <?php solwp( 'typo_h6_size' ) ?>;
color: <?php solwp( 'typo_h6_color' ) ?>;
font-family: <?php '"' . solwp( 'typo_sub_header_family' ) . '"' ?>;
letter-spacing: 0.1em;
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
	padding: <?php solwp( 'nav_menu_padding' ) ?> 1rem;
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
    color: #f5faff; }

/* Topbar */
.top-bar {
  padding: <?php solwp( 'nav_top_padding' ) ?>;
	background: <?php solwp( 'nav_top_background_color') ?>;
  box-shadow: 0 0.0625rem 0.25rem rgba(0, 0, 0, 0.12), 0 0.0625rem 0.25rem rgba(0, 0, 0, 0.24); }
.top-bar ul{
	background: <?php solwp( 'nav_top_item_background_color') ?>; }
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
