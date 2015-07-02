<?php

add_action('admin_menu', function(){
	add_menu_page( 
		'Onepager Getting Started', 
		'Onepager', 
		'manage_options', 
		'getting-started-onepager', 
		function(){
			include ONEPAGER_PATH . '/app/Templates/getting-started.tpl.php';
		},
		onepager()->url( 'assets/images/dashicon-onepager.svg'),
		3
	);

});