<?php

namespace App\Assets;

use App\Assets\Traits\FormEngineScripts;

class BuildModeScripts
{
    use FormEngineScripts;

    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueueScripts'], 999999);
        add_action('wp_enqueue_scripts', function () {
            if (!$this->isBuildMode()) {
                return;
            }
            onepager()->asset()->enqueue();
        }, 1000000);
    }
    public function enqueueScripts()
    {
        if (!$this->isBuildMode()) {
            return;
        }
        $this->resetWpScriptQueue();
        $this->enqueueFormEngineScripts();
        $this->enqueueInitializerScript();
    }
    protected function enqueueInitializerScript()
    {
        $asset = onepager()->asset();
        $pageId = $this->getCurrentPageId();
        $data = $this->localizeScriptData($pageId);

        $asset->script('onepager', op_asset('assets/onepager-builder.bundle.js'), ['jquery'], ONEPAGER_VERSION, false);
        $asset->localizeScript('onepager', $data, 'onepager');
    }

    public function localizeScriptData($pageId)
    {
        $onepager = onepager();

        $pagePresets = onepager()->presetManager()->all();
        $footer = get_editor_section_list_footer();
        $ajaxUrl = $onepager->api()->getAjaxUrl();
        $getUpdatePlugins = $onepager->api()->getUpdatePlugins();
        $pluginUpdateUrl = get_admin_url(). 'plugins.php';
        $menus = $onepager->content()->getMenus();
        $categories = $onepager->content()->getCategories();
        $pages = $onepager->content()->getPages();
        $blocks = array_values((array) $onepager->blockManager()->all());
        $groupOrder = $onepager->blockManager()->getGroupOrder();
        // $savedTemplates = $onepager->templatesManager()->getAllSavedTemplates();
        $savedTemplates = $onepager->savedTemplates()->loadAllSavedTemplates();
        $woocategories = $onepager->content()->getWooCategories();

        $sections = array_map(function ($section) {
            $pageId = $this->getCurrentPageId();
            $pageOptionPanel = onepager()->optionsPanel('onepager')->getAllSavedPageOptions($pageId);

            $section = onepager()->render()->sectionBlockDataMerge($section);
            $section['content'] = onepager()->render()->section($section);
            $section['style'] = onepager()->render()->style($section);
            $section['page_style'] = onepager()->render()->pageStyle($section, $pageId, $pageOptionPanel);

            return $section;
        }, onepager()->section()->getAllValid($pageId));

        $disableBuildModeUrl = onepager_get_edit_mode_url(get_current_page_url(), false);
        $preview_link = get_preview_post_link($this->getCurrentPageId());

        $optionPanel = onepager()->optionsPanel('onepager')->getOptionsControls();
        $pageOptionPanel = onepager()->optionsPanel('onepager')->getPageOptionsControls($pageId);
        $options = onepager()->optionsPanel('onepager')->getAllSavedOptions();
        $pageSettingOptions = onepager()->optionsPanel('onepager')->getAllSavedPageOptions($pageId);
        $page = 'onepager';
        $dashboardUrl = get_dashboard_url().'edit.php?post_type=page';
        $onepagerProLoaded = did_action( 'onepager_pro_loaded' ) ? true : false;
        $proUpgradeLink = 'https://themesgrove.com/wp-onepager/?utm_source=wp-admin&utm_medium=dashboard&utm_campaign=wponepager-gopro';
        $presets = \Onepager::getPresets();
        $basePreset = \Onepager::getBasePreset();
        return compact(
            'ajaxUrl',
            'disableBuildModeUrl',
            'optionPanel',
            'pageOptionPanel',
            'options',
            'pageSettingOptions',
            'page',
            'blocks',
            'pageId',
            'sections',
            'menus',
            'pages',
            'categories',
            'groupOrder',
            'footer',
            'presets',
            'basePreset',
            'woocategories',
            'dashboardUrl',
            'onepagerProLoaded',
            'proUpgradeLink',
            'getUpdatePlugins',
            'pluginUpdateUrl',
            'preview_link',
            'savedTemplates',
            'pagePresets'
        );
    }

    /**
     * @return mixed
     */
    protected function isBuildMode()
    {
        return onepager()->content()->isBuildMode();
    }

    /**
     * @return mixed
     */
    protected function getCurrentPageId()
    {
        return onepager()->content()->getCurrentPageId();
    }

    private function resetWpScriptQueue()
    {
        wp_scripts()->queue = [];
        wp_styles()->queue = [];
    }
}
