<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-21-16
 * Time: 02:38 PM
 */

namespace Davis\WorkSpace\Controller;


use Davis\Core\Http\Session\Session;
use Davis\Core\Views\Views;
use Davis\WorkSpace\Model\UserModel;

class IndexController {

	public function __construct() {

	}

	public function Index() {
	  Session::set('user','Luis Solorzano');
	/*	Views::view('home.home');*/
		$user = new UserModel();
    $name = $user->where('name', 'luis')->get();
    $data = $user->where('user', 'solorzano')->union($name)->get();
    var_dump($data);
		/*$data = $user->compare('name','=','luis')->compare('user','=','solorzano')->check();
		if ($data == TRUE) {
			echo 'es verdadero<br><br>';
      echo 'User: ' .Session::get('user');
		} else {
			echo 'es falso';
		}*/
		//$data = $user->where('name', 'luis')->orwhere('user', 'solorzano')->get();
	/*	echo $data = $user->count();*/
		/*foreach($data as $obj){
			echo $obj['name']. ' '. $obj['user'];
		}*/

/*		var_dump($data);*/

	}

	public function Index_Value() {
		$autor = 'Luis Solorzano';
		$david = 'David Paredes';
		Views::view('twig', ['autor'=>$autor, 'david'=>$david]);
	}

	public function Index_GET() {
		Views::view('form.post');
	}

	public function Index_Post() {
		/*$form = Input::get('form');
		$data = Input::get('data');
		echo $form.' '.$data;*/
		$data = new UserModel();
		$data->where('name', 'david')->where('test2', 'luis')->where('test3', 'yajaira')->orwhere('test4','jose')->get();
	}

}