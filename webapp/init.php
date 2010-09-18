<?php
//Before we do anything, make sure we've got PHP 5
$version = explode('.', PHP_VERSION);
if ($version[0] < 5) {
    echo "ERROR: ThinkUp requires PHP 5. The current version of PHP is ".phpversion().".";
    die();
}

//Register our lazy class loader
require_once '_lib/model/class.Loader.php';
Loader::register();

$config = Config::getInstance();
if ($config->getValue('timezone')) {
    date_default_timezone_set($config->getValue('timezone'));
}
if ($config->getValue('debug')) {
    ini_set("display_errors", 1);
    ini_set("error_reporting", E_ALL);
}
