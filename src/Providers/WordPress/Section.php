<?php namespace ThemeXpert\Providers\WordPress;


use ThemeXpert\Providers\Contracts\SectionInterface;

class Section implements SectionInterface {
  protected $sections;
  protected $ONEPAGER_SECTIONS = 'onepager_sections';

  public function get( $pageId, $index ) {
    $sections = $this->all( $pageId );

    return ( array_key_exists( $index, $sections ) ) ? $sections[ $index ] : null;
  }

  public function all( $pageId ) {
    if ( ! $this->sections ) {
      $this->sections = get_post_meta( $pageId, $this->ONEPAGER_SECTIONS, true );
    }

    return ! empty( $this->sections ) ? $this->sections : [ ];
  }

  public function getAllValid( $pageId ) {
    return $this->getAllValidFromSection($this->all($pageId));
  }

  public function getAllValidFromSection($sections){
    return array_filter( $sections, function ( $section ) {
      return array_key_exists( 'slug', $section )
             && array_key_exists( 'id', $section )
             && array_key_exists( 'title', $section );
    } );
  }

  public function set( $pageId, $index, $section ) {
    $sections           = $this->all( $pageId );
    $sections[ $index ] = $section;

    if ( $section ) {
      $this->save( $pageId, $sections );
    }
  }

  public function save( $pageId, $sections ) {
    update_post_meta( $pageId, $this->ONEPAGER_SECTIONS, $sections );
  }
}
