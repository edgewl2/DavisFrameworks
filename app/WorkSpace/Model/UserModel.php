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
	private $table = 'user';

	public function __construct() {
		$this->setTable();
	}

	public function setTable() {
		Model::Table($this->table);
	}




}