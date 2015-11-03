<?php

namespace LWS\JufThirza\CMS\Commands;

use LWS\Framework\Database\MySqlCommand;

class DeleteDownloadCommand extends MySqlCommand
{
    /**
     * @var int
     */
    private $downloadId;

    /**
     * @param \mysqli $databaseConnection
     * @param int $downloadId
     */
    public function __construct(\mysqli $databaseConnection, $downloadId)
    {
        parent::__construct($databaseConnection);

        $this->downloadId = (int)$downloadId;
    }

    public function execute()
    {
        $db = $this->getDatabaseConnection();

        $query = "
            delete
            from
              downloads
            where
              downloadid = " . $this->downloadId;

        $db->query($query);

        return ($db->errno === 0);
    }
}