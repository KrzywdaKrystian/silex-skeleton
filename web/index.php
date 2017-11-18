<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('APP_PATH', realpath('..') . '/src/');

$loader = require_once __DIR__.'/../vendor/autoload.php';

$loader -> add('Application', __DIR__ . '../src'); // PSR-0 autoloading, the directory '__DIR__/Application' must exists

$app = require __DIR__.'/../src/app.php';
require __DIR__.'/../src/config/prod.php';
require __DIR__.'/../src/config/twig.php';
require __DIR__.'/../src/controllers.php';
$app->run();
