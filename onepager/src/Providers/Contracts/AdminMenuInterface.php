<?php
/**
 * Created by PhpStorm.
 * User: na
 * Date: 6/10/15
 * Time: 7:10 AM
 */
namespace ThemeXpert\Providers\Contracts;

interface AdminMenuInterface {
	public function add( $slug, $menuTitle, $pageTitle, $viewCallBack, $icon );
}
