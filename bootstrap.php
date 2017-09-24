<?php

ini_set('display_errors', 'on');

require(__DIR__.'/vendor/autoload.php');

$autoloader=new \Phi\Autoloader\Autoloader();
$autoloader->addNamespace('Phi\Bo', __DIR__.'/source/class');
$autoloader->register();







$application = new \Phi\Application\Application();
$application->autobuild();


$application->addRoute('index', 'get', '`.*`', function() {

    $layout = new \Phi\Bo\Layout\Main();

    $layout->registerComponent('phibo-timeline', \Phi\Bo\Component\Timeline::class);
    $layout->registerComponent('phibo-timeline-item', \Phi\Bo\Component\Timeline\Item::class);
    $layout->registerComponent('phibo-panel', \Phi\Bo\Component\Panel::class);


  $layout->registerComponent('phibo-card', \Phi\Bo\Component\Card\Accordion::class);

    $layout->registerComponent('phibo-editor', \Phi\Bo\Component\SummerNote::class);








  echo $layout->render();

    /*
    $page = new \Phi\Component\Page(
        file_get_contents(__DIR__.'/source/template/main.php')
    );
    */

    //echo $page->render();



    //$view = new \Phi\Bo\View\Main();
    //echo $view->render();

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
