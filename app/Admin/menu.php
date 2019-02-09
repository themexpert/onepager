<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
// Register admin menu
add_action('admin_menu', 'register_admin_menu', 20);

function register_admin_menu()
{
    //Icon
    $icon = onepager()->url('assets/images/logo-white.png');
    // Getting Started page
    $template = function () {
        include __DIR__ . '/views/getting-started.php';
    };
    add_menu_page(
    __('OnePager', 'onepager'),
    __('OnePager', 'onepager'),
    'manage_options',
    'onepager',
    $template,
    $icon,
    '58.5'
  );
}

// Register Help menu
add_action('admin_menu', 'register_submenu', 501);
function register_submenu()
{
    add_submenu_page(
    'onepager',
    __('Welcome to OnePager', 'onepager'),
    __('Getting Started', 'onepager'),
    'manage_options',
    'onepager-getting-started',
    function () {
        include __DIR__ . '/views/getting-started.php';
    }
  );
    // add_submenu_page(
    //   'onepager',
    //   '',
    //   __( 'Knowledge Base', 'onepager' ),
    //   'manage_options',
    //   'go_knowledge_base_site',
    //   [ $this, 'handle_external_redirects' ]
    // );
    add_submenu_page(
    'onepager',
    '',
    '<span class="dashicons dashicons-star-filled" style="font-size: 17px"></span> ' . __('Go Pro', 'onepager'),
    'manage_options',
    'onepager-gopro',
    'handle_external_redirects'
  );
}
// Redirect
add_action('admin_init', 'on_admin_init');
function on_admin_init()
{
    handle_external_redirects();
}
function handle_external_redirects()
{
    if (empty($_GET['page'])) {
        return;
    }
    if ('onepager-gopro' === $_GET['page']) {
        wp_redirect('https://themesgrove.com/wp-onepager/?utm_source=wp-menu&utm_campaign=wponepager_gopro&utm_medium=wp-dash');
        exit;
    }
    if ('go_knowledge_base_site' === $_GET['page']) {
        wp_redirect('');
        die;
    }
}

// Load css
add_action('admin_enqueue_scripts', 'onepager_load_admin_scripts');
function onepager_load_admin_scripts()
{
    //add builder.css so icons and other stuff styles
    wp_enqueue_style('bootstrap-datepicker', op_asset('assets/css/bootstrap-datepicker.css'));
    wp_enqueue_style('bootstrap-datepicker', op_asset('assets/css/bootstrap-timepicker.css'));
    wp_enqueue_style('uikit', op_asset('assets/css/uikit.css'));
    wp_enqueue_style('lithium-builder', op_asset('assets/css/lithium-builder.css'));
}

// add_action('admin_menu', 'tx_add_dashboard_page');
// add_action('admin_menu', 'tx_add_tutorials_page');
// // add_action('admin_menu', 'tx_rename_onepager_dashboard_submenu_name');
// add_action( 'admin_enqueue_scripts', 'tx_add_onepager_dashboard_scripts' );
// tx_add_onepager_options_page();

// function tx_add_dashboard_page() {
//   $icon = onepager()->url( 'assets/images/logo-white.png' );

//   $template = function () {
//     include __DIR__ . "/views/dashboard-page.php";
//   };

//   add_menu_page(
//     'Onepager Dashboard',
//     'Onepager',
//     'edit_theme_options',
//     'onepager-dashboard',
//     $template,
//     $icon,
//     4
//   );
// }

// function tx_add_tutorials_page() {
//   $template = function () {
//     include __DIR__ . "/views/tutorial-page.php";
//   };

//   add_submenu_page(
//     'onepager-dashboard',
//     'Onepager Tutorial',
//     'Tutorial',
//     'edit_theme_options',
//     'onepager-tutorial',
//     $template
//   );
// }

// function tx_add_onepager_options_page() {
//   $icon = onepager()->url( 'assets/images/logo-white.png' );

//   onepager()->optionsPanel( "onepager" )->addMenuPage(
//     "Onepager Global Options",
//     "Global Options",
//     $icon,
//     3
//   );
// }

// function tx_rename_onepager_dashboard_submenu_name() {
//   global $submenu;

//   //rename onepager to dashboard in menu
//   $submenu['onepager-dashboard'][0][0] = __( 'Dashboard', 'onepager' );
// }
