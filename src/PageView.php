<?php
namespace LWS\JufThirza;

use LWS\Framework\View;

class PageView extends View
{
    /**
     * @var string
     */
    const TEMPLATE_ROOT = "templates/";

    public function parse()
    {
        $this->assignVariable("footer", $this->parseFooter());
        $this->assignVariable("head", $this->parseHead());

        return parent::parse();
    }

    /**
     * @return string
     * @throws \Exception
     */
    private function parseFooter()
    {
        return $this->includeTemplate(static::TEMPLATE_ROOT . "layout/footer.inc.tpl");
    }

    /**
     * @return string
     * @throws \Exception
     */
    private function parseHead()
    {
        return $this->includeTemplate(
            static::TEMPLATE_ROOT . "layout/head.inc.tpl",
            [
                "header" => $this->includeTemplate(static::TEMPLATE_ROOT . "layout/header.inc.tpl")
            ]
        );
    }
}