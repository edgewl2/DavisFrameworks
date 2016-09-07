<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 09-07-16
 * Time: 01:57 PM
 */

namespace Davis\Core\Interfaces\Session;


interface InterfaceSession {
  public static function get($val);
  public static function set($val,$val2);
  public static function start();
  public static function destroy();

}