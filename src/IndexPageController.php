<?php
namespace LWS\JufThirza;

use LWS\Framework\Http\Context;
use LWS\Framework\Http\IGet;
use LWS\Framework\Http\Status;
use LWS\JufThirza\Commands\RetrieveHomePageContentCommand;
use LWS\JufThirza\Entities\HomePage;

class IndexPageController implements IGet
{
    public function get()
    {
        $view = new HomePageView("templates/index.tpl", $this->getContent());

        Context::getResponse()->setBody($view->parse());
        Context::getResponse()->setStatus(Status::OK);
    }

    /**
     * @return HomePage
     */
    private function getContent()
    {
        $retrieveContentCommand = new RetrieveHomePageContentCommand(
            Context::getDatabaseConnection()
        );

        return $retrieveContentCommand->execute();
    }
}