<?php

namespace LWS\JufThirza\CMS;

class RequestHandler extends \LWS\CMS\RequestHandler
{
    protected function getController()
    {
        $controller = parent::getController();

        if ($controller !== "") {
            return $controller;
        }

        $requestUri = strtok($_SERVER["REQUEST_URI"],'?');

        switch ($requestUri) {
            case "/cms/homepage":
                return "LWS\\JufThirza\\CMS\\HomePageController";
            default:
                return "LWS\\JufThirza\\CMS\\IndexPageController";
        }
    }
}