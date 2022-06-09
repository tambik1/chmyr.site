<?php

error_reporting(E_ALL);
require_once 'chmyr/bootstrap.php';
use Chmyr\core\Application;
$app = new Application(dirname(__DIR__));
$app->run();
