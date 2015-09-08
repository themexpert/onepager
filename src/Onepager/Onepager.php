<?php
namespace ThemeXpert\Onepager;

use Pimple\Container;
use ThemeXpert\Onepager\Adapters\BaseAdapter;
use ThemeXpert\Onepager\Block\Collection;
use ThemeXpert\Onepager\Block\BlockManager;
use ThemeXpert\Onepager\Block\PresetManager;
use ThemeXpert\Onepager\Block\Transformers\ConfigTransformer;
use ThemeXpert\Onepager\Block\Transformers\FieldsTransformer;
use ThemeXpert\Onepager\Block\Transformers\SerializedControlsConfigTransformer;
use ThemeXpert\Onepager\Render\Render;
use ThemeXpert\Providers\WordPress\OptionsPanel;
use ThemeXpert\Providers\Contracts\ApiInterface;
use ThemeXpert\Providers\Contracts\AssetInterface;
use ThemeXpert\Providers\Contracts\ContentInterface;
use ThemeXpert\Providers\Contracts\NavigationMenuInterface;
use ThemeXpert\Providers\Contracts\ToolbarInterface;
use ThemeXpert\View\Engines\PhpEngine;
use ThemeXpert\View\View;

class Onepager implements OnepagerInterface {

  public function __construct( BaseAdapter $adapter, Container $container ) {
    $this->adapter   = $adapter;
    $this->container = $container;
    $this->setBlockManager();
    $this->setPresetManager();
    $this->setRenderer();
    $this->setViewProvider();
  }

  public function setBlockManager() {
    $this->container['blockManager'] = function () {
      $blockCollection   = new Collection;
      $configTransformer = new ConfigTransformer( new FieldsTransformer );

      return new BlockManager( $configTransformer, $blockCollection );
    };
  }

  public function setPresetManager() {
    $this->container['presetManager'] = function () {
      return new PresetManager;
    };
  }

  private function setRenderer() {
    $this->container['render'] = function ( $container ) {
      return new Render( $container['view'], $container['blockManager'], new SerializedControlsConfigTransformer() );
    };
  }

  public function setViewProvider() {
    $this->container['view'] = function () {
      return new View( new PhpEngine() );
    };
  }

  /**
   * @return NavigationMenuInterface
   */
  public function navigationMenu() {
    $container = $this->adapter->getContainer();

    return $container['navigationMenu'];
  }

  /**
   * @return ToolbarInterface
   */
  public function toolbar() {
    $container = $this->adapter->getContainer();

    return $container['toolbar'];
  }

  /**
   * @return ContentInterface
   */
  public function content() {
    $container = $this->adapter->getContainer();

    return $container['content'];
  }

  /**
   * @return AssetInterface
   */
  public function asset() {
    $container = $this->adapter->getContainer();

    return $container['asset'];
  }

  /**
   * @return ApiInterface
   */
  public function api() {
    $container = $this->adapter->getContainer();

    return $container['api'];
  }

  public function security() {
    $container = $this->adapter->getContainer();

    return $container['security'];
  }

  public function view() {
    $container = $this->adapter->getContainer();

    return $container['view'];
  }

  public function url( $string ) {
    return trailingslashit( $this->adapter->getUrl() ) . $string;
  }

  public function path( $path ) {
    return $this->adapter->getPath() . DIRECTORY_SEPARATOR . $path;
  }

  public function section() {
    $container = $this->adapter->getContainer();

    return $container['section'];
  }

  public function blockManager() {
    return $this->container['blockManager'];
  }

  public function render() {
    return $this->container['render'];
  }

  public function optionsPanel( $menuSlug ) {
    return OptionsPanel::getInstance( $menuSlug );
  }

  public function presetManager() {
    return $this->container['presetManager'];
  }

  public function getOption() {

  }

}
