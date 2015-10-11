<?php

namespace LWS\JufThirza\CMS;

use LWS\Framework\Http\Context;
use LWS\Framework\Http\IGet;
use LWS\Framework\Http\IPost;
use LWS\Framework\Notifications\Notification;
use LWS\JufThirza\CMS\Commands\SaveHomePageContentCommand;

class HomePageController implements IGet, IPost
{
    public function get()
    {
        $viewModel = new HomePageViewModel(Context::getDatabaseConnection());
        $viewModel->setUser($_SESSION["user"]);

        $view = new HomePageView(
            "templates/cms/homepage.tpl",
            $viewModel
        );
        $view->sidebarViewModel = new SideBarViewModel(Context::getDatabaseConnection(), true);

        $view->addCssFile("cms.css");

        Context::getResponse()->setBody($view->parse());
    }

    public function post()
    {
        $this->saveHomePageContent();
        $this->get();
    }

    private function saveHomePageContent()
    {
        if (isset($_POST["title"]) === false ||
            isset($_POST["text"]) === false) {
            return;
        }

        $saveCommand = new SaveHomePageContentCommand(Context::getDatabaseConnection());
        $saveCommand->execute($_POST["title"], $_POST["text"]);

        Context::addNotification(new Notification("Homepage content opgeslagen", Notification::LEVEL_SUCCESS));
    }
}