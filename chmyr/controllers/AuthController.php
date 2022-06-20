<?php
namespace Chmyr\Controllers;

use Chmyr\Core\Controller;
use Chmyr\Core\Response;

class AuthController extends Controller
{
	public function Auth(): Response
	{
		$this->setTitle("Авторизация");
		return $this->render("blocks\\_auth");
	}
}