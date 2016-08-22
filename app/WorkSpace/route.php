<?php
/**
 * Created by PhpStorm.
 * User: Luis Solorzano
 * Date: 08-21-16
 * Time: 10:40 AM
 */
use Davis\Core\Thunder\Route\Router;
$router = new Router();
$router->get('/', 'IndexController<>Index');

/*$router->get('/', function () {
	echo 'Welcome to Homepage';
});*/

$router->get('/form', 'IndexController<>Index_Value');
$router->get('/davis/:id', 'IndexController<>Index_Post');

$router->run();