<?php
namespace Chmyr\Controllers;
use Chmyr\Core\Controller;
use Chmyr\Core\Response;

class SearchController extends Controller
{
	public function Search(): Response
	{
		$this->setTitle("Поиск");
		return $this->render("blocks\\_search");
	}
}