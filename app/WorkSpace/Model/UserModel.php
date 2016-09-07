<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-22-16
 * Time: 07:05 PM
 */

namespace Davis\WorkSpace\Model;


use Davis\Core\Model\Model;

class UserModel extends Model{
	private $table = 'users';

	public function __construct() {
		$this->setTable();
	}

	private function setTable() {
		Model::Table($this->table);
	}


}