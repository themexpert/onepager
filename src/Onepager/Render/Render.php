<?php

namespace ThemeXpert\Onepager\Render;

use ThemeXpert\FileSystem\FileSystem;
use ThemeXpert\Onepager\Block\BlockManager;
use ThemeXpert\Onepager\Block\Transformers\SerializedControlsConfigTransformer;
use ThemeXpert\Onepager\Block\Transformers\SerializedControlsOptionsTransformer;
use ThemeXpert\View\View;

class Render {

	protected $blockManager;
	protected $view;
	protected $sectionTransformer;

	public function __construct(
	View $view,
	BlockManager $blockManager,
	SerializedControlsConfigTransformer $sectionTransformer
	) {
		$this->blockManager = $blockManager;
		$this->view = $view;
		$this->sectionTransformer = $sectionTransformer;
	}

	public function sections( $sections ) {
		foreach ( $sections as $section ) {
			echo $this->section( $section );
		}
	}

	/**
	 * FIXME: Currently we are not smartly handling non existent blocks exceptions
	 *
	 * @param $section
	 *
	 * @return bool|mixed|null
	 */
	public function isValidSection( $section ) {
		$block = $this->blockManager->get( $section['slug'] );

		if ( ! $block ) {
			return false;
		}

		return $block;
	}

	public function section( $section ) {
		/**
		 * FIXME: Currently we are not smartly handling non existent blocks exceptions
		 */
		if ( ! $block = $this->isValidSection( $section ) ) {
			return $this->noBlockDefined( $section['slug'] );
		}

		$view_file = $this->locateViewFile( $block );

		// throw better exceptions
		if ( ! FileSystem::exists( $view_file ) ) {
			return $this->noViewFile( $block['name'] );
		}

		$section = $this->sectionBlockDataMerge( $section );
		return do_shortcode( $this->view->make( $view_file, $section ) );
	}

	/**
	 * 
	 */
	public function syncPageSettingsWithSection($pageId, $sections){
		foreach ( $sections as $section ) {
			/**
			 * FIXME: Currently we are not smartly handling non existent blocks exceptions
			 */
			if ( ! $block = $this->isValidSection( $section ) ) {
				return $this->noBlockDefined( $section['slug'] );
			}

			$view_file = $this->locateViewFile( $block );

			// throw better exceptions
			if ( ! FileSystem::exists( $view_file ) ) {
				return $this->noViewFile( $block['name'] );
			}

			$section = $this->sectionBlockDataMerge( $section );
			return do_shortcode( $this->view->makePageStyle( $view_file, $section, $pageId ) );
		}
	}

	public function sectionBlockDataMerge( $section ) {
		/** FIXME: Currently we are not smartly handling non existent blocks exceptions */

		if ( ! $block = $this->isValidSection( $section ) ) {
			return $section;
			// return $this->noBlockDefined($section['slug']);
		}

		foreach ( ['settings', 'contents', 'styles'] as $tab ) {
			if ( ! array_key_exists( $tab, $section ) ) {
				$section[ $tab ] = [];
			}
			$section[ $tab ] = $this->sectionTransformer->mergePersistedDataAndConfigData( $block[ $tab ], $section[ $tab ] );
		}

		return $section;
	}

	public function styles( $sections ) {
		foreach ( $sections as $section ) {
			echo $this->style( $section );
		}
	}
	public function pageStyles($sections, $pageId, $pageOptionPanel){
		foreach ( $sections as $section ) {
			echo $this->pageStyle( $section, $pageId, $pageOptionPanel);
		}
	}
	/**
	 * sync option panel style 
	 * with all the sections of the page
	 * Need to remove @sections
	 */
	public function syncPageStyles( $pageId, $pageOptionPanel, $sectionsId){
		$styleArr = [];
		foreach ( $sectionsId as $sectionId ) {
			$returnStyle = $this->pageSettingsStyle( $sectionId, $pageId, $pageOptionPanel);
			array_push($styleArr, $returnStyle);
		}
		return $styleArr;
	}

	/**
	 * @param $section - contains individual section data which comes from db 
	 *
	 * @return null|string
	 */
	public function style( $section ) {
		/** FIXME: Currently we are not smartly handling non existent blocks exceptions */
		if ( ! $block = $this->isValidSection( $section ) ) {
			return $this->noBlockDefined( $section['slug'] );
		}
		/**
		 * return the style sheet file from the array
		 */
		$style_file = $this->locateStyleFile( $block );
		
		// throw better exceptions
		if ( ! FileSystem::exists( $style_file ) ) {
			// throw new \Exception( "Block style Does not exist" );
			return null;
		}
		
		$section['url'] = $block['url'];
		$style = $this->getStyleHTML( $section, $style_file );

		return $style;
	}

	public function pageStyle( $section, $pageId, $pageOptionPanel ) {
		/** FIXME: Currently we are not smartly handling non existent blocks exceptions */
		if ( ! $block = $this->isValidSection( $section ) ) {
			return $this->noBlockDefined( $section['slug'] );
		}
		/**
		 * return the style sheet file from the array
		 */
		$style_file = $this->locateStyleFile( $block );

		// throw better exceptions
		if ( ! FileSystem::exists( $style_file ) ) {
			// throw new \Exception( "Block style Does not exist" );
			return null;
		}

		$section['url'] = $block['url'];
		$pageStyle = $this->getPageStyleHTML( $section, $style_file, $pageId, $pageOptionPanel );
		return $pageStyle;
	}

	public function pageSettingsStyle( $sectionId, $pageId, $pageOptionPanel ) {
		$pageStyle = $this->getPageStyleLive( $sectionId, $pageId, $pageOptionPanel );
		return $pageStyle;
	}

	/**
	 * @param $section
	 * @param $style_file
	 *
	 * @return string
	 */
	public function getStyleHTML( $section, $style_file ) {
		$style = "<style id='style-{$section['id']}'>";
		$style .= $this->view->make( $style_file, $section );
		$style .= '</style>';

		return $style;
	}
	/**
	 * @param $section
	 * @param $style_file
	 *
	 * @return string
	 */
	public function getPageStyleHTML( $section, $style_file, $pageId, $pageOptionPanel ) {
		$pageStyle = "<style id='op-page-{$pageId}-style-{$section['id']}'>";
		$pageStyle .= $this->view->makePageStyle( $style_file, $section, $pageId, $pageOptionPanel );
		$pageStyle .= '</style>';
		return $pageStyle;
	}

	public function getPageStyleLive( $sectionId, $pageId, $pageOptionPanel ) {
		$pageStyle = "<style id='op-page-{$pageId}-style-{$sectionId}'>";
		$pageStyle .= $this->view->makePageStyleLive( $sectionId, $pageId, $pageOptionPanel );
		$pageStyle .= '</style>';
		return $pageStyle;
	}

	/**
	 * @param $blockName
	 *
	 * @return mixed
	 */
	public function noViewFile( $blockName ) {
		return "<!--No view file found for block {$blockName}-->";
	}

	/**
	 * @param $sectionSlug
	 *
	 * @return string
	 */
	public function noBlockDefined( $sectionSlug ) {
		return "<!--No block found for section {$sectionSlug}-->";
	}

	/**
	 * @param $block
	 *
	 * @return null
	 */
	public function locateViewFile( $block ) {
		$view_file = array_key_exists( 'view_file', $block ) ? $block['view_file'] : null;
		$view_file = locate_template( 'onepager/overrides/' . $block['slug'] . '/view.php' ) ?: $view_file;

		return $view_file;
	}

	/**
	 * @param $block
	 *
	 * @return null
	 */
	public function locateStyleFile( $block ) {
		$style_file = array_key_exists( 'style_file', $block ) ? $block['style_file'] : null;
		$style_file = locate_template( 'onepager/overrides/' . $block['slug'] . '/style.php' ) ?: $style_file;

		return $style_file;
	}

	public function mergeSectionsBlocksSettings( $sections ) {
		$transformer = new SerializedControlsOptionsTransformer();

		return array_filter(
			array_map(
				function ( $section ) use ( $transformer ) {
					$block = onepager()->blockManager()->get( $section['slug'] ); // get data from local config
					if ( ! $block ) {
						return false;
					}

					foreach ( ['settings', 'contents', 'styles'] as $tab ) {
						if ( ! array_key_exists( $tab, $section ) ) {
							$section[ $tab ] = [];
						}

						$section[ $tab ] = $transformer
						->mergePersistedDataAndConfigData( $block[ $tab ], $section[ $tab ] ?: [] );
					}

					return $section;
				},
				$sections
			)
		);
	}

	public function mergeSectionsAndSettings() {
		global $wpdb;
		$sql = "SELECT post_id, meta_value FROM $wpdb->postmeta where meta_key='onepager_sections'";
		$pages = $wpdb->get_results( $sql );

		return array_map(
			function ( $page ) {
				try {
					$sections = unserialize( $page->meta_value );
				} catch ( \Exception $e ) {
					$sections = [];
				}

				$sections = onepager()->section()->getAllValidFromSection( $sections );
				$sections = $this->mergeSectionsBlocksSettings( $sections );
				update_post_meta( $page->post_id, 'onepager_sections', $sections );

				return $sections;
			},
			$pages
		);
	}

	/**
	 * 
	 */
	public function mergeSectionsAndSettingsWithPage($pageId = ''){
		global $wpdb;
		$page_settings_sql = "SELECT meta_value FROM $wpdb->postmeta where meta_key='op_page_option_settings' and post_id={$pageId} ";
		$page_sections_sql = "SELECT meta_value FROM $wpdb->postmeta where meta_key='onepager_sections' and post_id={$pageId} ";
		$page_settings = $wpdb->get_results( $page_settings_sql );
		$page_sections = $wpdb->get_results( $page_sections_sql );
		return array_map(
			function($settings){
				try{
					$page_settigs_section = unserialize($settings->meta_value);
				}catch( \Exception $e){
					$page_settigs_section = [];
				}
			},
			$page_settings	
		);
	}
}
