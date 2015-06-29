<?php
/**
 * Plugin Name:       OnePager
 * Plugin URI:        http://themexpert.com/wordpress-plugins/xpert-extender
 * Description:       Onepage Builder that helps you to make one page website seamlessly. Beautifully
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
define( 'ONEPAGER_PATH', dirname(__FILE__));

require('app/bootstrap.php');