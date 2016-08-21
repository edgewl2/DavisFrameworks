<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 08-21-16
 * Time: 10:40 AM
 */
$router = new Davis\Core\Thunder\Route\Router();

$router->get('/', function () {
	echo 'Welcome to Homepage';
});

$router->get('/post', function () {
	echo 'que paso men';
});
$router->get('/post/:id', function ($id) {
	echo 'que paso men'. $id;
});
$router->post('/post/:id', function ($id) {
	echo 'que paso men'. $id;
});

$router->run();