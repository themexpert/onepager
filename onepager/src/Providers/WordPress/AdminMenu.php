<?php namespace ThemeXpert\Providers\WordPress;

use ThemeXpert\Providers\Contracts\AdminMenuInterface;

class AdminMenu implements AdminMenuInterface {
	public function add( $slug, $menuTitle, $pageTitle, $viewCallBack, $icon ) {
		add_action( 'admin_menu', function () use ( $slug, $menuTitle, $pageTitle, $viewCallBack, $icon ) {
			$viewCallBack = explode( '@', $viewCallBack );
			$controller   = new $viewCallBack[0];
			$method       = $viewCallBack[1];

			add_menu_page(
				$pageTitle, //page title
				$menuTitle, //menu title
				'manage_options', //permission
				$slug, //slug
				[ $controller, $method ], //render callback
				$icon //icon
			);
		} );
	}
}
