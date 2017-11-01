<?php

ini_set('display_errors', 'on');

require(__DIR__.'/vendor/autoload.php');

$autoloader=new \Phi\Autoloader\Autoloader();
$autoloader->addNamespace('Phi\Bo', __DIR__.'/source/class');
$autoloader->register();




$application = new \Phi\Application\Application();


$routeConfiguration = new \Phi\Bo\Configuration\Routing\Main($application);

$application->loadRouteConfiguration($routeConfiguration);





$application->run();


/*
$router = new Phi\Routing\Router();
$router->get('index', '`.*`', function() {
    echo 'hello world';
});
$router->route();
*/
