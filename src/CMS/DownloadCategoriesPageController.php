<?php

namespace LWS\JufThirza\CMS;

use LWS\Framework\Http\Context;
use LWS\Framework\Http\IGet;
use LWS\Framework\Http\IPost;
use LWS\Framework\Http\Status;
use LWS\JufThirza\CMS\Commands\DeleteDownloadCategoryCommand;
use LWS\JufThirza\CMS\Commands\SaveDownloadCategoryCommand;

class DownloadCategoriesPageController implements IGet, IPost
{
    public function get()
    {
        $viewModel = new DownloadCategoriesPageViewModel(Context::getDatabaseConnection());
        $viewModel->setUser($_SESSION["user"]);

        $view = new DownloadCategoriesPageView(
            "templates/cms/downloadcategories.tpl",
            $viewModel
        );
        $view->sidebarViewModel = new SideBarViewModel(Context::getDatabaseConnection(), true);

        $view->addCssFile("cms.css");

        Context::getResponse()->setBody($view->parse());
        Context::getResponse()->setStatus(Status::OK);
    }

    public function post()
    {
        if (isset($_POST["action"]) === false) {
            $this->get();
            return;
        }

        if ($_POST["action"] === "add" && isset($_POST["category"]) === true) {
            $saveCategoryCommand = new SaveDownloadCategoryCommand(
                Context::getDatabaseConnection(),
                $_POST["category"]
            );

            $saveCategoryCommand->execute();
        }

        if ($_POST["action"] === "del" && isset($_POST["categoryid"]) === true) {
            $deleteCategoryCommand = new DeleteDownloadCategoryCommand(
                Context::getDatabaseConnection(),
                $_POST["categoryid"]
            );

            $deleteCategoryCommand->execute();
        }

        $this->get();
    }

}