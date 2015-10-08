<?php namespace ThemeXpert\Onepager\Render;


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
    $this->blockManager       = $blockManager;
    $this->view               = $view;
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

    //throw better exceptions
    if ( ! FileSystem::exists( $view_file ) ) {
      return $this->noViewFile( $block['name'] );
    }


    $section        = $this->sectionBlockDataMerge( $section );
    $section['url'] = $block['url'];

    return do_shortcode($this->view->make( $view_file, $section ));
  }

  public function sectionBlockDataMerge( $section ) {
    /** FIXME: Currently we are not smartly handling non existent blocks exceptions **/

    if ( ! $block = $this->isValidSection( $section ) ) {
      return $section;
      // return $this->noBlockDefined($section['slug']);
    }

    foreach ( [ 'settings', 'contents', 'styles' ] as $tab ) {
      if ( ! array_key_exists( $tab, $section ) ) {
        $section[ $tab ] = [ ];
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

  /**
   * @param $section
   *
   * @return null|string
   */
  public function style( $section ) {

    /** FIXME: Currently we are not smartly handling non existent blocks exceptions **/
    if ( ! $block = $this->isValidSection( $section ) ) {
      return $this->noBlockDefined( $section['slug'] );
    }

    $style_file = $this->locateStyleFile( $block );

    //throw better exceptions
    if ( ! FileSystem::exists( $style_file ) ) {
      //throw new \Exception( "Block style Does not exist" );
      return null;
    }

    $section['url'] = $block['url'];
    $style          = $this->getStyleHTML( $section, $style_file );

    return $style;
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
    $style .= "</style>";

    return $style;
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

    return array_filter(array_map( function ( $section ) use ( $transformer ) {
      $block = onepager()->blockManager()->get( $section['slug'] );
      if(!$block) return false;

      foreach ( [ 'settings', 'contents', 'styles' ] as $tab ) {
        if ( ! array_key_exists( $tab, $section ) ) {
          $section[ $tab ] = [ ];
        }

        $section[ $tab ] = $transformer
          ->mergePersistedDataAndConfigData( $block[ $tab ], $section[ $tab ]?:[] );
      }

      return $section;
    }, $sections ));
  }

  public function mergeSectionsAndSettings() {
    global $wpdb;
    $sql   = "SELECT post_id, meta_value FROM $wpdb->postmeta where meta_key='onepager_sections'";
    $pages = $wpdb->get_results( $sql );

    return array_map(function($page){
      try {
        $sections = unserialize( $page->meta_value );
      } catch ( \Exception $e ) {
        $sections = [ ];
      }

      $sections = onepager()->section()->getAllValidFromSection( $sections );
      $sections = $this->mergeSectionsBlocksSettings( $sections );
      update_post_meta( $page->post_id, 'onepager_sections', $sections );

      return $sections;
    }, $pages);
  }
}
