<?php namespace App\Assets;

class BlocksScripts {
  public function __construct( $enqueue = true ) {
    if ( $enqueue ) {
      add_action( 'wp_enqueue_scripts', [ $this, 'enqueue' ] );
    }
  }

  public function enqueue() {
    if ( $this->isBuildMode() ) {
      $this->enqueueAllBlocksScripts();
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
    $enqueueCb( $blockUrl );
  }

  /**
   * @return mixed
   */
  protected function isBuildMode() {
    return onepager()->content()->isBuildMode();
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

}
