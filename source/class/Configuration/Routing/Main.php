<?php

namespace  Phi\Bo\Configuration\Routing;

use Phi\Application\Application;
use Phi\Application\RouteConfiguration;
use Phi\Routing\Route;


class Main extends RouteConfiguration
{

    /**
     * @var Application
     */
    private $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }


    /**
     * @return array
     */

    public function getRoutes()
    {

        $routes = array(
            'index' => $this->indexRoute()
        );
        return $routes;
    }





    private function indexRoute()
    {
        $route = new Route(
            'get',
            '`.*`',


            function() {

                $layout = new \Phi\Bo\Layout\Main();

                $layout->registerComponent('phibo-timeline', \Phi\Bo\Component\Timeline::class);
                $layout->registerComponent('phibo-timeline-item', \Phi\Bo\Component\Timeline\Item::class);
                $layout->registerComponent('phibo-panel', \Phi\Bo\Component\Panel::class);
                $layout->registerComponent('phibo-card', \Phi\Bo\Component\Card\Accordion::class);
                $layout->registerComponent('phibo-editor', \Phi\Bo\Component\SummerNote::class);

                echo $layout->render();
            },
            array(),
            'index'
        );
        return $route;
    }

}


