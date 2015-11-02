<?php

namespace LWS\JufThirza\CMS;

use LWS\CMS\PageViewModel;
use LWS\JufThirza\Commands\RetrieveDownloadCategoriesCommand;
use LWS\JufThirza\Commands\RetrieveDownloadsCommand;

class DownloadCategoriesPageViewModel extends PageViewModel
{
    public function getDownloadCategories()
    {
        if ($this->downloadCategories === null) {
            $retrieveCategoriesCommand = new RetrieveDownloadCategoriesCommand(
                $this->getDatabaseConnection()
            );

            $this->downloadCategories = $retrieveCategoriesCommand->execute();
        }

        return $this->downloadCategories;
    }

    public function getDownloads()
    {
        if ($this->downloads === null) {
            $retrieveDownloadsCommand = new RetrieveDownloadsCommand(
                $this->getDatabaseConnection()
            );
            $this->downloads = $retrieveDownloadsCommand->execute();
        }

        return $this->downloads;
    }
}