<?php 
	register_uninstall_hook(__FILE__, 'cms1_unistall');
	function cms1()
	{
		global $wpdb;
		delete_option('cms1_option_version');
		$table_name = $wpdb->prefix . 'cms1';
		$sql = 'DROP TABLE IF EXISTS' . $table_name;
		$wpdb->query($sql);
	}