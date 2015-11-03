<?php

namespace LWS\JufThirza\CMS;

use LWS\CMS\Commands\RetrieveUsersCommand;
use LWS\CMS\PageViewModel;

class UsersPageViewModel extends PageViewModel
{
    public function getUsers()
    {
        if ($this->users === null) {
            $retrieveUsersCommand = new RetrieveUsersCommand(
                $this->getDatabaseConnection()
            );

            $this->users = $retrieveUsersCommand->execute();
        }

        return $this->users;
    }
}