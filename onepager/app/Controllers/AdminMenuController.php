<?php
/**
 * Created by PhpStorm.
 * User: na
 * Date: 6/10/15
 * Time: 12:40 PM
 */

namespace App\Controllers;


class AdminMenuController {
	public function getIndex() {
		include dirname(__FILE__)."/../views/admin.tpl.php";
	}
}
