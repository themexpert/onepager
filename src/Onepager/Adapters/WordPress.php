<?php
namespace ThemeXpert\Onepager\Adapters;

use ThemeXpert\Providers\WordPress\Api;
use ThemeXpert\Providers\WordPress\Asset;
use ThemeXpert\Providers\WordPress\Content;
use ThemeXpert\Providers\WordPress\NavigationMenu;
use ThemeXpert\Providers\WordPress\Section;
use ThemeXpert\Providers\WordPress\Security;
use ThemeXpert\Providers\WordPress\Toolbar;
use ThemeXpert\Providers\WordPress\Opi18n;
// use ThemeXpert\Providers\WordPress\TemplateManager;


/**
 * @property  url
 */
class WordPress extends BaseAdapter {
	protected $url;
	protected $path;

	public function setContentProvider() {
		$this->container['content'] = function () {
			return new Content();
		};
	}

	public function setAssetProvider() {
		$this->container['asset'] = function () {
			return new Asset();
		};
	}

	public function setApiProvider() {
		$this->container['api'] = function () {
			return new Api();
		};
	}

	public function setHooksProvider() {
		// TODO: Implement setHooksProvider() method.
	}

	public function setToolbarProvider() {
		$this->container['toolbar'] = function () {
			return new Toolbar();
		};
	}

	public function setNavigationMenuProvider() {
		$this->container['navigationMenu'] = function () {
			return new NavigationMenu();
		};
	}

	public function setSecurityProvider() {
		$this->container['security'] = function () {
			return new Security();
		};
	}

	public function setSectionProvider() {
		$this->container['section'] = function () {
			return new Section();
		};
	}
	
	public function opi18nStrings() {
		$this->container['getopi18nstrings'] = function () {
			return new Opi18n();
		};
	}

	// public function setSavedTemplates(){
	// 	$this->container['templateManager'] = function () {
	// 		return new TemplateManager();
	// 	};
	// }
}
