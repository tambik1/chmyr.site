<?php

use Chmyr\Controllers\AboutController;
use Chmyr\Core\Router;

Router::get("/about", [AboutController::class, "about"]);