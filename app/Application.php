<?php namespace App;

use App\Assets\BlocksScripts;
use App\Assets\BuildModeScripts;
use App\Assets\OnepageScripts;
use App\Assets\WpConflictResolver;
use App\Content\OnepageContent;
use App\Content\OnepageInternalScripts;
use App\Content\OnepageToolbar;
use App\Loaders\BlocksLoader;
use App\Loaders\PresetsLoader;
use App\Loaders\TemplateLoader;
use ThemeXpert\WordPress\PageTemplater;

class Application {
  protected $onepager;

  public function __construct( $onepager ) {
    $this->onepager = $onepager;

    $this->enqueue_assets();
    $this->inject_page_contents();
    $this->init_loaders();
  }

  protected function enqueue_assets() {
    new WpConflictResolver();
    new OnepageScripts();
    new BlocksScripts();
    new BuildModeScripts();


    add_action( 'wp_enqueue_scripts', [ $this, 'compile_assets' ], 1000);
  }

  public function compile_assets() {
    if ( $this->shouldCompileScripts() ) {
      $page_id = $this->getCurrentPageId();
      $this->onepager->asset()->compileScriptsAndEnqueue( $page_id );
    } else {
      $this->onepager->asset()->enqueue();
    }
  }

  protected function inject_page_contents() {
    new OnepageToolbar();
    new OnepageContent();
    new OnepageInternalScripts();
  }

  protected function init_loaders() {
    $blockManager        = $this->getBlockManager();
    $presetManager       = $this->getPresetManager();
    $pageTemplateManager = new PageTemplater();

    new BlocksLoader( $blockManager );
    new PresetsLoader( $presetManager );
    new TemplateLoader( $pageTemplateManager );
  }

  /**
   * @return mixed
   */
  protected function isBuildMode() {
    return $this->onepager->content()->isBuildMode();
  }

  /**
   * @return mixed
   */
  protected function getCurrentPageId() {
    return $this->onepager->content()->getCurrentPageId();
  }

  /**
   * @return mixed
   */
  protected function getBlockManager() {
    return $this->onepager->blockManager();
  }

  /**
   * @return mixed
   */
  protected function getPresetManager() {
    return $this->onepager->presetManager();
  }

  /**
   * @return bool
   */
  private function shouldCompileScripts() {
    return $this->isBuildMode() ? false : ! $this->isDebugMode();
  }

  /**
   * @return bool
   */
  private function isDebugMode() {
    return (defined( 'ONEPAGER_DEBUG' ) && ONEPAGER_DEBUG) || \Onepager::getOption('onepager_debug', false);
  }
}
