<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 09-07-16
 * Time: 01:55 PM
 */

namespace Davis\Core\Http\Session;


use Davis\Core\Interfaces\Session\InterfaceSession;
use Davis\Core\Http\Thunder\Route\RouterException;

class Session implements InterfaceSession {
  private $val;

  public function __construct($val) {
    $this->val = $val;
  }

  public static function get($val) {
    if (empty($_SESSION[trim($val)])) {
      RouterException::Session($_SESSION[trim($val)]);
    } else {
      return $_SESSION[trim($val)];
    }
  }

  public static function set($val,$val2) {
    if (!(empty($val) && empty($val2))) {
      return $_SESSION[$val] = $val2;
    } else {
      RouterException::Session($val);
    }
  }

  public static function start() {
    return session_start();
  }

  public static function destroy() {
    return session_destroy();
  }
}