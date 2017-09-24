<?php

namespace  Phi\Bo\Component;

use Phi\Component\Component;

class SummerNote extends Component
{

    protected $variableCollection = array(
        'height' => '500px',
        'content' => '',
        'cssClassName' => 'phibo-editor'
    );


    public function __construct($template = null)
    {
        parent::__construct($template);

        $this->addGlobalJavascript('./vendor/SummerNote/dist/summernote.js', true);

        $this->addJavascript("
            $(document).ready(function() {
                $('.".$this->getVariable('cssClassName')."').summernote({
                  height: '".$this->getVariable('height')."',
                  tabsize: 4,
                  codemirror: {
                    mode: 'text/html',
                      htmlMode: true,
                      lineNumbers: true,
                      theme: 'monokai'
                  }
              });
          });
        ");
    }



    public function render()
    {
        $this->template = '<div class="'.$this->getVariable('cssClassName').'">'.$this->getVariable('content').'</div>';
        return parent::render();
    }

}
