<?php
/*
	Plugin Name: Boost - Digital Library
	Plugin URI: https://github.com/andronics/boost-digial-library
	Description: Digital Library extension for Boost framework
	Author: andronics
	Author URI: https://github.com/andronics/
	Version: 0.1
	License: GNU General Public License v2.0
	License URI: http://www.gnu.org/licenses/gpl-2.0.html
	Text Domain: boost_digital_library
	Domain Path: /languages

 */

// Prevent file from being loaded directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

define('BOOST_DIGITAL_LIBRARY_DOMAIN', 'BOOST_DIGITAL_LIBRARY');
define('BOOST_DIGITAL_LIBRARY_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('BOOST_DIGITAL_LIBRARY_PLUGIN_URL', plugin_dir_url(__FILE__));

add_action('acf/init', 'digital_library_acf_init' );
function digital_library_acf_init() {

	if ( function_exists('acf_add_local_field_group') ) {
		include('acf/index.php');
	}

}

add_action('init', 'boost_digital_library_init');
function boost_digital_library_init() {

	if (class_exists( 'BoostPost' ) ) {
		require_once( "types/index.php" );
	}

	// add_action( 'admin_menu',			'digital_library_admin_menu',			99	);
	// add_action( 'et_builder_ready',		'digital_library_et_builder_ready',		99	);
	// add_filter( 'template_include',		'digital_library_template_include',		10	);


}




?>