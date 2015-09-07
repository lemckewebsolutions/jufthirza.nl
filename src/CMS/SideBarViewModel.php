<?php

namespace LWS\JufThirza\CMS;

use LWS\CMS\SideBar\Item;
use LWS\CMS\SideBar\ViewModel;
use LWS\CMS\Url as BaseUrls;

class SideBarViewModel extends ViewModel
{
    protected function loadCategories()
    {
        $categories = [];
        $categories["Algemeen"][] = new Item("Start", BaseUrls::INDEX);
        $categories["Algemeen"][] = new Item("Homepage", Url::HOME_PAGE_MANAGE_PAGE);

        $this->categories = $categories;
    }

}