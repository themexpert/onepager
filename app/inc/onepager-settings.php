<?php

/**
 * Get wedevs settings API instance.
 *
 * @return void
 */
function getWeDevsSettingAPI()
{
    global $weDevsSettingsApi;

    if (isset($weDevsSettingsApi)) {
        return $weDevsSettingsApi;
    }

    return $weDevsSettingsApi = new WeDevs_Settings_API();
}

/**
 * Registering onepager settings.
 *
 * @param array $tabs
 * @param array $fields
 * @return void
 */
function onepagerSettings($tabs, $fields)
{
    add_action('admin_init', function () use ($tabs, $fields) {
        $settings_api = getWeDevsSettingAPI();

        //set sections and fields
        $settings_api->set_sections($tabs);
        $settings_api->set_fields($fields);

        //initialize them
        $settings_api->admin_init();
    });
}

/**
* Register the plugin page
*/
function onepager_admin_menu()
{
    add_options_page('Settings API', 'Settings API', 'delete_posts', 'settings_api_test', 'onepager_settings_page');
}

add_action('admin_menu', 'onepager_admin_menu');

/**
* Display the plugin settings options page
*/
function onepager_settings_page()
{
    $settings_api = getWeDevsSettingAPI();

    echo '<div class="wrap onepager-dashboard-settings">';
    settings_errors();

    $settings_api->show_navigation();
    $settings_api->show_forms();

    echo '</div>';
}

/**
* Get the value of a settings field
*
* @param string $option settings field name
* @param string $section the section name this field belongs to
* @param string $default default text if it's not found
* @return mixed
*/
function get_onepager_option($option, $section, $default = '')
{
    $options = get_option($section);

    if (isset($options[$option])) {
        return $options[$option];
    }

    return $default;
}
