<?php

namespace  Phi\Bo\Component\Timeline;

use Phi\Component\Component;

class Item extends Component
{
  public function render() {

    $this->template = $this->includeTemplate(__DIR__.'/template/timeline-item.php');
    return parent::render();
  }


}
