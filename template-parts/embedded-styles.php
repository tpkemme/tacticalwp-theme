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
	 */
	html {
		font-size: <?php solwp( 'global_font_size' ) ?>;
	}

	/*
		Global Site Width
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
	 */
	body {
		line-height: <?php solwp( 'global_line_height' ) ?>;
	}

	/*
		Primary Color
	*/
	a {
		color: <?php solwp( 'global_primary_color' ) ?>;
	}
	button {
		background-color: <?php solwp( 'global_primary_color' ) ?>;
	}

	/*
		Secondary Color
	 */
	a, .button.hollow.secondary  {
		color: <?php solwp( 'global_secondary_color' ) ?>;
	}
	.button.secondary, .button.disabled.secondary, .button.disabled.secondary:hover,
	.button.disabled.secondary:focus, .button[disabled].secondary, .button[disabled].secondary:hover,
	.button[disabled].secondary:focus, .button-group.secondary .button, .label.secondary,
	.progress.secondary .progress-meter {
		background-color: <?php solwp( 'global_secondary_color' ) ?>;
	}
	.button.hollow.secondary {
		border-color: <?php solwp( 'global_secondary_color' ) ?>;
	}
	.button.dropdown.hollow.secondary::after {
		border-top-color: <?php solwp( 'global_secondary_color' ) ?>;
	}
	.badge.secondary {
		background: <?php solwp( 'global_secondary_color' ) ?>;
	}

	/*
		Success Color
	 */
	a, .button.hollow.success  {
		color: <?php solwp( 'global_success_color' ) ?>;
	}
	.button.success, .button.disabled.success, .button.disabled.success:hover,
	.button.disabled.success:focus, .button[disabled].success, .button[disabled].success:hover,
	.button[disabled].success:focus, .button-group.success .button, .label.success,
	.progress.success .progress-meter {
		background-color: <?php solwp( 'global_success_color' ) ?>;
	}
	.button.hollow.success {
		border-color: <?php solwp( 'global_success_color' ) ?>;
	}
	.button.dropdown.hollow.success::after {
		border-top-color: <?php solwp( 'global_success_color' ) ?>;
	}
	.badge.success {
		background: <?php solwp( 'global_success_color' ) ?>;
	}

	/*
		Warning Color
	 */
	a, .button.hollow.warning  {
		color: <?php solwp( 'global_warning_color' ) ?>;
	}
	.button.warning, .button.disabled.warning, .button.disabled.warning:hover,
	.button.disabled.warning:focus, .button[disabled].warning, .button[disabled].warning:hover,
	.button[disabled].warning:focus, .button-group.warning .button, .label.warning,
	.progress.warning .progress-meter {
		background-color: <?php solwp( 'global_warning_color' ) ?>;
	}
	.button.hollow.warning {
		border-color: <?php solwp( 'global_warning_color' ) ?>;
	}
	.button.dropdown.hollow.warning::after {
		border-top-color: <?php solwp( 'global_warning_color' ) ?>;
	}
	.badge.warning {
		background: <?php solwp( 'global_warning_color' ) ?>;
	}

	/*
		Alert Color
	 */
	a, .button.hollow.alert  {
		color: <?php solwp( 'global_alert_color' ) ?>;
	}
	.button.alert, .button.disabled.alert, .button.disabled.alert:hover,
	.button.disabled.alert:focus, .button[disabled].alert, .button[disabled].alert:hover,
	.button[disabled].alert:focus, .button-group.alert .button, .label.alert,
	.progress.alert .progress-meter {
		background-color: <?php solwp( 'global_alert_color' ) ?>;
	}
	.button.hollow.alert {
		border-color: <?php solwp( 'global_alert_color' ) ?>;
	}
	.button.dropdown.hollow.alert::after {
		border-top-color: <?php solwp( 'global_alert_color' ) ?>;
	}
	.badge.alert {
		background: <?php solwp( 'global_alert_color' ) ?>;
	}

</style>
