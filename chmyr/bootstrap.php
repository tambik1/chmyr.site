<?php

// Auto-loading
require_once "Autoloader.php";
require_once 'chmyr/helper/Session.php';
spl_autoload_register("\\Autoloader::loader");

// Load configuration files
use Chmyr\core\Config;


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



