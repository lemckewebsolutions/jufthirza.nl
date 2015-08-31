<?php
namespace LWS\JufThirza;

use LWS\Framework\Context;
use LWS\Framework\IGet;

class IndexPageController implements IGet
{
    public function get()
    {
        $view = new PageView("templates/index.tpl");

        Context::getResponse()->setBody($view->parse());
    }
}