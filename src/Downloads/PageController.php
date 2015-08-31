<?php
namespace LWS\JufThirza\Downloads;

use LWS\Framework\Context;
use LWS\Framework\IGet;

class PageController implements IGet
{
    public function get()
    {
        $view = new PageView(PageView::TEMPLATE_ROOT . "downloads.tpl");

        Context::getResponse()->setBody($view->parse());
    }
}