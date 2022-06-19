<?php
namespace Chmyr\Controllers;
use Chmyr\Core\Controller;
use Chmyr\Core\Response;
class FavoriteController extends Controller
{
	public function Favorite(): Response
	{
		$this->setTitle("О проекте");
		return $this->render("blocks\\_favorite");
	}
}