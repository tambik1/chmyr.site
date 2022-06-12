<?php
namespace Chmyr\Controllers;
use Chmyr\Core\Controller;
use Chmyr\Core\Response;

class AboutController extends Controller
{
	public string $title = "Chmyr";

	public function About(): Response
	{
		$this->setTitle("О проекте");
		return $this->render("blocks/_about");
	}
}