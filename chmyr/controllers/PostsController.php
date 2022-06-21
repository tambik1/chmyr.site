<?php
namespace Chmyr\Controllers;
use Chmyr\Core\Controller;
use Chmyr\Core\Response;

class PostsController extends Controller
{
	public function posts(): Response
	{
		$this->setTitle("Новости");
		return $this->render("blocks/_posts");
	}
	public function create(): Response
	{
		$this->setTitle("Новый пост");
		return $this->render("blocks/_creator");
	}

}