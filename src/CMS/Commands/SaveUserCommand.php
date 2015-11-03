<?php

namespace LWS\JufThirza\CMS\Commands;

class SaveUserCommand
{
    /**
     * @var \mysqli
     */
    private $databaseConnection;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $userName;

    public function __construct(\mysqli $databaseConnection, $userName, $password)
    {
        $this->databaseConnection = $databaseConnection;
        $this->userName = (string)$userName;
        $this->password = (string)$password;
    }

    public function execute()
    {
        $db = $this->databaseConnection;
        $userName = $db->escape_string($this->userName);
        $password = $db->escape_string($this->password);

        $query = "
            insert into cms_users (username, password, userroleid)
            values ('" . $userName . "', '" . $password . "', 3)";

        $db->query($query);

        return ($db->errno === 0);
    }
}