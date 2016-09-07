<?php
/**
 * Created by PhpStorm.
 * User: Luis Solorzano
 * Date: 08-21-16
 * Time: 05:55 PM
 */

namespace Davis\Core\Views;


class Views {
	private static $root = 'app/WorkSpace/Views/';
	private static $ext = '.html.twig';

	public function __construct($root, $ext) {
		self::$root = $root;
		self::$ext = $ext;
	}

	public static function view($views, $array = []) {
			return self::validar($views, $array);
	}

	private function validar($views, $array = []) {
		$loader = new \Twig_Loader_Filesystem(self::$root);
	 	$Twig_Load = new \Twig_Environment($loader);
		$twig = '';
		if (!empty($views)) {
			$file = str_replace('', '', $views);
			if ($views) {
			 	$folder_file = str_replace('.', '/', $views);
				$twig =  $folder_file . self::$ext;
			} else {
				$twig = $file . self::$ext;
			}
		}
		return $Twig_Load->display($twig,$array);
	}

}
