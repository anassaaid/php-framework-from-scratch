<?php

/**
 * Front Controller 
 */

// 	Require the controller class
require '../App/Controllers/Posts.php';
//	Require the router class
require '../Core/Router.php';

$router = new Router();

$router->add('',[
	'controller' => 'Home',
	'action' => 'index'
]);

$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{action}/{controller}');

$router->dispatch($_SERVER['QUERY_STRING']);
