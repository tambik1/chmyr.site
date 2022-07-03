<?php

use Chmyr\Controllers\AboutController;
use Chmyr\Controllers\PostsController;
use Chmyr\Controllers\FavoriteController;
use Chmyr\Controllers\SearchController;
use Chmyr\Controllers\AuthController;
use Chmyr\Core\Router;

//Публичная часть без авторизации:
Router::get("/", [PostsController::class, "posts"]);
Router::get("/about", [AboutController::class, "about"]);
Router::get("/favorite", [FavoriteController::class, "favorite"]);
Router::get("/search", [SearchController::class, "search"]);
Router::get("/post", [PostsController::class, "postById"]);

//Регистрация
Router::get("/register", [AuthController::class, "register"]);
Router::post("/auth",[AuthController::class, "userRegistration"]);
//Авторизация
Router::get("/auth", [AuthController::class, "auth"]);
Router::post("/profile",[AuthController::class, "singIn"]);
// Вход в профиль, без авторизации:
Router::get("/profile",[AuthController::class, "auth"]);
// Выход из профиля:
Router::get("/logout",[AuthController::class, "logOut"]);




Router::get("/create", [PostsController::class, "create"]);