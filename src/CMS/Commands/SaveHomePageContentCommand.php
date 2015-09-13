<?php
namespace LWS\JufThirza\CMS\Commands;

use LWS\JufThirza\Entities\HomePage;

class SaveHomePageContentCommand
{
    /**
     * @var \mysqli
     */
    private $databaseConnection;

    public function __construct(\mysqli $databaseConnection)
    {
        $this->databaseConnection = $databaseConnection;
    }

    /**
     * @param string $title
     * @param string $text
     */
    public function execute($title, $text)
    {
        $db = $this->databaseConnection;

        $title = mysqli_real_escape_string($db, $title);
        $text = mysqli_real_escape_string($db, $text);

        $query = "update homepage
                  set
                    title = '".$title ."',
                    text = '".$text."'";

        $db->query($query);
    }
}