<?php

namespace LWS\JufThirza\CMS\Commands;

use LWS\Framework\Database\MySqlCommand;

class DeleteDownloadCategoryCommand extends MySqlCommand
{
    /**
     * @var int
     */
    private $categoryId;

    /**
     * @param \mysqli $databaseConnection
     * @param int $categoryId
     */
    public function __construct(\mysqli $databaseConnection, $categoryId)
    {
        parent::__construct($databaseConnection);

        $this->categoryId = (int)$categoryId;
    }

    public function execute()
    {
        $db = $this->getDatabaseConnection();

        $query = "
            delete
            from
              downloadscategories
            where
              categoryid = " . $this->categoryId;

        $db->query($query);

        return ($db->errno === 0);
    }
}