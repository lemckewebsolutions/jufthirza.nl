<?php

namespace LWS\JufThirza\Downloads;

class Category
{
    /**
     * @var int
     */
    private $categoryId;

    /**
     * @var string
     */
    private $category;

    private $downloadCount = 0;

    function __toString()
    {
        return $this->category;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param int $value
     */
    public function setCategoryId($value)
    {
        $this->categoryId = (int)$value;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $value
     */
    public function setCategory($value)
    {
        $this->category = (string)$value;
    }

    /**
     * @return int
     */
    public function getDownloadCount()
    {
        return $this->downloadCount;
    }

    /**
     * @param int $value
     */
    public function setDownloadCount($value)
    {
        $this->downloadCount = (int)$value;
    }
}