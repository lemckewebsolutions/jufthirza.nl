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
        $this->assignVariable("categories", $this->viewModel->getDownloadCategories());
        $this->assignVariable("downloads", $this->viewModel->getDownloads());

        return parent::parse();
    }
}