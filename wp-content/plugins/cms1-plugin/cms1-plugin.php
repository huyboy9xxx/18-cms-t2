<?php
/*
Plugin Name: cms1 plugin
Plugin URI: https://google.com/
Description: Plugin cms1
Version: 1.0
Author: Gia Huy
Author URI: https://google.com/
License: GPL
*/
register_activation_hook(__FILE__, 'cms1');
function cms1()
{
	$cms1_version = '1.0';
	add_option('cms1_option_version', $cms1_version, '', 'yes');
	global $wpdb;
	$table_name = $wpdb->prefix . 'cms1';
	if ($wpdb->get_var("SHOW TABLES LIKE '".$table_name."'") != $table_name) {
		$sql = "CREATE TABLE `" . $table_name . "`(id` INT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL, PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci";
		require_once  ABSPATH.'wp-admin/includes/upgrade.php';
		dbDelta( $sql);
	}
}