<?php

add_action('admin_menu', function(){
	$icon = onepager()->url( 'assets/images/dashicon-onepager.svg');

	$template = function(){
		echo "<div id='dashboard-mount'></div>";
	};
	
	add_menu_page(
		'Onepager', 
		'Onepager', 
		'edit_theme_options', 
		'onepager-dashboard', 
		$template, 
		$icon,
		4
	);
});

add_action( 'admin_enqueue_scripts', function(){
	$dashboard = endsWith(get_current_screen()->id, "_page_onepager-dashboard");
	if(!$dashboard) return;
});

