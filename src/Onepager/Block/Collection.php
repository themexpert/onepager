<?php namespace ThemeXpert\Onepager\Block;

class Collection extends \ArrayObject {
	// deprecated in php 7.4
	// public function get( $key ) {
	// 	return array_key_exists( $key, $this ) ? $this[ $key ] : null;
	// }
	public function get( $key ) {
		$new_arr = json_decode(json_encode($this), true);
		return array_key_exists(  $key, $new_arr ) ? $this[ $key ] : null;
	}

	public function set( $key, $value ) {
		try {
			if ( $this->get( $key ) ) {
				$msg = __(
					"You added a block with slug name {$key} which is already occupied by another block.
							Please rename slug in {$value['config_file']}",
					'onepager'
				);
				throw new \Exception( $msg );
			}

			$this[ $key ] = $value;
		} catch ( \Exception $e ) {
			die( 'Caught exception: ' . $e->getMessage() . "\n<br>" );
		}

	}

	public function toArray() {
		$array = array();

		foreach ( $this as $key => $value ) {
			$array[ $key ] = $value->toArray();
		}

		return $array;
	}
}
