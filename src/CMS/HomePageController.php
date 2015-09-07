<?php

namespace LWS\JufThirza\CMS;

Use LWS\CMS\PageView;
Use LWS\CMS\PageViewModel;
use LWS\Framework\Http\Context;
use LWS\Framework\Http\IGet;

class HomePageController implements IGet
{
    public function get()
    {
        $viewModel = new HomePageViewModel(Context::getDatabaseConnection());
        $viewModel->setUser($_SESSION["user"]);

        $view = new HomePageView(
            "templates/cms/homepage.tpl",
            $viewModel
        );
        $view->sidebarViewModel = new SideBarViewModel(Context::getDatabaseConnection(), true);

        $view->addCssFile("cms.css");

        Context::getResponse()->setBody($view->parse());
    }
}