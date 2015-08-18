<?php namespace ThemeXpert\Onepager\Adapters;

use Pimple\Container;

abstract class BaseAdapter implements AdapterInterface {
  protected $url;
  protected $path;

  public final function __construct( Container $container, $path, $url ) {
    $this->container = $container;
    $this->path      = $path;
    $this->url       = $url;
    $this->setProviders();
  }

  final function setProviders() {
    $this->setNavigationMenuProvider();
    $this->setSecurityProvider();
    $this->setContentProvider();
    $this->setToolbarProvider();
    $this->setAssetProvider();
    $this->setHooksProvider();
    $this->setApiProvider();
    $this->setSectionProvider();
  }

  public function getContainer() {
    return $this->container;
  }

  public function getUrl() {
    return $this->url;
  }

  public function getPath() {
    return $this->path;
  }
}
