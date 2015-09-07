<?php

namespace LWS\JufThirza\CMS;

use Dropbox\Client;
use LWS\CMS\PageViewModel;
use LWS\Framework\Http\Context;

class HomePageViewModel extends PageViewModel
{
    public function getHomePageContent()
    {
        $accessToken = Context::getConfiguration()["CMS"]["DropboxAccessToken"];
        $dropboxClient = new Client($accessToken, "JufThirza.nl CMS");

        $file = fopen("homepage.json", "w+b");
        $fileMetaData = $dropboxClient->getFile("/homepage.json", $file);
        fclose($file);
    }
}