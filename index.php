<?php
chdir(__DIR__);

setcookie("XDEBUG_SESSION", "PHPSTORM");

ini_set("display_errors", 1);
ini_set("html_erros", 1);

require_once("./vendor/autoload.php");

$requestHandler = new \LWS\JufThirza\RequestHandler();
$requestHandler->loadConfigurationFromJsonFile("Config.Local.json");

$requestHandler->process();