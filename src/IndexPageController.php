<?php
namespace LWS\JufThirza;

use LWS\Framework\Http\Context;
use LWS\Framework\Http\IGet;

class IndexPageController implements IGet
{
    public function get()
    {
        $view = new PageView("templates/index.tpl");

        Context::getResponse()->setBody($view->parse());
    }
}