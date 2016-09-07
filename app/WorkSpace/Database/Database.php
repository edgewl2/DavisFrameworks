<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-24-16
 * Time: 07:30 AM
 */

namespace Davis\WorkSpace\Database;


use Davis\Core\Database\BaseDatabase;

class Database extends \PDO{
	private $type = 'mysql';
	private $host = 'davisf.dev';
	private $dbname = 'davisframe';
	private $user = 'root';
	private $pass = 'root';

	public function __construct() {
		try {
			parent::__construct($this->type.":host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
		} catch (\PDOException $e) {
			echo 'Error in  the connection. Detail: ' . $e->getMessage();
			exit;
		}
	}
}