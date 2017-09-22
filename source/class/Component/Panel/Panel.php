<?php

namespace  Phi\Bo\Component;

use Phi\Component\Component;

class Panel extends Component
{

    protected $variableCollection = array(
        'title' => 'Untitled panel',
        'content' => ''
    );

    public function render() {
        $this->template = $this->includeTemplate(__DIR__.'/template.php');
        return parent::render();
    }


}
