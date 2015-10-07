<?php namespace App\Assets;

use ThemeXpert\FileSystem\FileSystem;

class BlocksScripts {
  public function __construct() {
    add_action( 'wp_enqueue_scripts', [ $this, 'enqueue' ] );
  }

  public function enqueue() {
    if ( $this->isPreview() ) {
      $this->enqueueAllBlocksScripts();
    } else if($this->isBuildMode()){

    } else {
      $pageId   = $this->getCurrentPageId();
      $sections = $this->getAllValidSections( $pageId );

      $this->enqueueSectionBlocks( $sections );
    }
  }

  public function enqueueSectionBlocks( $sections ) {
    $blocks = $this->getBlocksFromUsedSections( $sections );

    $this->enqueueBlocksScripts( $blocks );
  }

  protected function enqueueAllBlocksScripts() {
    $blocks = (array) onepager()->blockManager()->all();

    $this->enqueueBlocksScripts( $blocks );
  }

  protected function getBlocksFromUsedSections( $sections ) {
    $blockSlugs = array_unique( array_map( function ( $section ) {
      return $section['slug'];
    }, $sections ) );

    return array_filter( array_map( function ( $blockSlug ) {
      $block = onepager()->blockManager()->get( $blockSlug );

      return $block ?: false;
    }, $blockSlugs ) );
  }

  protected function enqueueBlocksScripts( $blocks ) {
    array_walk( $blocks, [ $this, 'enqueueBlockScripts' ] );
  }

  protected function enqueueBlockScripts( $block ) {
    $enqueueCb = $block['enqueue'];

    if ( ! $enqueueCb ) {
      return;
    }

    $blockUrl = $block['url'];

    $blockCssFile = $block['dir'].'block.css';
    if(FileSystem::exists($blockCssFile)){
      onepager()->asset()->style($block['slug']."-block", $blockUrl."/block.css");
    }

    $enqueueCb( $blockUrl );
  }

  /**
   * @return mixed
   */
  protected function isPreview() {
    return onepager()->content()->isPreview();
  }

  /**
   * @return mixed
   */
  protected function getCurrentPageId() {
    return onepager()->content()->getCurrentPageId();
  }

  /**
   * @param $pageId
   *
   * @return mixed
   */
  protected function getAllValidSections( $pageId ) {
    return onepager()->section()->getAllValid( $pageId );
  }

  private function isBuildMode() {
    return onepager()->content()->isBuildMode();
  }

}
