<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-21-16
 * Time: 02:38 PM
 */

namespace Davis\WorkSpace\Controller;


use Davis\Core\Input\Input;
use Davis\Core\Views\Views;
use Davis\WorkSpace\Database\Database;
use Davis\WorkSpace\Model\UserModel;

class IndexController {

	public function __construct() {

	}

	public function Index() {
		Views::view('home.home');
	}

	public function Index_Value() {
		$autor = 'Luis Solorzano';
		$david = 'David Paredes';
		Views::view('twig', array('autor'=>$autor, 'david'=>$david));
	}

	public function Index_GET() {
		Views::view('form.post');
	}

	public function Index_Post() {
		/*$form = Input::get('form');
		$data = Input::get('data');
		echo $form.' '.$data;*/
		$data = new UserModel();
		$data->where('test1', 'david')->where('test2', 'luis')->where('test3', 'yajaira')->orwhere('test4','jose')->get();
	}

}