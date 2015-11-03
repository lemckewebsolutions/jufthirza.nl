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
            case Url::HOME_PAGE_MANAGE_PAGE:
                return "LWS\\JufThirza\\CMS\\HomePageController";
            case Url::DOWNLOADS_PAGE:
                return "LWS\\JufThirza\\CMS\\DownloadsPageController";
            case Url::DOWNLOAD_CATEGORIES_PAGE:
                return "LWS\\JufThirza\\CMS\\DownloadCategoriesPageController";
            case Url::USERS:
                return "LWS\\JufThirza\\CMS\\UsersPageController";
            default:
                return "LWS\\JufThirza\\CMS\\IndexPageController";
        }
    }
}