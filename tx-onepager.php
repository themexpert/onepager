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
register_activation_hook(__FILE__, 'onepager_php_version_check');
function onepager_php_version_check()
{
  if (version_compare(PHP_VERSION, ONEPAGER_PHP_VERSION, '<')) {
    $text = 'Onepager requires PHP %s or higher to run. Your website PHP version is %s. Please update your PHP version';
    $text .= 'in order to run this plugin. Updating PHP won\'t not harm your website,';
    $text .= 'in-fact it will boost your website speed.';

    exit(sprintf($text, ONEPAGER_PHP_VERSION, PHP_VERSION));
  }
}

define('ONEPAGER_URL', plugins_url('', __FILE__));
define('ONEPAGER_PATH', dirname(__FILE__));

define('ONEPAGER_PRESETS_PATH', ONEPAGER_PATH . "/presets");
define('ONEPAGER_PRESETS_URL', ONEPAGER_URL . "/presets");
define('ONEPAGER_BLOCKS_PATH', ONEPAGER_PATH . "/blocks");
define('ONEPAGER_BLOCKS_URL', ONEPAGER_URL . "/blocks");


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

do_action('onepager_init');


//Onepager::disableBlocks("onepager");
//Onepager::disableTemplates("onepager");
