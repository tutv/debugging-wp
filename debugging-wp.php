<?php
/*
Plugin Name: Debugging WordPress
Plugin URI: tutran.me
Description: Plugin debug for WordPress Developer.
Author: Max
Version: 1.0.0
Author URI: tutran.me
License: GPLv2 or later
*/

define( 'DEBUGGING_WP_VERSION', '1.0.0' );
define( 'DEBUGGING_WP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Require libraries
 */
require_once DEBUGGING_WP_PLUGIN_DIR . 'vendor/autoload.php';