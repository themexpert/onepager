<?php namespace ThemeXpert\Providers\Contracts;

interface NavigationMenuInterface {
  public function getLastItemOrder( $menuId );

  public function addItem( $menuId, $itemTitle, $itemId );
}
