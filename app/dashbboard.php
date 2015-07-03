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
		$icon
	);
});

add_action( 'admin_enqueue_scripts', function(){
	$dashboard = endsWith(get_current_screen()->id, "_page_onepager-dashboard");
	if(!$dashboard) return;
 
	$q = onepager()->asset();
	$q->style( 'tx-bootstrap', asset( 'assets/css/bootstrap.css' ) );
	$q->style( 'tx-animatecss', asset( 'assets/css/animate.css' ) );
	$q->style( 'tx-fontawesome', asset( 'assets/css/font-awesome.css' ) );
	$q->style( 'tx-flexbox', asset( 'assets/css/lithium.css' ) );
	$q->script( 'tx-bootstrap', asset( 'assets/js/bootstrap.js' ), [ 'jquery' ] );
	$q->script( 'tx-nicescroll', asset('assets/js/jquery.nicescroll.js'), array( 'jquery' ) );
	$q->script( 'onepager-dashboard', asset('assets/dashboard.bundle.js'), array( 'jquery' ) );
});

