<?php

namespace LWS\JufThirza\CMS;

use LWS\CMS\PageViewModel;
use LWS\JufThirza\Commands\RetrieveDownloadCategoriesCommand;

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
}