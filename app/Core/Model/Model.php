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
	private $db_query = [];
	private static $table;
	private $Query;

	public function __construct() {
	}

	public static function Table($table) {
		return self::$table = $table;
	}

	public function where($params, $params2) {
		$this->db_query[] = ' AND '. $params .'=:' . $params2;
		return $this;
	}

	public function orwhere($params, $params2) {
		$this->db_query[] = ' OR '. $params .'=:' . $params2;
		return $this;
	}

	public function delete($params) {
		$this->db_query[] = ' like '. $params;
		return $this;
	}

	public function like($params) {
		$this->db_query[] = ' like '. $params;
		return $this;
	}

	public function get() {
		$params = implode(",", $this->db_query);
		$where = 'WHERE '. $params;
		$query = 'SELECT * FROM ' . self::$table . ' ' . $where;
		$this->Query = $query;
		echo $this->Query;
	}


}