<?php

namespace LWS\JufThirza\Commands;

use LWS\Framework\Database\MySqlCommand;
use LWS\JufThirza\Downloads\Category;

class RetrieveDownloadCategoriesCommand extends MySqlCommand
{
    public function execute()
    {
        $db = $this->getDatabaseConnection();

        $query = "
            select
              dc.categoryid,
              dc.category,
              dc.sortorder,
              count(d.downloadid) as downloadcount
            from
              downloadscategories dc
              left join downloads d on d.categoryid = dc.categoryid
            group by
              dc.categoryid,
              dc.category
            order BY
              dc.sortorder,
              dc.category
        ";

        $result = $db->query($query);
        $categories = [];

        while ($row = $result->fetch_object()) {
            $category = new Category();
            $category->setCategoryId($row->categoryid);
            $category->setCategory($row->category);
            $category->setDownloadCount($row->downloadcount);

            $categories[$row->categoryid] = $category;
        }

        return $categories;
    }
}