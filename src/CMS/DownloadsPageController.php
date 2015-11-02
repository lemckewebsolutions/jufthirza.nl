<?php

namespace LWS\JufThirza\CMS;

use LWS\Framework\Http\Context;
use LWS\Framework\Http\IGet;
use LWS\Framework\Http\IPost;
use LWS\Framework\Http\Status;
use LWS\Framework\Notifications\Notification;
use LWS\JufThirza\CMS\Commands\SaveDownloadCommand;
use LWS\JufThirza\Downloads\DownloadsPageViewModel;

class DownloadsPageController implements IGet, IPost
{
    public function get()
    {
        $viewModel = new DownloadsPageViewModel(Context::getDatabaseConnection());
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

    public function post()
    {
        if (isset($_POST["file"]) === false ||
            isset($_POST["fileName"]) === false ||
            isset($_POST["fileThumbnail"]) === false ||
            isset($_POST["title"]) === false ||
            isset($_POST["categoryid"]) === false) {
            $this->get();
            return;
        }

        if (is_dir("downloadContent") === false) {
            mkdir("downloadContent");
        }

        $fileDir = "downloadContent/" . $_POST["categoryid"];
        $fileLocation = $fileDir . "/" . $_POST["fileName"];
        $thumbNailLocation = $fileDir . "/thumb_" . $_POST["title"] . ".jpg";

        $saveDownloadCommand = new SaveDownloadCommand(
            Context::getDatabaseConnection(),
            $_POST["title"],
            $thumbNailLocation,
            $fileLocation,
            $_POST["categoryid"]
        );
        $saveDownloadCommand->execute();

        if (is_dir($fileDir) === false) {
            mkdir($fileDir);
        }

        file_put_contents($fileLocation, fopen($_POST["file"], 'r'));
        file_put_contents($thumbNailLocation, fopen($_POST["fileThumbnail"], 'r'));

        Context::addNotification(new Notification(
            "Download succesvol opgeslagen.",
            Notification::LEVEL_SUCCESS
        ));

        Context::getResponse()->setLocation(Url::DOWNLOADS_PAGE);
        Context::getResponse()->setStatus(Status::SEE_OTHER);
    }
}