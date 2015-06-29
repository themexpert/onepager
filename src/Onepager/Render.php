<?php namespace ThemeXpert\Onepager;


use ThemeXpert\FileSystem\FileSystem;
use ThemeXpert\Onepager\Block\BlockManager;
use ThemeXpert\View\View;

class Render {
	protected $blockManager;
	protected $view;

	public function __construct( View $view, BlockManager $blockManager ) {
		$this->blockManager = $blockManager;
		$this->view         = $view;
	}

	public function sections( $sections ) {
		foreach ( $sections as $section ) {
			echo $this->section( $section );
		}
	}

	public function section( $section ) {
		$block = $this->blockManager->get( $section['slug'] );

		//throw better exceptions
		if ( ! $block ) {
			//throw new \Exception( "Block Does not exist" );
      return null;
		}

		$view_file = array_key_exists( 'view_file', $block ) ? $block['view_file'] : null;

		//throw better exceptions
		if ( ! FileSystem::exists( $view_file ) ) {
			//throw new \Exception( "Block View Does not exist" );
      return null;
		}

		return $this->view->make( $view_file, $section );
	}

	public function styles( $sections ) {
		foreach ( $sections as $section ) {
			echo $this->style( $section );
		}
	}

	public function style( $section ) {
		$block = $this->blockManager->get( $section['slug'] );

		//throw better exceptions
		if ( ! $block ) {
			//throw new \Exception( "Block Does not exist" );
      return null;
		}

		$style_file = array_key_exists( 'style_file', $block ) ? $block['style_file'] : null;

		//throw better exceptions
		if ( ! FileSystem::exists( $style_file ) ) {
      //throw new \Exception( "Block style Does not exist" );
			return null;
		}

		//better section styles
		$style = "<style id='style-{$section['id']}'>";
		$style .= $this->view->make( $style_file, $section );
		$style .= "</style>";

		return $style;
	}
}
