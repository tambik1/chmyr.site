<?php

class Post extends Controller
{
	public function __construct()
	{
		echo "PostController" . '<br>';
	}

	public function list($idPost = '')
	{
		//TODO реализовать метод который отрисует все статьи
		echo "method list";
		if ($idPost != '')
		//TODO реализовать метод который отрисует деталку статьи
		{
			echo 'Смари я пост';
		}
	}
}