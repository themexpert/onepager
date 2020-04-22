<?php 
namespace ThemeXpert\Providers\Contracts;

interface TemplatesInterface {
    public function getAllSavedTemplates();
    public function getAllSavedSection();
    public function getAllSavedPages();
}
