<?php namespace ThemeXpert\Onepager\Adapters;

interface AdapterInterface {
  public function setNavigationMenuProvider();

  public function setSecurityProvider();

  public function setToolbarProvider();

  public function setContentProvider();

  public function setHooksProvider();

  public function setAssetProvider();

  public function setApiProvider();

  public function setSectionProvider();

  public function getPath();

  public function getUrl();

}
