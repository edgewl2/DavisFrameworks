<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-21-16
 * Time: 10:11 AM
 */

namespace Davis\Core\Thunder\Route;


class Route {
	private $path;
	private $callable;
	private $matches;

	public function __construct($path, $callable) {
		$this->path = trim($path, '/');
		$this->callable = $callable;
	}

	public function match($url) {
		$url = trim($url, '/');
		$path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
		$regex = "#^$path$#i";

		if (!preg_match($regex, $url, $matches)) {
			return FALSE;
		}
		array_shift($matches);
		$this->matches = $matches;
		return TRUE;
	}

	public function call() {
		return call_user_func_array($this->callable,$this->matches);
	}


}