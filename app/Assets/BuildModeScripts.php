<?php namespace App\Assets;

use App\Assets\Traits\FormEngineScripts;

class BuildModeScripts {
  use FormEngineScripts;

  public function __construct() {
    add_action( 'wp_enqueue_scripts', [ $this, 'enqueueScripts' ] );
  }

  public function enqueueScripts() {
    if ( ! $this->isBuildMode() ) {
      return false;
    }

    $this->enqueueFormEngineScripts();
    $this->enqueueInitializerScript();
  }

  protected function enqueueInitializerScript() {
    $pageId = $this->getCurrentPageId();
    $asset  = onepager()->asset();
    $data   = $this->localizeScriptData( $pageId );


    $asset->script( 'onepager', asset( 'assets/app.bundle.js' ), [ 'jquery' ] );
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

    $disableBuildModeUrl = getOpBuildModeUrl( getCurrentPageURL(), false );

    $optionPanel = onepager()->optionsPanel( "onepager" )->getOptions();
    $page        = 'onepager';
    $options     = get_option( 'onepager' );

    $presets    = \Onepager::getPresets();
    $basePreset = \Onepager::getBasePreset();

    return compact(
      'ajaxUrl',
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
      'disableBuildModeUrl',
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
}
