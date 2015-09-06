<?php

namespace LWS\JufThirza\CMS;

use LWS\CMS\SideBar\Item;
use LWS\CMS\SideBar\ViewModel;
use LWS\CMS\Url;

class SideBarViewModel extends ViewModel
{
    protected function loadCategories()
    {
        $categories = [];
        $categories["Algemeen"][] = new Item("Start", Url::INDEX);

        $this->categories = $categories;
    }

}