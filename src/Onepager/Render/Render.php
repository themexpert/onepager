<?php namespace ThemeXpert\Onepager\Render;


use ThemeXpert\FileSystem\FileSystem;
use ThemeXpert\Onepager\Block\BlockManager;
use ThemeXpert\Onepager\Block\Transformers\SectionTransformer;
use ThemeXpert\View\View;

class Render {
  protected $blockManager;
  protected $view;
  protected $sectionTransformer;

  public function __construct(
    View $view,
    BlockManager $blockManager,
    SectionTransformer $sectionTransformer
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

    return $this->view->make( $view_file, $section );
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
      $section[ $tab ] = $this->sectionTransformer->mergePersistedDataAndBlockData( $block[ $tab ], $section[ $tab ] );
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
    $view_file = locate_template( 'onepager/blocks/' . $block['slug'] . '/view.php' ) ?: $view_file;

    return $view_file;
  }

  /**
   * @param $block
   *
   * @return null
   */
  public function locateStyleFile( $block ) {
    $style_file = array_key_exists( 'style_file', $block ) ? $block['style_file'] : null;
    $style_file = locate_template( 'onepager/blocks/' . $block['slug'] . '/style.php' ) ?: $style_file;

    return $style_file;
  }
}
