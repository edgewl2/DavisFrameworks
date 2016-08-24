<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-24-16
 * Time: 07:30 AM
 */

namespace Davis\WorkSpace\Database;


use Davis\Core\Database\BaseDatabase;

class Database extends BaseDatabase{
	private $type = 'mysql';
	private $host = 'localhost';
	private $dbname = 'davisframe';
	private $user = 'root';
	private $pass = 'root';


	public function __construct() {
		$this->DBArray();
	}

	private function DBArray() {

		$db = new BaseDatabase($this->type, $this->host,$this->dbname, $this->user, $this->pass);
		return $db;


	}

}