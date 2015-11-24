<?php
/**
 * Plugin Name:       Onepager - One Page Builder
 * Plugin URI:        http://getonepager.com
 * Description:       Modern, Powerful & Crazy Fast one page builder. Built with modern tools such ReactJS for next generation theming.
 * Version:           1.2.5
 * Author:            ThemeXpert
 * Author URI:        http://www.themexpert.com
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
  define( 'ONEPAGER_VERSION', '1.2.5' );
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


add_action('wp_head', 'print_onepager_meta');
function print_onepager_meta() {
  echo "<meta type='page-builder' content='tx-onepager'>";
}

do_action('onepager_loaded');
