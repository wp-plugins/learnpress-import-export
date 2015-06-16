<?php
/*
Plugin Name: LearnPress Export/Import Courses
Plugin URI: http://thimpress.com/learnpress
Description: Export and Import your courses with all lesson and quiz in easiest way
Author: thimpress
Version: beta
Author URI: http://thimpress.com
Text Domain: lpr_certificate
Tags: learnpress
*/
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if( ! defined( 'LPR_EXPORT_IMPORT_PATH' ) ) define( 'LPR_EXPORT_IMPORT_PATH', dirname( __FILE__ ) );
/**
 * Register Export/Import courses addon
 */
function learn_press_register_export_import() {
    require_once( LPR_EXPORT_IMPORT_PATH . '/init.php' );
}
add_action( 'learn_press_register_add_ons', 'learn_press_register_export_import' );
