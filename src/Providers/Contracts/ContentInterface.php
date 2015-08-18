<?php
namespace ThemeXpert\Providers\Contracts;

interface ContentInterface {
  public function getCurrentPageId();

  public function isOnepage();

  public function isBuildMode();

  public function getPages();

  public function getPosts();

  public function getMenus();

  public function getCategories();

  public function getMenuLocations();
}
