<?php
/**
 * Plugin Name:       onepager
 * Plugin URI:        http://themexpert.com/wordpress-plugins/xpert-extender
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            ThemeXpert
 * Author URI:        http://www.themexpert.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       onepager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'ONEPAGER_URL', plugins_url( '/', __FILE__ ) );
define( 'ONEPAGER_PATH', __DIR__);

require('app/bootstrap.php');