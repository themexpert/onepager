<?php

/**
 * Class to proive simple API. No need to call chain method or complex query.
 */
abstract class Onepager {

  // Get the global option panel object
  protected static $presets = [ ];
  protected static $basePreset;

  public static function getOptionPanel() {
    return onepager()->optionsPanel( "onepager" );
  }

  // Get individual option
  public static function getOption( $name, $default = "" ) {
    return onepager()->optionsPanel( 'onepager' )->getOption( $name, $default );
  }

  /**
   * Deprecated from 1.1.4
   * Will be removed in 1.2
   *
   * @param string $folder
   */
  public static function registerBlocks( $folder = 'blocks' ) {

  }

  // Disable Any Blocks Group
  public static function disableBlocks( $groups ) {
    onepager()->blockManager()->setIgnoredGroups( $groups );
  }

  // Disable all core blocks group = onepager
  public static function disableCoreBlocks() {
    self::disableBlocks( 'Onepager (plugin)' );
  }

  /**
   * Deprecated from 1.1.4
   * Will be removed in 1.2
   *
   * @param string $folder
   */
  public static function registerPresets( $folder = 'presets' ) {

  }

  // Disable Any Presets Group
  public static function disablePresets( $groups ) {
    onepager()->presetManager()->setIgnoredGroups( $groups );
  }

  // Disable core presets
  public static function disableCorePresets() {
    self::disablePresets( 'Onepager (plugin)' );
  }

  public static function addPresets( $name, $presets ) {
    if ( ! array_key_exists( $name, static::$presets ) ) {
      static::$presets[ $name ] = [ ];
    }

    static::$presets[ $name ] = array_merge( $presets, static::$presets[ $name ] );
  }

  public static function getPresets() {
    return static::$presets;
  }

  // Add style
  public static function addStyle( $name, $src = false, $dependency = [ ], $version = ONEPAGER_VERSION, $media = 'all' ) {
    onepager()->asset()->style( $name, $src, $dependency, $version, $media );
  }

  // Add script
  public static function addScript( $name, $src = false, $dependency = [ ], $version = ONEPAGER_VERSION, $footer = true ) {
    onepager()->asset()->script( $name, $src, $dependency, $version, $footer );
  }

  public static function basePreset( $array ) {
    static::$basePreset = $array;
  }

  public static function getBasePreset() {
    return static::$basePreset;
  }

}
