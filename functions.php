<?php 
	
	function stitch_script_enqueue(){
		
		wp_enqueue_style('normalize','https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css',array(),'4.2.0','all');
		wp_enqueue_style('customstyle',get_template_directory_uri().'/css/style.css',array(),'1.0.0','all');
	}
	add_action('wp_enqueue_scripts','stitch_script_enqueue');


	// Enabling menu options to appearence on wp-admin

	add_theme_support('menus');

	// Register Menu
	function set_menu_areas(){
		register_nav_menu('main-menu', 'Primary Menu');
	}
	add_action('init','set_menu_areas');

?>