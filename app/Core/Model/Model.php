<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-22-16
 * Time: 07:04 PM
 */

namespace Davis\Core\Model;


use Davis\Core\Interfaces\Model\InterfaceModel;
use Davis\WorkSpace\Database\Database;

class Model implements InterfaceModel {
  private $db_query = [];
  private $db_compare = [];
  private static $table;

  public function __construct() {
  }

  public static function Table($table) {
    return self::$table = $table;
  }

  public function delete() {
    // TODO: Implement delete() method.
  }

  public function like() {
    // TODO: Implement like() method.
  }

  public function union($value_one) {
    if (empty($this->db_query)) {
      $this->db_query[] = ' UNION ' . "'" . $value_one . "'";
    }
    return $this;
  }

  public function join() {
    // TODO: Implement join() method.
  }

  public function save() {
    // TODO: Implement save() method.
  }

  public function update() {
    // TODO: Implement update() method.
  }

  public function where($value_one, $value_two) {
    if (empty($this->db_query)) {
      $this->db_query[] = ' ' . $value_one . '=' . "'" . $value_two . "'";
    }
    else {
      $this->db_query[] = ' AND ' . $value_one . '=' . "'" . $value_two . "'";
    }
    return $this;
  }

  public function orwhere($value_one, $value_two) {
    if (empty($this->db_query)) {
      $this->db_query[] = ' ' . $value_one . '=' . "'" . $value_two . "'";
    }
    else {
      $this->db_query[] = ' OR ' . $value_one . '=' . "'" . $value_two . "'";
    }
    return $this;
  }

  public function compare($value_one, $value_two, $value_three) {
    if (empty($this->db_compare)) {
      $this->db_compare[] = ' ' . $value_one . $value_two . "'" . $value_three . "'";
    }
    else {
      $this->db_compare[] = ' AND ' . $value_one . $value_two . "'" . $value_three . "'";
    }
    return $this;
  }

  public function get() {
    $dbs = new Database();
    $params = implode(",", $this->db_query);
    $query_string = str_replace(",", " ", $params);
    $where = 'WHERE ' . $query_string;
    return  $query = 'SELECT * FROM ' . self::$table . ' ' . $where;
    /*if (empty($query_string)) {
      $sql = 'SELECT * FROM ' . self::$table;
      return $dbs->query($sql);
    }
    else {
      $query = 'SELECT * FROM ' . self::$table . ' ' . $where;
      return $dbs->query($query);
    }*/
  }

  public function count() {
    $dbs = new Database();
    $query = $dbs->query('SELECT COUNT(*) FROM ' . self::$table);
    return $query->rowCount();
  }

  public function check() {
    $dbs = new Database();
    $params = implode(",", $this->db_compare);
    $query_string = str_replace(",", " ", $params);
    $where = 'WHERE ' . $query_string;
    if (!empty($query_string)) {
      $query = $dbs->query('SELECT * FROM ' . self::$table . ' ' . $where);
      return $query;
    }
  }
}