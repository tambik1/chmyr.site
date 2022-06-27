<?php

namespace Chmyr\Models\Services;
use Chmyr\Database\Database;
use Chmyr\Models\Mapper;
use Chmyr\Models\Entities\PostsEntity;


class PostsService
{

	public function getAll():array
	{

		$db = new Database();

		return Mapper::map($db->getQuery("SELECT * FROM posts"), PostsEntity::class);
	}
}