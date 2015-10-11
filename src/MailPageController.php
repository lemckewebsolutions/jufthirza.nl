<?php

namespace LWS\JufThirza;

use LWS\Framework\Http\Context;
use LWS\Framework\Http\Controller;
use LWS\Framework\Http\IPost;
use LWS\Framework\Http\Status;
use LWS\Framework\Mail\Handler;
use LWS\Framework\Mail\Message;

class MailPageController extends Controller implements IPost
{
    public function post()
    {
        if ($this->isAjaxRequest() === false) {
            Context::getResponse()->setStatus(Status::SEE_OTHER);
            Context::getResponse()->setLocation(UrlPatterns::HOME);
            return;
        }

        $message = $this->getMessage();

        if ($message !== null) {
            Handler::mail($message);

            Context::getResponse()->setStatus(Status::OK);
            return;
        }

        Context::getResponse()->setStatus(Status::FORBIDDEN);
    }

    /**
     * @return Message|null
     */
    private function getMessage()
    {
        if (isset($_POST["name"]) === false ||
            isset($_POST["message"]) === false ||
            isset($_POST["email"]) === false) {
            return null;
        }

        return new Message(
            $_POST["email"],
            "wouterlemcke@gmail.com", //"mail@jufthirza.nl",
            "JufThirza.nl: Er is een nieuw bericht verstuurd door: " . $_POST["name"],
            $_POST["message"]
        );
    }
}