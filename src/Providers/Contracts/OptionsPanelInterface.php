<?php namespace ThemeXpert\Providers\Contracts;

interface OptionsPanelInterface {
  public function localizeScript();

  public function addMenuPage( $pageTitle, $menuTitle, $iconUrl );

  public function printMountNode();

//  public function get( $page, $index );

//  public function all();

//  public function set( $page, $index, $option );

//  public function save( $slug, $options );

  public function tab( $id, $name = null );

  public function add();

  public function getOptionsControls();
}
