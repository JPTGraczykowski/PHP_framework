<?php

/*** Composer ***/
require_once '../vendor/autoload.php';

/* * * Routing * * */
$router = new Core\Router();

// Add the routes
$router -> add('', ['controller' => 'Home', 'action' => 'index']);
$router -> add('{controller}/{action}');
$router -> add('{controller}/{id:\d+}/{action}');
$router -> add('admin/{controller}/{action}', ['namespace' => 'Admin']);


// Display the routing table
/*echo '<pre>';
//var_dump($router->getRoutes());
echo htmlspecialchars(print_r($router->getRoutes(), true));
echo '</pre>';*/


$router->dispatch($_SERVER['QUERY_STRING']);