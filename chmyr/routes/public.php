<?php

use Chmyr\Controllers\AboutController;
use Chmyr\Controllers\PostsController;
use Chmyr\Controllers\FavoriteController;
use Chmyr\Controllers\SearchController;
use Chmyr\Controllers\AuthController;
use Chmyr\Core\Router;


Router::get("/", [PostsController::class, "posts"]);
Router::get("/about", [AboutController::class, "about"]);
Router::get("/favorite", [FavoriteController::class, "favorite"]);
Router::get("/search", [SearchController::class, "search"]);
Router::get("/auth", [AuthController::class, "auth"]);
Router::get("/create", [PostsController::class, "create"]);
Router::get("/post", [PostsController::class, "postById"]);