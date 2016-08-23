<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-22-16
 * Time: 07:04 PM
 */

namespace Davis\Core\Model;


use Davis\WorkSpace\Model\UserModel;

class Model {
	private $params = [];
	private $params2 = [];
	private static $table;
	private $Query;

	public function __construct() {
	}

	public static function Table($table) {
		return self::$table = $table;
	}

	public function where($params, $params2) {
		$this->params[] = $params;
		$this->params2[] = $params2;
		return $this;
	}

	public function orwhere($params, $params2) {
		$this->params[] = $params;
		$this->params2[] = $params2;
		return $this;
	}

	public function get() {
		$query_method = [];
		$params = implode(",", $this->params);
		$params2 = implode(",", $this->params2);
		$value = explode(',', $params);
		foreach ($value as $val => $k) {
			if (explode(',', $params2)) {
				$value2 = explode(',', $params2);
				$query_method[] = $k.'='. $value2[$val];
			}
		}
		$pull_apart = explode(',', implode(",", $query_method));
		$data = str_replace(',', ' AND ', implode(',', $pull_apart));
		$where = 'WHERE '. $data;
		$query = 'SELECT * FROM ' . self::$table . ' ' . $where;
		$this->Query = $query;
		echo $this->Query;
	}

}