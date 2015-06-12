<?php
namespace ThemeXpert\Providers\Contracts;

interface ContentInterface {
	public function getCurrentPageId();

	public function isOnepage();

	public function isLiveMode();

	public function getPages();

	public function getPosts();

	public function getMenus();

	public function getCategories();

	public function getMenuLocations();
}
