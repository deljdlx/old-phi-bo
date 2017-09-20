<?php

require(__DIR__.'/vendor/autoload.php');


$application = new \Phi\Application\Application();
$application->autobuild();


$application->addRoute('index', 'get', '`.*`', function() {

    $view = new \Phi\Bo\View\Main('hello world');
    echo $view->render();

    /*
    $template = new \Phi\Template\PHPTemplate();
    echo $template->render();
    */

    /*
    echo 'hello world';
    return true;
    */
});


$application->run();


/*
$router = new Phi\Routing\Router();
$router->get('index', '`.*`', function() {
    echo 'hello world';
});
$router->route();
*/
