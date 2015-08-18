<?php namespace App\Assets;

use App\Assets\Traits\FormEngineScripts;

class BuildModeScripts {
  use FormEngineScripts;

  public function __construct(  ) {
    add_action( 'wp_enqueue_scripts', [$this, 'enqueueScripts']);
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

    $ajaxUrl    = $onepager->api()->getAjaxUrl();
    $nav_arr    = $onepager->content()->getMenus();
    $cat_arr    = $onepager->content()->getCategories();
    $pages_arr  = $onepager->content()->getPages();
    $blocks     = array_values( (array) $onepager->blockManager()->all() );
    $groupOrder = $onepager->blockManager()->getGroupOrder();

    $sections = array_map( function ( $section ) {
      $section            = onepager()->render()->sectionBlockDataMerge( $section );
      $section['content'] = onepager()->render()->section( $section );
      $section['style']   = onepager()->render()->style( $section );

      return $section;
    }, onepager()->section()->getAllValid( $pageId ) );

    $footer_markup = get_editor_section_list_footer();
    $disableUrl    = getOpBuildModeUrl( getCurrentPageURL(), false );

    return array(
      'ajaxUrl'     => $ajaxUrl,
      'optionPanel' => onepager()->optionsPanel( "onepager" )->getOptions(),
      'options'     => get_option( 'onepager' ),
      'page'        => 'onepager',
      'blocks'      => $blocks,
      'pageId'      => $pageId,
      'sections'    => $sections,
      'menus'       => $nav_arr,
      'pages'       => $pages_arr,
      'categories'  => $cat_arr,
      'groupOrder'  => $groupOrder,
      'footer'      => $footer_markup,
      'disable'     => $disableUrl,
      'presets'     => \Onepager::getPresets(),
      'basePreset'  => \Onepager::getBasePreset()
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
