<?php namespace ThemeXpert\View\Engines;

interface EngineInterface {

	/**
	 * Get the evaluated contents of the view.
	 *
	 * @param  string $path
	 * @param  array  $data
	 *
	 * @return string
	 */
	public function get( $path, array $data = array() );
	public function getPageStyle( $path, array $data = array(), $pageId, $pageOptionPanel );
	public function getPageStyleLive( $sectionId, $pageId, $pageOptionPanel );

}
