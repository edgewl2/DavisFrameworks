<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-21-16
 * Time: 02:38 PM
 */

namespace Davis\WorkSpace\Controller;


class IndexController {
	public function __construct() {
	}

	public function Index() {
		echo 'estas en IndexController';
	}

	public function Index_Value($id) {
		echo $id;
	}

}