<?php

namespace LWS\JufThirza\CMS;

use LWS\CMS\PageViewModel;
use LWS\JufThirza\Commands\RetrieveHomePageContentCommand;

class HomePageViewModel extends PageViewModel
{
    private function getHomePageContent()
    {
        $retrieveHomePageCommand = new RetrieveHomePageContentCommand($this->getDatabaseConnection());
        $homePageContent = $retrieveHomePageCommand->execute();

        $this->homePage = $homePageContent;
    }

    public function getHomePageText()
    {
        if (isset($this->homePage) === false) {
            $this->getHomePageContent();
        }

        return $this->homePage->getText();
    }

    public function getHomePageTitle()
    {
        if (isset($this->homePage) === false) {
            $this->getHomePageContent();
        }

        return $this->homePage->getTitle();
    }
}