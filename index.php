<?php
declare(strict_types=1);

use Chmyr\Core\Router;

error_reporting(E_ALL);
require_once 'chmyr/bootstrap.php';
use Chmyr\Core\Application;
$app = new Application(dirname(__DIR__));
$app->run();
