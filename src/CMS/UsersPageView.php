<?php

namespace LWS\JufThirza\CMS;
use LWS\CMS\PageView;

/**
 * Class UsersPageView
 * @package LWS\CMS
 * @property UsersPageViewModel $viewModel
 */
class UsersPageView extends PageView
{
    public function __construct($templateFile, UsersPageViewModel $viewModel)
    {
        parent::__construct($templateFile, $viewModel);
    }

    public function parse()
    {
        $this->assignVariable("newUserModal", $this->parseNewUserModal());
        $this->assignVariable("users", $this->viewModel->getUsers());

        return parent::parse();
    }

    /**
     * @return string
     */
    private function parseNewUserModal()
    {
        return $this->includeTemplate("templates/cms/users/newusermodal.inc.tpl");
    }
}