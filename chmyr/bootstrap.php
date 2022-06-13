<?php

// Auto-loading
require_once "Autoloader.php";
spl_autoload_register("\\Autoloader::loader");
require_once 'chmyr/traits/SingletonTrait.php';
// Load configuration files
use Chmyr\core\Config;
$config = Config::getInstance();
$config->loadConfigs(dirname(__DIR__) . "/chmyr/config");

// Include routes
require_once "routes/public.php";
require_once "routes/authorized.php";
require_once "routes/api.php";

// Error handling override
$error_handler = set_error_handler('\Chmyr\Logger\Logger::catchError');

// Database config injection
//TODO подумать о реализации конфигурационного класса работы с БД

// if($dbConfig = $config->get('database'))
// {
// 	\Chmyr\Database\Database::setConfig($dbConfig);
// }



