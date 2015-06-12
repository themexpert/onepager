<?php namespace ThemeXpert\Providers\WordPress;

use ThemeXpert\Providers\Contracts\AssetInterface;

class Asset implements AssetInterface {
	public function script( $name, $src = false, $dependency = [ ], $version = 1, $footer = true ) {
		wp_enqueue_script( $name, $src, $dependency, $version, $footer );
	}

	public function style( $name, $src = false, $dependency = [ ], $version = 1, $media = 'all' ) {
		wp_enqueue_style( $name, $src, $dependency, $version, $media );
	}

	public function localizeScript( $name, $data, $handle = "" ) {
		wp_localize_script( $handle, $name, $data );
	}
}
