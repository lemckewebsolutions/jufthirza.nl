<?php

namespace LWS\JufThirza\CMS;

use LWS\CMS\PageView;

class HomePageView extends PageView
{
    public function parse()
    {
        /* @var HomePageViewModel $viewModel */
        $viewModel = $this->viewModel;
        $this->assignVariable("title", $viewModel->getHomePageTitle());
        $this->assignVariable("text", $viewModel->getHomePageText());

        return parent::parse();
    }
}