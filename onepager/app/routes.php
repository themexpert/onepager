<?php
use ThemeXpert\Providers\WordPress\Api;

$apiRouter = new Api();

$apiRouter->post( 'save_sections', 'App\Controllers\ApiController@saveSections' );
$apiRouter->post( 'onepager_menu_add', 'App\Controllers\ApiController@addMenu' );
