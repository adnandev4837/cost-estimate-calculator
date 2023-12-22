<?php

// Block direct access to file
defined( 'ABSPATH' ) or die( 'Not Authorized!' );

class admin_main {

    public function __construct() {
    //call admin scripts and styles
    add_action( 'admin_enqueue_scripts', array($this, 'enqueue_admin_scripts') );
    //call admin menu
    add_action('admin_menu', array($this, 'admin_menu'));
     // Plugin activation/deactivation hooks
        register_activation_hook( FILE, array($this, 'wp_activatation_hook') );
        register_deactivation_hook( FILE, array($this, 'wp_deactivation_hook') );
    }
    function admin_menu() {
      require_once( DIRECTORY_PATH . 'admin/includes/admin-menu.php' );
  }
	
// Plugin deactivation hook
function wp_deactivation_hook() {
// global $wpdb;
// $table_name = $wpdb->prefix . 'cost_estimation_leads';
// $sql = "DROP TABLE IF EXISTS $table_name";
// $wpdb->query($sql);
// require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
// dbDelta($sql);
}	
// Plugin activation hook
function wp_activatation_hook() {
 // Check if the database table already exists
global $wpdb;
$table_name = $wpdb->prefix . 'cost_estimation_leads';
$charset_collate = $wpdb->get_charset_collate();

if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {

    // Table does not exist, so create it
    $sql = "CREATE TABLE $table_name (
        id INT(11) NOT NULL AUTO_INCREMENT,
        email VARCHAR(255) NOT NULL,
		date_and_time VARCHAR(255) NOT NULL,
		selected_Services LONGTEXT NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

}
/**
     * Enqueue the main Plugin admin scripts and styles
     * @method  admin side
     */
function enqueue_admin_scripts( $atts ){
   wp_enqueue_style('admin-styles', plugin_dir_url(__FILE__) . '/assets/css/styles.css', array(), '1.0.7');
   wp_enqueue_script('admin-scripts',  plugin_dir_url(__FILE__) .'/assets/js/scripts.js', array('jquery'), '1.6', false);
	   // Enqueue DataTables CSS
    wp_enqueue_style('datatables', 'https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css');
    // Enqueue DataTables JavaScript
wp_enqueue_script('datatables', 'https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js', array('jquery'), '1.10.25', false);
	 wp_localize_script('admin-scripts', 'en_admin_data', array(
    ));
    }
}
new admin_main;