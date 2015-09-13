<?php
namespace LWS\JufThirza\Commands;

use LWS\JufThirza\Entities\HomePage;

class RetrieveHomePageContentCommand
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
     * @return HomePage|null
     */
    public function execute()
    {
        $db = $this->databaseConnection;

        $query = "select
                    hp.title,
                    hp.text
                  from
                     homepage hp";

        $result = $db->query($query);

        $homepage = null;

        while ($row = $result->fetch_object())
        {
            $homepage = new HomePage();
            $homepage->setTitle($row->title);
            $homepage->setText($row->text);
        }

        return $homepage;
    }
}