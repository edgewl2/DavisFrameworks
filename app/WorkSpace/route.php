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
$router->get('/post', 'IndexController<>Index_GET');
$router->post('/post', 'IndexController<>Index_Post');

/*$router->get('/', function () {
	//echo 'Welcome to Homepage';
	$loader = new Twig_Loader_Filesystem('app/WorkSpace/Views/layouts/');
	$twig = new Twig_Environment($loader);
	$luis = 'hola que tal desde Twig';
	$twig->display('app.html.twig',array('luis'=>$luis));
});*/
$router->get('/form', 'IndexController<>Index_Value');
//$router->get('/davis/:id', 'IndexController<>Index_Post');

$router->run();