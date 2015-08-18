<?php
/**
 * Created by PhpStorm.
 * User: na
 * Date: 6/12/15
 * Time: 5:42 AM
 */

namespace ThemeXpert\Providers\Contracts;


interface SectionInterface {
  public function get( $id, $index );

  public function set( $id, $index, $section );

  public function all( $id );

  public function save( $id, $sections );
}
