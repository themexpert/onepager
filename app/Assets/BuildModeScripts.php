<?php namespace App\Assets;

use App\Assets\Traits\FormEngineScripts;

class BuildModeScripts {
  use FormEngineScripts;

  public function __construct() {
    add_action( 'wp_enqueue_scripts', [ $this, 'enqueueScripts' ], 999999);
    add_action( 'wp_enqueue_scripts', function(){
      if(!$this->isBuildMode()){
        return;
      }
      onepager()->asset()->enqueue();
    }, 1000000);
  }

  public function enqueueScripts() {
    if ( ! $this->isBuildMode() ) {
      return;
    }

    $this->resetWpScriptQueue();

    $this->enqueueFormEngineScripts();
    $this->enqueueInitializerScript();
  }

  protected function enqueueInitializerScript() {
    $asset  = onepager()->asset();
    $pageId = $this->getCurrentPageId();
    $data   = $this->localizeScriptData( $pageId );

    $asset->script( 'onepager', op_asset( 'assets/onepager-builder.bundle.js' ), [ 'jquery' ], ONEPAGER_VERSION, false );
    $asset->localizeScript( 'onepager', $data, 'onepager' );
  }

  function localizeScriptData( $pageId ) {
    $onepager = onepager();

    $footer     = get_editor_section_list_footer();
    $ajaxUrl    = $onepager->api()->getAjaxUrl();
    $menus      = $onepager->content()->getMenus();
    $categories = $onepager->content()->getCategories();
    $pages      = $onepager->content()->getPages();
    $blocks     = array_values( (array) $onepager->blockManager()->all() );
    $groupOrder = $onepager->blockManager()->getGroupOrder();

    $sections = array_map( function ( $section ) {
      $section            = onepager()->render()->sectionBlockDataMerge( $section );
      $section['content'] = onepager()->render()->section( $section );
      $section['style']   = onepager()->render()->style( $section );

      return $section;
    }, onepager()->section()->getAllValid( $pageId ) );

    $disableBuildModeUrl = onepager_get_edit_mode_url( get_current_page_url(), false );

    $optionPanel = onepager()->optionsPanel( "onepager" )->getOptionsControls();
    $options     = onepager()->optionsPanel( "onepager" )->getAllSavedOptions();
    $page        = 'onepager';

    $presets    = \Onepager::getPresets();
    $basePreset = \Onepager::getBasePreset();

    return compact(
      'ajaxUrl',
      'disableBuildModeUrl',
      'optionPanel',
      'options',
      'page',
      'blocks',
      'pageId',
      'sections',
      'menus',
      'pages',
      'categories',
      'groupOrder',
      'footer',
      'presets',
      'basePreset'
    );
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

  private function resetWpScriptQueue() {
    wp_scripts()->queue = [ ];
    wp_styles()->queue  = [ ];
  }

}
