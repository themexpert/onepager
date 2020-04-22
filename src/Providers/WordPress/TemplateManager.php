<?php  namespace ThemeXpert\Providers\WordPress;

use ThemeXpert\Providers\Contracts\TemplatesInterface;


class TemplateManager implements TemplatesInterface {

	
    public function getAllSavedTemplates(){
        return '<h2>I am saved templates</h2>';
    }
    public function getAllSavedSection(){

    }
    public function getAllSavedPages(){

    }

	
}
