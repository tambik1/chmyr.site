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
// require_once "routes/public.php";
// require_once "routes/admin.php";
// require_once "routes/api.php";

// If it's a development environment include testing routes
if($config->get('environment')['isDev'])
{
	require_once "routes/test.php";
}

// Error handling override
$error_handler = set_error_handler('\Aura\Logger\Logger::catchError');

// Database config injection
if($dbConfig = $config->get('database'))
{
	\Aura\Database\Database::setConfig($dbConfig);
}



