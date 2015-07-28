<?php
/**
 * Class to proive simple API. No need to call chain method or complex query.
 */

abstract class Onepager {

	// Get the global option panel object
	public static function getOptionPanel()
	{
		return onepager()->optionsPanel("onepager");
	}
	// Get individual option
	public static function getOption($name, $default="")
	{
		return onepager()->optionsPanel('onepager')->getOption($name, $default);
	}
	// Register block folder
	public static function registerBlocks($folder = 'blocks')
	{
		onepager()->blockManager()->loadAllFromPath(
		  get_template_directory() . '/' . $folder,
		  get_template_directory_uri() . '/' . $folder
		);
	}

  public static function disableBlocks($groups="onepager") {
    onepager()->blockManager()->setIgnoredGroups($groups);
  }

  public static function disableTemplates($groups='onepager') {
    onepager()->layoutManager()->setIgnoredGroups($groups);
  }
}
