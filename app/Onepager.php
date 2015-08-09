<?php
/**
 * Class to proive simple API. No need to call chain method or complex query.
 */

abstract class Onepager {

	// Get the global option panel object
  protected static $presets = [];

  public static function getOptionPanel()
	{
		return onepager()->optionsPanel("onepager");
	}
	// Get individual option
	public static function getOption($name, $default="")
	{
		return onepager()->optionsPanel('onepager')->getOption($name, $default);
	}
	// Register Custom Blocks Folder
	public static function registerBlocks($folder = 'blocks')
	{
		onepager()->blockManager()->loadAllFromPath(
		  get_template_directory() . '/' . $folder,
		  get_template_directory_uri() . '/' . $folder
		);
	}
	// Disable Any Blocks Group
  public static function disableBlocks( $groups ) {
    onepager()->blockManager()->setIgnoredGroups($groups);
  }
	// Disable all core blocks group = onepager
	public static function disableCoreBlocks()
	{
		self::disableBlocks('onepager');
	}
	// Register Preset Paths
	public static function registerPresets( $folder = 'presets')
	{
		onepager()->layoutManager()->loadAllFromPath(
			get_template_directory() . '/' . $folder,
			get_template_directory_uri() . '/' . $folder,
			"onepager"
		);
	}
	// Disable Any Presets Group
  public static function disablePresets($groups)
	{
    onepager()->layoutManager()->setIgnoredGroups($groups);
  }
	// Disable core presets
	public static function disableCorePresets()
	{
		self::disablePresets('onepager');
	}

  public static function addPresets($name, $presets){
    if(!array_key_exists($name, static::$presets)){
      static::$presets[$name] = [];
    }

    static::$presets[$name] = array_merge($presets, static::$presets[$name]);
  }

  public static function getPresets() {
    return static::$presets;
  }
}
