<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-24-16
 * Time: 07:31 AM
 */

namespace Davis\Core\Database;


class BaseDatabase extends \PDO{

	public function __construct($type,$host, $namedb, $user, $pass) {
		try {
			parent::__construct($type.":host=".$host.";dbname=".$namedb,$user,$pass);
			echo 'conectado';
		} catch (\PDOException $e) {
			echo 'Error in  the connection. Detail: ' . $e->getMessage();
			exit;
		}
	}

}