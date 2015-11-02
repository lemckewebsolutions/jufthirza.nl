<?php

namespace LWS\JufThirza\CMS\Commands;

use LWS\Framework\Database\MySqlCommand;

class SaveDownloadCommand extends MySqlCommand
{
    /**
     * @var string
     */
    private $categoryId;

    /**
     * @var string
     */
    private $downloadLocation;

    /**
     * @var string
     */
    private $thumbNailLocation;

    /**
     * @var string
     */
    private $title;

    /**
     * @param \mysqli $databaseConnection
     * @param $title
     * @param $thumbNailLocation
     * @param $downloadLocation
     * @param string $categoryId
     */
    public function __construct(
        \mysqli $databaseConnection,
        $title,
        $thumbNailLocation,
        $downloadLocation,
        $categoryId
    ) {
        parent::__construct($databaseConnection);

        $this->title = (string)$title;
        $this->thumbNailLocation = (string)$thumbNailLocation;
        $this->downloadLocation = (string)$downloadLocation;
        $this->categoryId = (int)$categoryId;
    }

    public function execute()
    {
        $db = $this->getDatabaseConnection();
        $title = $db->escape_string($this->title);
        $thumbNailLocation = $db->escape_string($this->thumbNailLocation);
        $downloadLocation = $db->escape_string($this->downloadLocation);

        $query = "
            insert into downloads (title, imageurl, downloadurl, categoryid)
            values
            (
              '" . $title . "',
              '" . $thumbNailLocation . "',
              '" . $downloadLocation . "',
              " . $this->categoryId . "
            )";

        $db->query($query);

        return ($db->errno === 0);
    }
}