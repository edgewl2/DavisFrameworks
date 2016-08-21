<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-21-16
 * Time: 10:40 AM
 */
$router = new Davis\Core\Thunder\Route\Router();

$router->get('/', 'IndexController<>Index');

/*$router->get('/', function () {
	echo 'Welcome to Homepage';
});*/

$router->get('/davis/:id', 'IndexController<>Index_Value');

$router->run();