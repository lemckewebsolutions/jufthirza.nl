<?php

namespace LWS\JufThirza;

class RequestHandler extends \LWS\Framework\RequestHandler
{
    /**
     * @return string
     */
    protected function getController()
    {
        $requestUri = strtok($_SERVER["REQUEST_URI"],'?');

        switch ($requestUri) {
            case "/downloads":
                return "LWS\\JufThirza\\Downloads\\PageController";
            default:
                return "LWS\\JufThirza\\IndexPageController";
        }
    }


}