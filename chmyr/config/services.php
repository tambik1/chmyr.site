<?php

use Chmyr\Core\ServiceContainer;
use Chmyr\Models\Services\PostsService;

ServiceContainer::add('posts', new PostsService());
