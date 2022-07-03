<?php

namespace Chmyr\Models\Services;

use Chmyr\Database\Database;
use Chmyr\Models\Entities\UserEntity;
use Chmyr\Models\Mapper;

class UserService
{

	public function userRegistration(array $registrationData):void
	{
		if(isset($_FILES['avatar']['tmp_name'])){
			if ($_FILES['avatar']['tmp_name'] === ''){
				$avatarPath ='/public/avatar/default.png';
			}else{
				$avatarPath = '/public/avatar/' . time() . $_FILES['avatar']['name'];
				if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $avatarPath)){
					$_SESSION['message'] = 'Ошибка при загрузке файла...';
					header('Location: /register');
			}
			}
		}

		$db = new Database();
		$db->getQuery("INSERT INTO `user` (`NAME`, `SURNAME`, `LOGIN`, `PASSWORD`, `PHOTO`, `EMAIL`)
  VALUES (
          ?s,
          ?s,
          ?s,
          ?s,
          ?s,
          ?s
          )",
			$registrationData[0]->getName(),
			$registrationData[0]->getSurname(),
			$registrationData[0]->getLogin(),
			md5($registrationData[0]->getPassword()),
			$avatarPath,
			$registrationData[0]->getEmail(),
		);
		$_SESSION['message'] = 'Регистрация прошла успешно!';
		header('Location: /auth');
	}
	public function userSingIn($authData):void{
		$db = new Database();
		$checkUser = $db->getQuery("SELECT * FROM `user` WHERE `login` = ?s AND `password`= ?s "
			,$authData['user']['login']
			,md5($authData['user']['password'])
		);
		if ($checkUser == null){
			$_SESSION['message'] = 'Неверный логин или пароль :(';
			header('Location: /auth');
		}

		//авторизация
		$authUser = Mapper::map($db->getQuery("SELECT * FROM `user` WHERE `login` = ?s AND `password`= ?s "
		,$authData['user']['login']
		,md5($authData['user']['password'])
		),UserEntity::class);
		$_SESSION['user'] = [
			'id'=>$authUser[0]->getId(),
			'name'=>$authUser[0]->getName(),
			'surname'=>$authUser[0]->getSurname(),
			'login'=>$authUser[0]->getLogin(),
			'email'=>$authUser[0]->getEmail(),
			'password'=>$authUser[0]->getPassword(),
			'photo'=>$authUser[0]->getUserPhoto(),
		];
	}
}
