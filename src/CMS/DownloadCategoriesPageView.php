<?php

namespace LWS\JufThirza\CMS;

use LWS\CMS\PageView;

/**
 * Class DownloadCategoriesPageView
 * @package LWS\JufThirza\CMS
 * @property DownloadCategoriesPageViewModel $viewModel
 */
class DownloadCategoriesPageView extends PageView
{
    public function parse()
    {
        $this->assignVariable("categories", $this->parseCategories());

        return parent::parse();
    }

    private function parseCategories()
    {
        return $this->includeTemplate(
            "templates/cms/downloads/categories.inc.tpl",
            ["categories" => $this->viewModel->getDownloadCategories()]
        );
    }
}