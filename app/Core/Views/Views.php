<?php
/**
 * Created by PhpStorm.
 * User: Luis Solorzano
 * Date: 08-21-16
 * Time: 05:55 PM
 */

namespace Davis\Core\Views;


class Views {
	private static $layouts = 'app/WorkSpace/Views/layouts/app.temp.php';
	private static $root = 'app/WorkSpace/Views/';
	private static $ext = '.temp.php';

	public function __construct() {
	}

	public static function view($views) {
			$GLOBALS['content'] = self::validar($views);
			return include_once self::$layouts;
	}

	private function validar($views) {
		$temp = '';
		if (!empty($views)) {
			$file = str_replace('', '', $views);
			if ($views) {
			 	$folder_file = str_replace('.', '/', $views);
				$temp = self::$root . $folder_file . self::$ext;
			} else {
				$temp = self::$root . $file . self::$ext;
			}
		}
		return $temp;
	}

}
