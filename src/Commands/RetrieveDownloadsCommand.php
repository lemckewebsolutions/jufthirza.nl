<?php

namespace LWS\JufThirza\Commands;

use LWS\Framework\Database\MySqlCommand;
use LWS\JufThirza\Downloads\Category;
use LWS\JufThirza\Downloads\Download;

class RetrieveDownloadsCommand extends MySqlCommand
{
    public function execute()
    {
        $db = $this->getDatabaseConnection();

        $query = "
            select
              d.downloadid,
              d.title,
              d.imageurl,
              d.downloadurl,
              d.views,
              dc.categoryid,
              dc.category
            from
              downloads d
              inner join downloadscategories dc on dc.categoryid = d.categoryid
            order BY
              dc.sortorder,
              d.title,
              dc.category
        ";

        $result = $db->query($query);
        $categories = [];

        while ($row = $result->fetch_object()) {
            $category = new Category();
            $category->setCategory($row->category);
            $category->setCategoryId($row->categoryid);

            $download = new Download();
            $download->setDownloadId($row->downloadid);
            $download->setCategory($category);
            $download->setTitle($row->title);
            $download->setThumbNailLocation($row->imageurl);
            $download->setDownloadLocation($row->downloadurl);
            $download->setViews($row->views);

            $categories[$row->downloadid] = $download;
        }

        return $categories;
    }
}