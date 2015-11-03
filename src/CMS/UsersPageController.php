<?php

namespace LWS\JufThirza\CMS;

use LWS\CMS\PageView;
use LWS\CMS\User\LoginHandler;
use LWS\Framework\Http\Context;
use LWS\Framework\Http\Status;
use LWS\Framework\Notifications\Notification;
use LWS\JufThirza\CMS\Commands\SaveUserCommand;

class UsersPageController extends \LWS\CMS\UsersPageController
{
    public function get()
    {
        $viewModel = new UsersPageViewModel(Context::getDatabaseConnection());
        $viewModel->setUser($_SESSION["user"]);

        $view = new UsersPageView(
            "templates/cms/users/users.tpl",
            $viewModel
        );
        $view->sidebarViewModel = new SideBarViewModel(Context::getDatabaseConnection(), true);

        $view->addCssFile("cms.css");

        Context::getResponse()->setBody($view->parse());
        Context::getResponse()->setStatus(Status::OK);
    }

    public function post()
    {
        if (isset($_POST["username"]) === false ||
            isset($_POST["password"]) === false
        ) {
            $this->get();
            return;
        }

        $loginHandler = new LoginHandler();
        $saltedPassword = $loginHandler->saltPassword($_POST["password"]);

        $createUserCommand = new SaveUserCommand(
            Context::getDatabaseConnection(),
            $_POST["username"],
            $saltedPassword
        );

        $createUserCommand->execute();

        Context::addNotification(new Notification(
            "Gebruiker succesvol aangemaakt.",
            Notification::LEVEL_SUCCESS
        ));

        $this->get();
    }
}