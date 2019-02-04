<?php
/**
 * Plugin Name:       OnePager
 * Plugin URI:        https://themesgrove.com/onepager
 * Description:       The best and most easiest, beginner friendly landing page builder. Create one page website faster than ever.
 * Version:           2.0.1
 * Author:            Themesgrove
 * Author URI:        https://themesgrove.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tx-onepager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

if(!defined('ONEPAGER_VERSION')){
  define( 'ONEPAGER_VERSION', '2.0.1' );
}

if(!defined('ONEPAGER_PHP_VERSION')) {
  define( 'ONEPAGER_PHP_VERSION', '5.4' );
}

require(dirname(__FILE__)."/constants.php");

function onepager_php_version_check() {
  if ( ! version_compare( PHP_VERSION, ONEPAGER_PHP_VERSION, '<' ) ) {
    return;
  }

  $notice =
    'You are running ancient version of PHP-<strong>%s</strong>.
    Onepager requires at least PHP <strong>%s</strong> to run smoothly.
    <br/>Please update your PHP version to run this plugin and keep you website secure.';

  wp_die( sprintf( $notice, PHP_VERSION, ONEPAGER_PHP_VERSION ) );
}

onepager_php_version_check();


require( ONEPAGER_PATH . '/app/inc/support.php' );
require( ONEPAGER_PATH . '/src/functions.php' );
require( ONEPAGER_PATH . '/src/theme_helpers.php' );
require( ONEPAGER_PATH . '/vendor/autoload.php' );

require( ONEPAGER_PATH . '/app/Onepager.php' );
require( ONEPAGER_PATH . '/app/bootstrap.php' );

require( ONEPAGER_PATH . '/app/Api/routes.php' );
require( ONEPAGER_PATH . '/app/OptionsPanel/settings.php' );
require( ONEPAGER_PATH . '/app/Metabox/metabox.php' );
require( ONEPAGER_PATH . '/app/Admin/menu.php' );
require( ONEPAGER_PATH . '/app/Admin/notice.php' );


add_action('wp_head', 'print_onepager_meta');
function print_onepager_meta() {
  echo "<meta name='generator' content='WP OnePager ". ONEPAGER_VERSION ."'>";
}

do_action('onepager_loaded');

// Activation hook
register_activation_hook(__FILE__, 'onepager_activation_hook');

/**
 * redirect to the installation page
 * after active the plugin
 */
add_action('admin_init', 'onepager_redirect');
function onepager_activation_hook() {
    add_option('onepager_activated', true);
}
function onepager_redirect() {
    if (get_option('onepager_activated', false)) {
        delete_option('onepager_activated');
        wp_redirect(admin_url( 'admin.php?page=onepager-getting-started' ));
    }
}