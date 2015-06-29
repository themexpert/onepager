<?php namespace ThemeXpert\Onepager\Block;

class BlockCollection extends \ArrayObject {
	public function get( $key ) {
		return isset( $this[ $key ] ) ? $this[ $key ] : null;
	}

	public function set( $key, $value ) {
		$this[ $key ] = $value;
	}

	public function toArray() {
		$array = array();

		foreach ( $this as $key => $value ) {
			$array[ $key ] = $value->toArray();
		}

		return $array;
	}
}
