<?php

namespace Phi\Bo\Layout;

use Phi\Component\Page;

class Main extends Page
{

    public function __construct($template = null)
    {
        if($template === null) {
            $this->setTemplate($this->includeTemplate(__DIR__.'/template/__index.php'));
        }

        $this->setVariable('title', 'Phi Bo');
    }

}