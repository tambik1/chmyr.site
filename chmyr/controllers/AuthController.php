<?php
namespace Chmyr\Controllers;

use Chmyr\Core\Controller;
use Chmyr\Core\Response;
use Chmyr\Core\ServiceContainer;
use Chmyr\Models\Entities\UserEntity;
use Chmyr\Models\Mapper;

class AuthController extends Controller
{
	public function auth(): Response
	{
		if ($_SESSION['user']){
			$this->setTitle("Профиль");
			return $this->render("blocks\\_profile");
		}
		$this->setTitle("Авторизация");
		return $this->render("blocks\\_auth");
	}
	public function register(): Response
	{	if ($_SESSION['user']){
		header('Location: /');
		}
		$this->setTitle("Регистрация");
		return $this->render("blocks\\_register");
	}
	public function userRegistration():Response{
		$this->setTitle("Авторизация");

		$registrationData = [
			'user' => [
				'name' => $_POST['name'],
				'surname' => $_POST['surname'],
				'login' => $_POST['login'],
				'email' => $_POST['email'],
				'password' => $_POST['password'],
				'password_confirm' => $_POST['password_confirm'],
			]
		];
		$user = Mapper::map($registrationData, UserEntity::class);
		if ($registrationData['user']['password'] !== $registrationData['user']['password_confirm']){
			$_SESSION['message'] = 'Пароли не совпадают';
			header('Location: /register');
		}
		if (isset($user) && $registrationData['user']['password'] === $registrationData['user']['password_confirm']){
			$userService = ServiceContainer::get("user");
			$userService->userRegistration($user);
			$this->setTitle("Авторизация");
			return $this->render("blocks\\_auth");
		}
		return $this->render("blocks\\_auth");
	}
	public function singIn(): Response
	{
		if($_SESSION['user']){
			header('Location: /profile');
		}
		$authData = [
			'user' =>[
				'login' => (string)$_POST['login'],
				'password' => (string)$_POST['password']
			]
		];
		$userService = ServiceContainer::get("user");
		$userService->userSingIn($authData);
		$this->setTitle("Профиль");
		return $this->render("blocks\\_profile");
	}
	public function logOut():void{
		unset ($_SESSION['user']);
		header('Location: /auth');
	}

}