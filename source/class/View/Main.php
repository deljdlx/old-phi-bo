<?php
namespace Phi\Bo\View;


use Phi\Template\PHPTemplate;

class Main extends PHPTemplate
{

    public function __construct($template = null)
    {
        if($template === null)
        {
            $template = $this->getTemplateFilepathRoot().'/main.php';
        }
        parent::__construct($template);
    }


    public function getTemplateFilepathRoot() {
        return realpath(__DIR__.'/../../template');
    }

}

