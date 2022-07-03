<?php
namespace Chmyr\Controllers;
use Chmyr\Core\Controller;
use Chmyr\Core\Response;
use Chmyr\Core\ServiceContainer;
use Chmyr\Models\Services\PostsService;

class PostsController extends Controller
{
	public function posts(): Response
	{
		/** @var PostsService $postsService */
		$postsService = ServiceContainer::get("posts");
		$data =$postsService->getAll();
		if (isset($data))
		{
			$this->setTitle("Новости");
			return $this->render('blocks/_posts', [
				'posts' => $data,

			]);
		}
		return $this->render('layout/404');
	}
	public function postById(): Response
	{
		$postsService = ServiceContainer::get("posts");
		$commentsService = ServiceContainer::get("comments");
		$postData = $postsService->getPostById();
		$commentsData = $commentsService->getAllCommentsByPostId();
		if (isset($postData))
		{
			$this->setTitle("Деталочка");
			return $this->render('blocks/_post', [
				'posts' => $postData,
				'comments'=> $commentsData

			]);
		}
		return $this->render('layout/404');
	}
	public function create(): Response
	{
		$this->setTitle("Новый пост");
		return $this->render("blocks/_creator");
	}

}