<?php

namespace Chmyr\Models\Services;
use Chmyr\Database\Database;
use Chmyr\Models\Entities\CommentsEntity;
use Chmyr\Models\Mapper;
use Chmyr\Models\Entities\PostsEntity;


class CommentsService
{

	public function getAllCommentsByPostId():array
	{
		$db = new Database();

		return Mapper::map($db->getQuery("SELECT comments.ID,
													comments.DESCRIPTION,
													comments.DATE_UPDATE,
													user.NAME,
													user.SURNAME,
													user.PHOTO
													FROM comments
	INNER JOIN user ON user.ID = comments.AUTHOR_ID WHERE POST_ID = 2"), CommentsEntity::class);
	}
}