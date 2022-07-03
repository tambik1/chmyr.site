<?php

use Chmyr\Core\ServiceContainer;
use Chmyr\Models\Services\PostsService;
use Chmyr\Models\Services\CommentsService;
use Chmyr\Models\Services\UserService;

ServiceContainer::add('posts', new PostsService());
ServiceContainer::add('comments', new CommentsService());
ServiceContainer::add('user', new UserService());
