<?php

namespace Phi\Bo\Component\Card;

use Phi\Component\Component;

class Accordion extends Component
{

    protected static $globalCSS = array();
    protected $css = array();

    protected static $globalJavascripts = array();
    protected $javascript = array();


    protected $variableCollection = array(
        'height'=>'300px',
        'footerHeight'=>'90px',
        'titleTag'=>'h2',
        'image'=>'http://www.fillmurray.com/350/350',
        'title' => 'Here $title',
        'subTitle'=>'Here $subTitle',
        'description' => 'here is the description',
        'footer' => 'Here the footer'
    );


    public function __construct($template = null)
    {
        parent::__construct($template);


        $this->addGlobalCSS(file_get_contents(__DIR__ . '/asset/material-cards.css'));
        //$this->addGlobalCSS(file_get_contents(__DIR__ . '/asset/material-cards-auto-height.css'));


        $this->addGlobalJavascript(file_get_contents(__DIR__ . '/asset/material-card.js'));
        //$this->template = $this->includeTemplate(__DIR__ . '/asset/template.php');
    }


    public function render()
    {

        $this->template = $this->includeTemplate(__DIR__ . '/asset/template.php', $this->getVariables());




        return parent::render();

    }
}
