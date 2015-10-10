<?php

namespace LWS\JufThirza;

use LWS\JufThirza\Entities\HomePage;

class HomePageView extends PageView
{
    /**
     * @var HomePage
     */
    private $content;

    public function __construct($templateFile, HomePage $content)
    {
        parent::__construct($templateFile);

        $this->content = $content;
    }

    public function parse()
    {
        $this->assignVariable("title", $this->content->getTitle());
        $this->assignVariable("text", $this->content->getText());

        return parent::parse();
    }
}