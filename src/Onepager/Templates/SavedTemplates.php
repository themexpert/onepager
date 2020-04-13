<?php namespace ThemeXpert\Onepager\Templates;


class SavedTemplates {

	
	
	public function loadAllSavedTemplates(  ) {
		// return 'Hello my lovely templates';
		$templates = txop_fetch_all_saved_templates();
		return $templates;
	}

	
}
