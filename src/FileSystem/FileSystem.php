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

	public static function files($path){
		$files = scandir($path);

		return array_map(function($file){
			return substr($file, 0, 0) !== ".";
		},$files);
	}

	public static function exists( $file ) {
		return file_exists( $file );
	}

}
