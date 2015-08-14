<?php
/**
 * Plugin Name:       TX OnePager
 * Plugin URI:        http://themexpert.com/wordpress-plugins/xpert-wponepager
 * Description:       Onepage Builder that helps you to make one page website seamlessly. Beautifully
 * Version:           1.0.0
 * Author:            ThemeXpert
 * Author URI:        http://www.themexpert.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tx-onepager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

define('ONEPAGER_PHP_VERSION', '5.4');

function onepager_php_version_check()
{
  if (version_compare(PHP_VERSION, ONEPAGER_PHP_VERSION, '<'))
  {
    wp_die(sprintf('You are running ancient version of PHP-<strong>%s</strong>. Onepager requires at least PHP <strong>%s</strong> to run smoothly. <br/>Please update your PHP version to run this plugin and keep you website secure.', PHP_VERSION, ONEPAGER_PHP_VERSION));
  }
}
// PHP Version check
onepager_php_version_check();

define('ONEPAGER_VERSION', '1.0');
define('ONEPAGER_URL', plugins_url('', __FILE__));
define('ONEPAGER_PATH', dirname(__FILE__));

define('ONEPAGER_PRESETS_PATH', ONEPAGER_PATH . "/presets");
define('ONEPAGER_PRESETS_URL', ONEPAGER_URL . "/presets");
define('ONEPAGER_BLOCKS_PATH', ONEPAGER_PATH . "/blocks");
define('ONEPAGER_BLOCKS_URL', ONEPAGER_URL . "/blocks");
define('ONEPAGER_THEME_PATH', get_stylesheet_directory() . "/onepager");
define('ONEPAGER_THEME_URL', get_stylesheet_directory_uri() . "/onepager");


if(!defined('ONEPAGER_DEBUG')){
  define('ONEPAGER_DEBUG', true);
}

//require autoloading files
require(ONEPAGER_PATH . '/src/functions.php');
require(ONEPAGER_PATH . '/vendor/autoload.php');
require(ONEPAGER_PATH . '/app/bootstrap.php');
require(ONEPAGER_PATH . '/app/Onepager.php');
require(ONEPAGER_PATH . '/app/routes.php');
require(ONEPAGER_PATH . '/app/assets.php');
require(ONEPAGER_PATH . '/app/settings.php');
require(ONEPAGER_PATH . '/app/frontend.php');
require(ONEPAGER_PATH . '/app/metabox.php');
require(ONEPAGER_PATH . '/app/dashboard.php');
