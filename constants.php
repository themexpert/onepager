<?php

if(!defined('ONEPAGER_URL')){
  define( 'ONEPAGER_URL', plugins_url( '', __FILE__ ) );
}

define( 'ONEPAGER_PATH', dirname( __FILE__ ) );
define( 'ONEPAGER_PRESETS_PATH', ONEPAGER_PATH . "/presets" );
define( 'ONEPAGER_PRESETS_URL', ONEPAGER_URL . "/presets" );
define( 'ONEPAGER_BLOCKS_PATH', ONEPAGER_PATH . "/blocks" );
define( 'ONEPAGER_BLOCKS_URL', ONEPAGER_URL . "/blocks" );
define( 'ONEPAGER_THEME_PATH', get_stylesheet_directory() . "/onepager" );
define( 'ONEPAGER_THEME_URL', get_stylesheet_directory_uri() . "/onepager" );
define( 'ONEPAGER_CACHE_DIR', WP_CONTENT_DIR . '/cache' );
define( 'ONEPAGER_CACHE_URL', content_url( 'cache' ) );
