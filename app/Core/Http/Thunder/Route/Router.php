<?php
/**
 * Created by PhpStorm.
 * User: Luis Solorzano
 * Date: 08-21-16
 * Time: 08:23 AM
 */

namespace Davis\Core\Http\Thunder\Route;


class Router {
	private $url;
	private $routes = [];
	private $nameRoutes = [];

	public function __construct() {
		$this->url = $_GET['url'];
	}

	public function get($path, $callable, $name = NULL) {
		$this->add($path, $callable, $name, 'GET');
	}

	public function post($path, $callable, $name = NULL) {
		$this->add($path, $callable, $name, 'POST');
	}

	public function add($path, $callable, $name, $method) {
		$route = new Route($path, $callable);
		$this->routes[$method][] = $route;
		if ($name) {
			$this->nameRoutes[$name] = $route;
		}
		return $route;
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

	public function url($name, $params = []) {
		if (!isset($this->nameRoutes[$name])) {
			throw new RouterException('No matching routes in DavisFramework');
		}
		$this->nameRoutes[$name] = $this->getURL($params);

	}

}