<?php

use Chmyr\Controllers\AboutController;
use Chmyr\Controllers\PostsController;
use Chmyr\Controllers\FavoriteController;
use Chmyr\Core\Router;


Router::get("/", [PostsController::class, "posts"]);
Router::get("/about", [AboutController::class, "about"]);
Router::get("/favorite", [FavoriteController::class, "favorite"]);