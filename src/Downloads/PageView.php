<?php
namespace LWS\JufThirza\Downloads;

class PageView extends \LWS\JufThirza\PageView
{
    /**
     * @var DownloadsPageViewModel
     */
    private $viewModel;

    /**
     * @param string $templatePath
     * @param DownloadsPageViewModel $viewModel
     */
    public function __construct ($templatePath, DownloadsPageViewModel $viewModel)
    {
        parent::__construct($templatePath);

        $this->viewModel = $viewModel;
    }

    public function parse()
    {
        $this->assignVariable("categories", $this->getCategoriesToShow());
        $this->assignVariable("downloads", $this->viewModel->getDownloads());

        return parent::parse();
    }

    private function getCategoriesToShow()
    {
        $categories = $this->viewModel->getDownloadCategories();

        return array_filter($categories, function($var){
           return $var->getDownloadCount() > 0;
        });
    }
}