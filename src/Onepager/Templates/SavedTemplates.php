<?php namespace ThemeXpert\Onepager\Templates;


class SavedTemplates {

	/**
	 * get all saved template from db
	 */
	public function loadAllSavedTemplates(  ) {
		$templates = txop_fetch_all_saved_templates();
		$filteredTemplates = array_filter($templates, function($template){
			$new_data = unserialize($template->data);
			$template->data = $new_data;
			return $template;
		});
		return $filteredTemplates;
	}
	public function serializeSavedTemplateData($singleTemplate){

	}
	public function loadAllPagePresets(  ) {
		$pagePresets = onepager()->presetManager()->all();
		;
		return $pagePresets;
	}

	
}
