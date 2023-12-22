<?php
$count = get_transient('leads_count');

    add_menu_page('Cost Estimation', 'Cost Estimation', 'manage_options', 'cost-estimation', 'main_settings','dashicons-calculator');
    add_submenu_page('cost-estimation', 'Development', 'Development', 'manage_options', 'development', 'development_function');
    add_submenu_page('cost-estimation', 'Designing', 'Designing', 'manage_options', 'designing', 'designing_function');
    add_submenu_page('cost-estimation', 'Marketing', 'Marketing', 'manage_options', 'marketing', 'marketing_function');
    add_submenu_page('cost-estimation', 'Content', 'Content', 'manage_options', 'content', 'content_function');
    add_submenu_page('cost-estimation', 'Email Setting', 'Email Setting', 'manage_options', 'email', 'email_function');
    $leads_submenu_title = 'Leads';

    $current_page = filter_input(INPUT_GET, 'page');
    if ($current_page === 'leads') {
  //    update_option( 'leads_count', 0); 
		set_transient('leads_count', 0);
		    $leads_submenu_title = 'Leads';
	}else if($count!='' || $count!=0){
    $leads_submenu_title .= ' <span class="update-plugins count-' . $count . '"><span class="plugin-count">' . $count . '</span></span>';
	}
    add_submenu_page('cost-estimation', 'Leads', $leads_submenu_title, 'manage_options', 'leads', 'leads_function');

function main_settings() { require_once( DIRECTORY_PATH . 'admin/includes/menu-includes/development.php' );}
function development_function() {require_once( DIRECTORY_PATH . 'admin/includes/menu-includes/development.php' );}
function designing_function() {require_once( DIRECTORY_PATH . 'admin/includes/menu-includes/designing.php' );}
function marketing_function() {require_once( DIRECTORY_PATH . 'admin/includes/menu-includes/marketing.php' );}
function content_function() {require_once( DIRECTORY_PATH . 'admin/includes/menu-includes/content.php' );}
function email_function() {require_once( DIRECTORY_PATH . 'admin/includes/menu-includes/email.php' );}
function leads_function() {require_once( DIRECTORY_PATH . 'admin/includes/menu-includes/leads.php' );}  
      
      
