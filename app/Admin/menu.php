<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// Register admin menu
add_action( 'admin_menu', 'register_admin_menu', 20 );

function register_admin_menu() {
	// Icon
	$icon = onepager()->url( 'assets/images/logo-white.png' );
	// Dashboard
	$template = function () {
		include __DIR__ . '/views/dashboard.php';
	};

	add_menu_page(
		__( 'OnePager', 'tx-onepager' ),
		__( 'OnePager', 'tx-onepager' ),
		'manage_options',
		'onepager',
		$template,
		$icon,
		'31'
	);
	add_submenu_page(
		'onepager',
		__( 'Dashboard', 'tx-onepager' ),
		__( 'Dashboard', 'tx-onepager' ),
		'manage_options',
		'onepager',
		$template
	);
}

// Register Help menu
add_action( 'admin_menu', 'register_submenu', 501 );
function register_submenu() {
	// Getting started page
	add_submenu_page(
		'onepager',
		__( 'Welcome to OnePager', 'tx-onepager' ),
		__( 'Getting Started', 'tx-onepager' ),
		'manage_options',
		'onepager-getting-started',
		function () {
			include __DIR__ . '/views/getting-started.php';
		}
	);
	// add_submenu_page(
	// 'onepager',
	// '',
	// __( 'Knowledge Base', 'onepager' ),
	// 'manage_options',
	// 'go_knowledge_base_site',
	// [ $this, 'handle_external_redirects' ]
	// );
	add_submenu_page(
		'onepager',
		'',
		'<span class="dashicons dashicons-star-filled" style="font-size: 17px"></span> ' . __( 'Go Pro', 'tx-onepager' ),
		'manage_options',
		'onepager-gopro',
		'handle_external_redirects'
	);
}
// Redirect
add_action( 'admin_init', 'on_admin_init' );
function on_admin_init() {
	handle_external_redirects();
}
function handle_external_redirects() {
	if ( empty( $_GET['page'] ) ) {
		return;
	}
	if ( 'onepager-gopro' === $_GET['page'] ) {
		wp_redirect( 'https://themesgrove.com/wp-onepager/?utm_source=wp-menu&utm_campaign=wponepager_gopro&utm_medium=wp-dash' );
		exit;
	}
	if ( 'go_knowledge_base_site' === $_GET['page'] ) {
		wp_redirect( '' );
		die;
	}
}

// Load css
add_action( 'admin_enqueue_scripts', 'onepager_load_admin_scripts' );
function onepager_load_admin_scripts() {
	global $wp;  
	$current_url = add_query_arg(array($_GET), $wp->request);
	$current_url_slug = $current_url ? explode("=", $current_url) : '';

	// add builder.css so icons and other stuff styles
	if($current_url_slug[1] === 'onepager' || $current_url_slug[1] === 'onepager-getting-started'){
		wp_enqueue_script( 'uikit', op_asset( 'assets/js/uikit.js' ) );
		wp_enqueue_script( 'uikit-icons', op_asset( 'assets/js/uikit-icons.js' ) );
	
		wp_enqueue_style( 'uikit', op_asset( 'assets/css/uikit.css' ) );
	}
	wp_enqueue_style( 'lithium-builder', op_asset( 'assets/css/lithium-builder.css' ) );
	
}