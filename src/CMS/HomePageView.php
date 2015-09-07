<?php

namespace LWS\JufThirza\CMS;

use LWS\CMS\PageView;

class HomePageView extends PageView
{
    public function parse()
    {
        $this->viewModel->getHomePageContent();

        return parent::parse();
    }
}