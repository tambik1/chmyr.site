<?php
namespace Chmyr\Controllers;
use Chmyr\Core\Controller;
use Chmyr\Core\Response;

class PostsController extends Controller
{
	public function Posts(): Response
	{
		$this->setTitle("Новости");
		return $this->render("blocks/_posts");
	}
}