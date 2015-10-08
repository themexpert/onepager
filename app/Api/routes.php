<?php
use ThemeXpert\Providers\WordPress\Api;


if ( is_admin() && defined( 'DOING_AJAX' ) && DOING_AJAX ) {

  $apiRouter = new Api();
  $apiRouter->post( 'onepager_save_options', 'App\Api\Controllers\OptionsApiController@saveOptions' );
  $apiRouter->post( 'onepager_add_menu', 'App\Api\Controllers\MenuApiController@addMenu' );

  $apiRouter->post( 'onepager_save_sections', 'App\Api\Controllers\SectionsApiController@saveSections' );
  $apiRouter->post( 'onepager_get_sections', 'App\Api\Controllers\SectionsApiController@getSections' );
  $apiRouter->post( 'onepager_reload_sections', 'App\Api\Controllers\SectionsApiController@reloadSections' );

  $apiRouter->post( 'onepager_reload_blocks', 'App\Api\Controllers\BlocksApiController@reloadBlocks' );

  $apiRouter->post( 'onepager_select_layout', 'App\Api\Controllers\PageApiController@selectLayout' );
  $apiRouter->post( 'onepager_add_page', 'App\Api\Controllers\PageApiController@addPage' );
}
