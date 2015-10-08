<?php namespace App\Api\Controllers;

class OptionsApiController extends ApiController {
  public function saveOptions() {
    $page    = array_get( $_POST, 'page', false );
    $options = array_get( $_POST, 'options', [ ] ) ?: [ ]; //making sure its an array
    $options = $this->filterInput( $options );

    onepager()->optionsPanel( $page )->update( $options );
    onepager()->render()->mergeSectionsAndSettings();

    $sections = array_get( $_POST, 'sections', [ ] ) ?: [ ]; //making sure its an array

    if ( count( $sections ) ) {
      $sections = $this->filterInput( $sections );
      $sections = onepager()->render()->mergeSectionsBlocksSettings( $sections );
      $this->responseSuccess( compact( 'sections' ) );
    } else {
      $this->responseSuccess();
    }
  }
}
