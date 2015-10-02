<?php namespace ThemeXpert\FileSystem;

use DirectoryIterator;

class FileSystem {
  public static function folders( $path ) {
    $folders = array();

    foreach ( new DirectoryIterator( $path ) as $file ) {
      if ( $file->isDot() ) {
        continue;
      }

      if ( $file->isDir() ) {
        $folders[] = $file->getFilename();
      }
    }

    return $folders;
  }

  /**
   * if extension is given returns an array of files with that
   * extension
   * @param  $path
   * @param null $ext
   *
   * @return array
   */
  public static function files( $path, $ext=null ) {
    $files = scandir( $path );

    $files = array_filter( $files, function ( $file ) {
      return substr( $file, 0, 1 ) !== ".";
    } );

    if(!$ext) return $files;

    return array_filter( $files, function ( $file ) {
      $fileInfo = pathinfo( $file );

      return $fileInfo['extension'] === "json";
    } );
  }

  public static function exists( $file ) {
    return file_exists( $file );
  }

}
