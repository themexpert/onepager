<?php

abstract class Onepager {
	public static function getOptionPanel()
	{
		return onepager()->optionsPanel("onepager");
	}
	public static function getOption($name, $default="")
	{
		return onepager()->optionsPanel('onepager')->getOption($name, $default);
	}
}