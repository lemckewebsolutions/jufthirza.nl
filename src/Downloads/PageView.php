<?php
namespace LWS\JufThirza\Downloads;

class PageView extends \LWS\JufThirza\PageView
{
    /**
     * @var ViewModel
     */
    private $viewModel;

    /**
     * @param string $templatePath
     * @param ViewModel $viewModel
     */
    public function __construct ($templatePath, ViewModel $viewModel)
    {
        parent::__construct($templatePath);

        $this->viewModel = $viewModel;
    }
}