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
}