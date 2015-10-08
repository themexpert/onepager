<?php namespace App\Content;

class OnepageContent {
  public function __construct() {
    add_action( 'wp_head', function () {
      wp_reset_query();
      add_filter( 'the_content', [ $this, 'injectPageContent' ] );
    }, 999 );
  }

  public function injectPageContent( $content ) {
    if ( ! $this->isOnepage() ) {
      return $content;
    }

    if ( $this->onepageContentLoaded() ) {
      return $content;
    }

    $this->setOnepageContentLoaded();

    if ( $this->isPreview() ) {
      return $this->getBuildModeContent();
    }

    $pageId = $this->getCurrentPageId();

    return $this->getPageContent( $pageId );
  }

  protected function getBuildModeContent() {
    return '<div class="wrap"> <div id="onepager-preview"></div> </div>';
  }

  protected function getPageContent( $pageId ) {
    $sections = $this->getAllValidSections( $pageId );

    return $this->renderPageSections( $sections );
  }

  protected function onepageContentLoaded() {
    return defined( 'ONEPAGE_CONTENT_LOADED' );
  }

  protected function setOnepageContentLoaded() {
    define( 'ONEPAGE_CONTENT_LOADED', true );
  }

  /**
   * @return boolean
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
   * @return mixed
   */
  protected function isOnepage() {
    return onepager()->content()->isOnepage();
  }

  /**
   * @param $pageId
   *
   * @return mixed
   */
  protected function getAllValidSections( $pageId ) {
    return onepager()->section()->getAllValid( $pageId );
  }

  /**
   * @param $sections
   *
   * @return mixed
   */
  protected function renderPageSections( $sections ) {
    return onepager()->render()->sections( $sections );
  }
}
