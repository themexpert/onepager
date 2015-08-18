<?php namespace ThemeXpert\View;

use ThemeXpert\View\Engines\PhpEngine;

use ThemeXpert\View\Engines\EngineInterface;

class View {
  protected $compilerEngine;
  protected static $instance;

  public static function getInstance() {
    if ( ! self::$instance ) {
      self::$instance = new self( new PhpEngine );
    }

    return self::$instance;
  }

  public function __construct( EngineInterface $compilerEngine ) {
    $this->compilerEngine = $compilerEngine;
  }

  public function make( $file, $data ) {
    return $this->compilerEngine->get( $file, $data );
  }
}
