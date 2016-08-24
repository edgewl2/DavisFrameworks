<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-24-16
 * Time: 07:31 AM
 */

namespace Davis\Core\Database;


class BaseDatabase {

	public function __construct($type, $host, $namedb, $user, $pass) {
		try {
			parent::__construct($type.':host='.$host. ';dbname='.$namedb, $user, $pass);
		} catch (\PDOException $e) {
			echo 'It has emerged an error and can not connect to the database. Detail: ' . $e->getMessage();
			exit;
		}
	}

}