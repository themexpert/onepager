<?php
use ThemeXpert\Providers\WordPress\Api;


if ( is_admin() && defined( 'DOING_AJAX' ) && DOING_AJAX ) {

	$apiRouter = new Api();
	$apiRouter->post( 'onepager_save_options', 'App\Controllers\ApiController@saveOptions' );
	$apiRouter->post( 'save_sections', 'App\Controllers\ApiController@saveSections' );
	$apiRouter->post( 'onepager_menu_add', 'App\Controllers\ApiController@addMenu' );
	$apiRouter->post( 'onepager_add_page', 'App\Controllers\ApiController@addPage' );
	$apiRouter->post( 'onepager_get_sections', 'App\Controllers\ApiController@get_sections' );
	$apiRouter->post( 'onepager_select_layout', 'App\Controllers\ApiController@selectLayout' );

}