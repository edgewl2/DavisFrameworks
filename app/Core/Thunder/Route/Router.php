<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-21-16
 * Time: 08:23 AM
 */

namespace Davis\Core\Thunder\Route;


class Router {
	private $url;
	private $routes = [];

	public function __construct() {
		$this->url = $_GET['url'];
	}

	public function get($path, $callable) {
		$route = new Route($path, $callable);
		$this->routes['GET'][] = $route;
	}

	public function post($path, $callable) {
		$route = new Route($path, $callable);
		$this->routes['POST'][] = $route;
	}

	public function run() {
		if (!isset($this->routes[$_SERVER['REQUEST_METHOD']])) {
			throw new RouterException('REQUEST_METHOD does not exist in DavisFramework');
		}
		foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
			if ($route->match ($this->url)) {
				return $route->call();
			}
		}
		throw new RouterException('No matching routes in DavisFramework');
	}

}