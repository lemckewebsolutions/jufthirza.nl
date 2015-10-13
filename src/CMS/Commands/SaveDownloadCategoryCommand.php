<?php

namespace LWS\JufThirza\CMS\Commands;

use LWS\Framework\Database\MySqlCommand;

class SaveDownloadCategoryCommand extends MySqlCommand
{
    /**
     * @var string
     */
    private $category;

    /**
     * @param \mysqli $databaseConnection
     * @param string $categoryId
     */
    public function __construct(\mysqli $databaseConnection, $categoryId)
    {
        parent::__construct($databaseConnection);

        $this->category = (string)$categoryId;
    }

    public function execute()
    {
        $db = $this->getDatabaseConnection();
        $category = $db->escape_string($this->category);

        $query = "
            insert into downloadscategories (category)
            values ('" . $category . "')";

        $db->query($query);

        return ($db->errno === 0);
    }
}