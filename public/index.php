<?php

/**
 * Autoloader
 */
spl_autoload_register(function ($class) {
    $root = dirname(__DIR__);   // get the parent directory
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require $file;
    }
});

/* * * Routing * * */
$router = new Core\Router();

// Add the routes
$router -> add('', ['controller' => 'Home', 'action' => 'index']);
$router -> add('{controller}/{action}');
$router -> add('{controller}/{id:\d+}/{action}');
$router -> add('admin/{controller}/{action}', ['namespace' => 'admin']);


// Display the routing table
/*echo '<pre>';
//var_dump($router->getRoutes());
echo htmlspecialchars(print_r($router->getRoutes(), true));
echo '</pre>';*/


$router->dispatch($_SERVER['QUERY_STRING']);