<?php
namespace LWS\JufThirza\Downloads;

use LWS\Framework\Http\Context;
use LWS\Framework\Http\IGet;

class PageController implements IGet
{
    public function get()
    {
        $viewModel = new DownloadsPageViewModel(
            Context::getDatabaseConnection()
        );
        $view = new PageView(PageView::TEMPLATE_ROOT . "downloads.tpl", $viewModel);

        Context::getResponse()->setBody($view->parse());
    }
}