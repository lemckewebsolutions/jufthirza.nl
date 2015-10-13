<?php

namespace LWS\JufThirza\Commands;

use LWS\Framework\Database\MySqlCommand;

class RetrieveDownloadCategoriesCommand extends MySqlCommand
{
    public function execute()
    {
        $db = $this->getDatabaseConnection();

        $query = "
            select
              categoryid,
              category,
              sortorder
            from
              downloadscategories
            order BY
              sortorder,
              category
        ";

        $result = $db->query($query);
        $categories = [];

        while ($row = $result->fetch_object()) {
            $categories[$row->categoryid] = $row->category;
        }

        return $categories;
    }
}