<?php namespace ThemeXpert\Onepager\Templates;


class SavedTemplates {

	/**
	 * get all saved template from db
	 */
	public function loadAllSavedTemplates(  ) {
		$templates = txop_fetch_all_saved_templates();
		return $templates;
	}

	
}
