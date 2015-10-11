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
            case UrlPatterns::DOWNLOADS:
                return "LWS\\JufThirza\\Downloads\\PageController";
            case UrlPatterns::MAIL:
                return "LWS\\JufThirza\\MailPageController";
            default:
                return "LWS\\JufThirza\\IndexPageController";
        }
    }


}