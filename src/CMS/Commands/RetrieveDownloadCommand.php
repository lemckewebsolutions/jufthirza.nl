<?php

namespace LWS\JufThirza\CMS\Commands;

use LWS\Framework\Database\MySqlCommand;
use LWS\JufThirza\Downloads\Category;
use LWS\JufThirza\Downloads\Download;

class RetrieveDownloadCommand extends MySqlCommand
{
    /**
     * @var int
     */
    private $downloadId;

    public function __construct(\mysqli $databaseConnection, $downloadId)
    {
        parent::__construct($databaseConnection);

        $this->downloadId = (int)$downloadId;
    }

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
            where
              d.downloadid = " . $this->downloadId . "
            order BY
              dc.sortorder,
              d.title,
              dc.category
        ";

        $result = $db->query($query);

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

            return $download;
        }

        return null;
    }
}