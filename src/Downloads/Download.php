<?php

namespace LWS\JufThirza\Downloads;

class Download
{
    /**
     * @var Category;
     */
    private $category;

    /**
     * @var int
     */
    private $downloadId;

    /**
     * @var string
     */
    private $downloadLocation;

    /**
     * @var string
     */
    private $thumbNailLocation;

    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $views;

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $value
     */
    public function setCategory(Category $value)
    {
        $this->category = $value;
    }

    /**
     * @return int
     */
    public function getDownloadId()
    {
        return $this->downloadId;
    }

    /**
     * @param int $value
     */
    public function setDownloadId($value)
    {
        $this->downloadId = (int)$value;
    }

    /**
     * @return string
     */
    public function getDownloadLocation()
    {
        return $this->downloadLocation;
    }

    /**
     * @param string $value
     */
    public function setDownloadLocation($value)
    {
        $this->downloadLocation = (string)$value;
    }

    /**
     * @return string
     */
    public function getThumbNailLocation()
    {
        return $this->thumbNailLocation;
    }

    /**
     * @param string $value
     */
    public function setThumbNailLocation($value)
    {
        $this->thumbNailLocation = (string)$value;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $value
     */
    public function setTitle($value)
    {
        $this->title = (string)$value;
    }

    /**
     * @return int
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @param int $value
     */
    public function setViews($value)
    {
        $this->views = (int)$value;
    }
}