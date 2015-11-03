<?php

namespace LWS\JufThirza\CMS;

use LWS\CMS\SideBar\Item;
use LWS\CMS\SideBar\ViewModel;
use LWS\CMS\Url as BaseUrls;

class SideBarViewModel extends ViewModel
{
    protected function loadNavigationItems()
    {
        parent::loadNavigationItems();
        $categories = $this->categories;
        $categories["Algemeen"][] = new Item("Homepage", Url::HOME_PAGE_MANAGE_PAGE);

        $categories["Downloads"][] = new Item("Download categorieen", Url::DOWNLOAD_CATEGORIES_PAGE);
        $categories["Downloads"][] = new Item("Downloads", Url::DOWNLOADS_PAGE);

        $this->categories = $categories;
    }

}