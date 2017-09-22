<?php

namespace  Phi\Bo\Component;

use Phi\Component\Component;

class Timeline extends Component
{
    public function render() {

        $this->template = $this->includeTemplate(__DIR__.'/template.php');
        return parent::render();
    }


}
