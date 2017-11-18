<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('APP_PATH', realpath('..') . '/src/');

require_once __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../src/app.php';
require __DIR__.'/../src/config/twig.php';

if($_SERVER['SERVER_ADDR'] == '127.0.0.1') {
    require __DIR__.'/../src/config/dev.php';
}
else {
    require __DIR__.'/../src/config/prod.php';
}

require __DIR__.'/../src/controllers.php';
$app->run();
