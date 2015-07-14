<?php

add_action('admin_menu', 'tx_add_dashboard_page');
add_action('admin_menu', 'tx_add_tutorials_page');
add_action('admin_menu', 'tx_rename_onepager_dashboard_submenu_name');
add_action('admin_enqueue_scripts', 'tx_add_onepager_dashboard_scripts');
tx_add_onepager_options_page();

function tx_add_dashboard_page()
{
  $icon = onepager()->url('assets/images/logo-white.png');

  $template = function () {
    include __DIR__ . "/views/dashboard-page.php";
  };

  add_menu_page(
    'Onepager Dashboard',
    'Onepager',
    'edit_theme_options',
    'onepager-dashboard',
    $template,
    $icon,
    4
  );
}

function tx_add_tutorials_page()
{
  $template = function () {
    include __DIR__ . "/views/tutorial-page.php";
  };

  add_submenu_page(
    'onepager-dashboard',
    'Onepager Tutorial',
    'Tutorial',
    'edit_theme_options',
    'onepager-tutorial',
    $template
  );
}

function tx_add_onepager_options_page()
{
  onepager()->optionsPanel("onepager")->addSubMenuPage(
    "onepager-dashboard",
    "Onepager Global Options",
    "Global Options"
  );
}

function tx_rename_onepager_dashboard_submenu_name(){
    global $submenu;
    $submenu['onepager-dashboard'][0][0] = __('Dashboard', 'onepager');
}

function tx_add_onepager_dashboard_scripts()
{
  wp_enqueue_script("lithium-builder", asset("assets/css/lithium-builder.css"));

//  $dashboard = endsWith(get_current_screen()->id, "_page_onepager-");
//  if (!$dashboard) return;
}
