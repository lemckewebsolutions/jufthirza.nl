<?php

namespace LWS\JufThirza\CMS;

use LWS\CMS\PageView;
use LWS\Framework\Http\Context;

/**
 * @package LWS\JufThirza\CMS
 * @property DownloadCategoriesPageViewModel $viewModel
 */
class DownloadPageView extends PageView
{
    public function parse()
    {
        $this->assignVariable("newDownloadModal", $this->parseNewDownloadModal());

        return parent::parse();
    }

    private function parseNewDownloadModal()
    {
        $config = Context::getConfiguration();

        return $this->includeTemplate(
            "templates/cms/downloads/newdownloadmodal.inc.tpl",
            [
                "appKey" => $config["CMS"]["DropboxAppKey"]
            ]
        );
    }
}