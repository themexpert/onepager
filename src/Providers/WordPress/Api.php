<?php namespace ThemeXpert\Providers\WordPress;

use ThemeXpert\Providers\Contracts\ApiInterface;

class Api implements ApiInterface {
	public function getAjaxUrl() {
		return admin_url( 'admin-ajax.php' );
	}

	public function get( $action, $callback ) {
		if ( 'GET' == $_SERVER['REQUEST_METHOD'] ) {
			$this->action( $action, $callback );
		}
	}

	public function action( $action, $callback ) {
		$callback   = explode( '@', $callback );
		$controller = new $callback[0];
		$method     = $callback[1];

		add_action( 'wp_ajax_' . $action, array( $controller, $method ) );
	}

	public function post( $action, $callback ) {
		if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {
			$this->action( $action, $callback );
		}
	}
	public function getUpdatePlugins(){
		$onepager_free = 'onepager/tx-onepager.php';
		$onepager_pro = 'onepager-pro/onepager-pro.php';
		/**
		 * get the update plugin list
		 */
		$get_update_plugins = get_option('_site_transient_update_plugins');
		if($get_update_plugins){
			$plugins_needs_to_update_array =  get_option('_site_transient_update_plugins')->response;
			if(array_key_exists($onepager_free, $plugins_needs_to_update_array) || array_key_exists($onepager_pro, $plugins_needs_to_update_array)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}
