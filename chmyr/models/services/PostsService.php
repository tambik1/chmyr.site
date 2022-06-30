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
		$db->getQuery("SELECT * FROM posts");

		return Mapper::map($db->getQuery("SELECT posts.ID,
       posts.title,
       posts.DESCRIPTION,
       posts.DATE_UPDATE,
       user.name,
       user.SURNAME,
       user.PHOTO,
       GROUP_CONCAT(tags.NAME SEPARATOR ',') as tags_name FROM posts
		INNER JOIN user on user.ID = posts.AUTHOR_ID
		LEFT JOIN post_tags ON post_tags.POST_ID= posts.ID
		LEFT JOIN tags ON tags.ID = post_tags.TAG_ID
GROUP BY posts.ID"), PostsEntity::class);
	}
}