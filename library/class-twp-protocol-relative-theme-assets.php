<?php
/**
 * Protocol Relative Theme Assets.
 *
<<<<<<< HEAD
 * @category TacticalWP-Theme
 * @package TacticalWP
 * @author   Tyler Kemme <dev@tylerkemme.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @version 1.0.0
 * @link https://github.com/tpkemme/tacticalwp-theme
 * @since 1.0.0
=======
 * @since TacticalWP 1.1.0
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470
 */
if ( ! class_exists('TacticalWP_Protocol_Relative_Theme_Assets') ) :
    class TacticalWP_Protocol_Relative_Theme_Assets {

<<<<<<< HEAD
if ( ! class_exists( 'TWP_Protocol_Relative_Theme_Assets' ) ) :
	class TWP_Protocol_Relative_Theme_Assets {
		/**
		 * Plugin URI: https://github.com/ryanjbonnell/Protocol-Relative-Theme-Assets
		 * Description: Transforms enqueued CSS and JavaScript theme URLs to use protocol-relative paths.
		 * Version: 1.0
		 * Author: Ryan J. Bonnell
		 * Author URI: https://github.com/ryanjbonnell
		 *
		 * Class Constructor
		 *
		 * @access  public
		 * @since   1.0
		 */
		public function __construct() {
			add_filter( 'style_loader_src', array( $this, 'style_loader_src' ), 10, 2 );
			add_filter( 'script_loader_src', array( $this, 'script_loader_src' ), 10, 2 );
=======
        /**
         * Plugin URI: https://github.com/ryanjbonnell/Protocol-Relative-Theme-Assets
         * Description: Transforms enqueued CSS and JavaScript theme URLs to use protocol-relative paths.
         * Version: 1.0
         * Author: Ryan J. Bonnell
         * Author URI: https://github.com/ryanjbonnell.
         *
         * Class Constructor
         *
         * @since   1.0
         */
        public function __construct() {
            add_filter('style_loader_src', array($this, 'style_loader_src'), 10, 2);
            add_filter('script_loader_src', array($this, 'script_loader_src'), 10, 2);
>>>>>>> de83f76ce415f7f0b0e8f3ba53032085ea188470

            add_filter('template_directory_uri', array($this, 'template_directory_uri'), 10, 3);
            add_filter('stylesheet_directory_uri', array($this, 'stylesheet_directory_uri'), 10, 3);
        }

        /**
         * Convert.
         *
         * @return string
         *
         * @since   1.0
         */
        private function make_protocol_relative_url( $url ) {
            return preg_replace('(https?://)', '//', $url);
        }

        /**
         * Transform Enqueued Stylesheet URLs.
         *
         * @return string
         *
         * @since   1.0
         */
        public function style_loader_src( $src, $handle ) {
            return $this->make_protocol_relative_url($src);
        }

        /**
         * Transform Enqueued JavaScript URLs.
         *
         * @return string
         *
         * @since   1.0
         */
        public function script_loader_src( $src, $handle ) {
            return $this->make_protocol_relative_url($src);
        }

        /**
         * Transform Enqueued Theme Files.
         *
         * @return string
         *
         * @since   1.0
         * @link    http://codex.wordpress.org/Function_Reference/get_template_directory_uri
         */
        public function template_directory_uri( $template_dir_uri, $template, $theme_root_uri ) {
            return $this->make_protocol_relative_url($template_dir_uri);
        }

        /**
         * Transform Enqueued Theme Files.
         *
         * @return string
         *
         * @since   1.0
         * @link    http://codex.wordpress.org/Function_Reference/get_stylesheet_directory_uri
         */
        public function stylesheet_directory_uri( $stylesheet_dir_uri, $stylesheet, $theme_root_uri ) {
            return $this->make_protocol_relative_url($stylesheet_dir_uri);
        }
    }

    $twp_protocol_relative_theme_assets = new TacticalWP_Protocol_Relative_Theme_Assets();
endif;
