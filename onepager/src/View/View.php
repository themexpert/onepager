<?php namespace ThemeXpert\View;

use ThemeXpert\View\Engines\EngineInterface;

class View {
	protected $compilerEngine;

	public function __construct( EngineInterface $compilerEngine ) {
		$this->compilerEngine = $compilerEngine;
	}

	public function make( $file, $data ) {
		return $this->compilerEngine->get( $file, $data );
	}
}
