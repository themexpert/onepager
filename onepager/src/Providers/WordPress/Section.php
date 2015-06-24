<?php
/**
 * Created by PhpStorm.
 * User: na
 * Date: 6/12/15
 * Time: 5:44 AM
 */

namespace ThemeXpert\Providers\WordPress;


use ThemeXpert\Providers\Contracts\SectionInterface;

class Section implements SectionInterface {
	protected $sections;
	protected $ONEPAGER_SECTIONS = 'onepager_sections';

	public function get( $pageId, $index ) {
		$sections = $this->all( $pageId );

		return ( array_key_exists( $index, $sections ) ) ? $sections[ $index ] : null;
	}

	public function all( $pageId ) {
		//delete_post_meta( $pageId, $this->ONEPAGER_SECTIONS);

		if ( ! $this->sections ) {
			$this->sections = get_post_meta( $pageId, $this->ONEPAGER_SECTIONS, true );
		}

		return ! empty( $this->sections ) ? $this->sections : [ ];
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
