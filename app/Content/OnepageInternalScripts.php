<?php namespace App\Content;

class OnepageInternalScripts {
  public function __construct() {
    add_action( 'wp_head', [ $this, 'injectInternalScripts' ] );
  }

  public function injectInternalScripts() {
    if ( ! $this->isOnepage() || $this->isBuildMode() ) {
      return;
    }

    $pageId   = $this->getCurrentPageId();
    $sections = $this->getAllValidSectionsFromPageId( $pageId );
    $this->renderStylesFromSections( $sections );
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
  protected function isOnepage() {
    return onepager()->content()->isOnepage();
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
  protected function getAllValidSectionsFromPageId( $pageId ) {
    return onepager()->section()->getAllValid( $pageId );
  }

  /**
   * @param $sections
   */
  protected function renderStylesFromSections( $sections ) {
    onepager()->render()->styles( $sections );
  }
}
