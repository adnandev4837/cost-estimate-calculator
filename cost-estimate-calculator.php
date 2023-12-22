<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://leeddev.io
 * @since             1.0.0
 * @package           Cost_Estimate_Calculator
 *
 * @wordpress-plugin
 * Plugin Name:       Cost Estimate Calculator
 * Plugin URI:        https://leeddev.io
 * Description:       Cost estimation calculator with easy steps
 * Version:           1.0.0
 * Author:            Leed Software Development
 * Author URI:        https://leeddev.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cost-estimate-calculator
 * Domain Path:       /languages
 */

// Block direct access to file
defined( 'ABSPATH' ) or die( 'Not Authorized!' );

// Plugin Defines
define( "FILE", __FILE__ );
define( "DIRECTORY", dirname(__FILE__) );
define( "TEXT_DOMAIN", dirname(__FILE__) );
define( "DIRECTORY_BASENAME", plugin_basename( FILE ) );
define( "DIRECTORY_PATH", plugin_dir_path( FILE ) );
define( "DIRECTORY_URL", plugins_url( null, FILE ) );

// Main classes defines
require_once( DIRECTORY_PATH . 'public/public-main.php' );
require_once( DIRECTORY_PATH . 'admin/admin-main.php' );