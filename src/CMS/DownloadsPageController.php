<?php

namespace LWS\JufThirza\CMS;

use LWS\Framework\Http\Context;
use LWS\Framework\Http\IGet;
use LWS\Framework\Http\Status;

class DownloadsPageController implements IGet
{
    public function get()
    {
        $viewModel = new DownloadCategoriesPageViewModel(Context::getDatabaseConnection());
        $viewModel->setUser($_SESSION["user"]);

        $view = new DownloadPageView(
            "templates/cms/downloads.tpl",
            $viewModel
        );
        $view->sidebarViewModel = new SideBarViewModel(Context::getDatabaseConnection(), true);

        $view->addCssFile("cms.css");

        Context::getResponse()->setBody($view->parse());
        Context::getResponse()->setStatus(Status::OK);
    }
}