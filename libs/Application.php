<?php

class Application
{
	public function __construct()
	{
		if (isset($_GET['url']))
		{
			$url = explode('/', rtrim($_GET['url'], '/'));
		}
		else
		{
			$url[0] = 'about';
		}
		$fileName = 'controllers/' . $url[0] . '.php';

		if (file_exists($fileName))
		{
			//подключение контроллера
			require_once $fileName;
			$controller = new $url[0]();
			// вызов метода контроллера
			if (isset($url[1]))
			{
				if(method_exists($controller, $url[1]))
				{
					//передача параметров методу
					if(isset($url[2])){
						$controller->{$url[1]}($url[2]);
					}else{
						$controller->{$url[1]}();
					}}
				else
				{
					echo 'Error method dose not exist';
				}
			}
		}

		//TODO сделать страницу 404 и редирект на неё
		else
		{
			echo "Error file dose not exist";
		}

	}
}