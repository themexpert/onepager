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

		$section = $this->sectionBlockDataMerge($section);

		
		return $this->view->make( $view_file, $section );
	}

	public function sectionBlockDataMerge($section){
		$block = $this->blockManager->get( $section['slug'] );

		foreach(['settings', 'contents', 'styles'] as $tab){
			$sectionTab = &$section[$tab];
			$blockTab 	= $block[$tab];

			array_walk($blockTab, function($control) use(&$sectionTab) {
				if($control['type'] === "divider") return;
				$type = $control['type'];
				$name = $control['name'];

				switch ($control['type']) {
					case 'repeater':
						$controlFields = &$control['fields'];
						//if a new control is added which is not persisted in database it could throw an error
						//so we are merging them to make it like persisted
						$sectionTab[$name] = array_key_exists($name, $sectionTab) ? $sectionTab[$name]: array_map(function($rGroup){
							return array_reduce($rGroup, function($carry, $control){
								$carry[$control['name']] = $control['value'];
								return $carry;
							}, []);
						}, $controlFields);

						//now if a new control is added to the repeater
						// if(count($sectionTab[$name]) < count($controlFields)){
						$rGroupDataStructure = $controlFields[0];
						$rGroupDataStructure = array_reduce($rGroupDataStructure, function($carry, $control){
							$carry[$control['name']] = $control['value'];
							return $carry;
						}, []);

						foreach($sectionTab[$name] as &$rGroup){
							$rGroup = array_merge($rGroupDataStructure, $rGroup);
						}

						break;
					default:
						$sectionTab[$name] = array_key_exists($name, $sectionTab) ? $sectionTab[$name]: $control['value'];
						break;
				}
			});
		}

		return $section;
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
