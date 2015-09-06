<?php
chdir(__FILE__);
chdir("../");

ini_set("display_errors", 1);
ini_set("html_erros", 1);

require_once("./vendor/autoload.php");

$requestHandler = new \LWS\JufThirza\CMS\RequestHandler();
$requestHandler->loadConfigurationFromJsonFile("Config.Local.json");

$requestHandler->process();