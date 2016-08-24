<?php
/**
 * Created by PhpStorm.
 * User: Luis Solorzano
 * Date: 08-21-16
 * Time: 09:03 AM
 */

namespace Davis\Core\Thunder\Route;


use Davis\Core\Input\Input;

class RouterException extends \Exception{
	public function __construct($message, $code, \Exception $previous) {
		parent::__construct($message, $code, $previous);
	}

	public static function Input($input) {
			if (empty($input)) {
			echo $val = 'Los campos estan vacios';
			}

	}

}