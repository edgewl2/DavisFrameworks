<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-21-16
 * Time: 02:38 PM
 */

namespace Davis\WorkSpace\Controller;


use Davis\Core\Views\Views;

class IndexController {

	public function __construct() {
	}

	public function Index() {
		 Views::view('home.home');
	}

	public function Index_Value() {
		Views::view('davis.form');
	}

	public function Index_Post($id) {
		Views::view('davis.form');
	}

}