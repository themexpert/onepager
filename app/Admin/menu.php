<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class TXOP_Admin_Menu{
	
	public function __construct(){
		add_action( 'admin_menu', [$this, 'register_admin_menu'], 20 );
		add_action( 'admin_menu', [$this, 'register_submenu'], 501 );
		add_action( 'admin_init', [$this, 'on_admin_init'] );
		add_action( 'admin_init', [$this, 'txop_template_import_handle'] );
		add_action( 'admin_post_txop-delete-template', [$this, 'txop_template_delete_handle'] );
		add_action( 'admin_enqueue_scripts', [$this, 'onepager_load_admin_scripts'] );
	}

	/**
	 * register onepage menu
	 */
	public function register_admin_menu() {
		$icon = onepager()->url( 'assets/images/logo-white.png' );
		add_menu_page(
			__( 'OnePager', 'onepager' ),
			__( 'OnePager', 'onepager' ),
			'manage_options',
			'onepager',
			[$this, 'op_dashboard_view'],
			$icon,
			'31'
		);
		add_submenu_page(
			'onepager',
			__( 'Dashboard', 'onepager' ),
			__( 'Dashboard', 'onepager' ),
			'manage_options',
			'onepager',
			[$this, 'op_dashboard_view']
		);
	}
	/**
	 * Register sub menu
	 */
	public function register_submenu() {

		add_submenu_page(
			'onepager',
			__( 'Welcome to OnePager', 'onepager' ),
			__( 'Getting Started', 'onepager' ),
			'manage_options',
			'onepager-getting-started',
			[$this, 'op_getting_started']
		);

		add_submenu_page(
			'onepager',
			__( 'Blocks', 'onepager' ),
			__( 'Blocks', 'onepager' ),
			'manage_options',
			'onepager-blocks',
			[$this, 'op_block_view']
		);

		add_submenu_page(
			'onepager',
			__('Settings', 'onepager'),
			__('Settings', 'onepager'),
			'manage_options',
			'onepager-settings',
			[$this, 'op_settings_view']
		);
		
		add_submenu_page(
			'onepager',
			__('Templates', 'onepager'),
			__('Templates', 'onepager'),
			'manage_options',
			'onepager-templates',
			[$this, 'txop_onepager_templates']
		);
		
		add_submenu_page(
			'onepager',
			'',
			'<span class="dashicons dashicons-star-filled" style="font-size: 17px"></span> ' . __( 'Go Pro', 'onepager' ),
			'manage_options',
			'onepager-gopro',
			[$this, 'handle_external_redirects']
		);

	}
	/**
	 * onepager dashboard view
	 */
	public function op_dashboard_view(){
		include __DIR__ . '/views/dashboard.php';
	}
	/**
	 * getting started view
	 */
	public function op_getting_started(){
		include __DIR__ . '/views/getting-started.php';
	}
	/**
	 * Block view
	 */
	public function op_block_view(){
		include __DIR__ . '/views/blocks.php';
	}
	/**
	 * Settings View
	 */	
	public function op_settings_view(){
		include __DIR__ . '/views/settings.php';
	}
	/**
	 * Template View
	 */
	public function txop_onepager_templates(){
		include __DIR__ . '/views/templates.php';
		$template = new TXOP_Templates();
		$template->handle_template_pages();
	}
	/**
	 * Hanlde template import 
	 */
	public function txop_template_import_handle(){
		include __DIR__ . '/views/handler.php';
		new TXOP_Handler();
	}
	/**
	 * Hanlde template delete
	 */
	public function txop_template_delete_handle(){
		include __DIR__ . '/views/delete-handler.php';
		new TXOP_Delete_Handler();
	}
	/**
	 * Redirect
	 */
	public function on_admin_init() {
		$this->handle_external_redirects();
	}
	/**
	 * Go Pro view
	 */
	public function handle_external_redirects() {
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

	/**
	 * Load Resources only for onepager pages
	 */
	public function onepager_load_admin_scripts() {
		global $wp;  
		$current_url = add_query_arg(array($_GET), $wp->request);
		$current_url_slug = $current_url ? explode("=", $current_url) : '';
		if($current_url_slug){
			if(count($current_url_slug) > 1){
				// add builder.css so icons and other stuff styles
				if( $current_url_slug[1] === 'onepager' OR 
				$current_url_slug[1] === 'onepager-license' OR 
				$current_url_slug[1] === 'onepager-blocks' OR 
				$current_url_slug[1] === 'onepager-license&onepager_pro_activation' OR 
				$current_url_slug[1] === 'onepager-getting-started' OR
				$current_url_slug[1] === 'onepager-templates'
				)
				{
					wp_enqueue_script( 'uikit', op_asset( 'assets/js/uikit.js' ) );
					wp_enqueue_script( 'uikit-icons', op_asset( 'assets/js/uikit-icons.js' ) );
					wp_enqueue_style( 'uikit', op_asset( 'assets/css/uikit.css' ) );
				}
			}
		}
		wp_enqueue_style( 'lithium-builder', op_asset( 'assets/css/lithium-builder.css' ) );
		
	}

}

new TXOP_Admin_Menu();