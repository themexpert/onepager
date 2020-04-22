<?php namespace ThemeXpert\Onepager\Templates;
use App\Assets\BlocksScripts;


class SavedTemplates {

	/**
	 * get all saved template from db
	 */
	public function loadAllSavedTemplates(  ) {
		$blockScripts = new BlocksScripts();

		$templates = txop_fetch_all_saved_templates();
		$filteredTemplates = array_filter($templates, function($template) use($blockScripts){
			$unserialize_data = unserialize($template->data);
			// $data = $blockScripts->convertSavedSections( $unserialize_data );
			$template->data = $unserialize_data;
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
