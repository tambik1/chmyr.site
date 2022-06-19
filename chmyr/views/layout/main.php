<?php

/** @var string $content */
/** @var string $title */

?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title ?></title>
	<link rel="shortcut icon" href="/public/img/layout_img/favicon.png" type="image/png">
	<link rel="stylesheet" href="/public/css/reset.css">
	<link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
	<header>
		<div class="header_logo">
			<a href="/"><img class="header_logo__img" src="/public/img/layout_img/chmyr_logo.png" alt="logo"></a>
		</div>
		<div class="header_menu">
<!--			TODO - Подумать, стоит ли вынести пункты меню в конфиг и выводить динамически-->
			<div class="header_menu_points">
				<a class="header_menu_points__point" href="/">Главная</a>
				<a class="header_menu_points__point" href="#">Новое</a>
				<a class="header_menu_points__point" href="/favorite">Избранное</a>
				<a class="header_menu_points__point" href="/about">О проекте</a>
			</div>
		</div>
		<div class="header_menu_search">
			<form class="header_menu_search__form" action="#" method="get">
				<input class="header_menu_search__input" placeholder="Искать здесь..." type="search">
				<button class="header_menu_search__button" type="submit"></button>
			</form>
		</div>
		<div class="header_user_menu">
			<div class="header_user_menu_photo">
				<a href="#"><img class="header_user_menu_photo__img" src="/public/img/layout_img/user_photo__test.jpg" alt="user-photo"></a>
			</div>
			<div class="header_user_menu_fio">
				<a class="header_user_menu_fio_name__a" href="#"><span class="header_user_menu_fio_name">Вася</span></a>
				<a class="header_user_menu_fio_surname__a" href="#"><span class="header_user_menu_fio_surname">Пупкин</span></a>
			</div>
		</div>
	</header>
	<div class="content">
		<?= $content ?>
	</div>

</body>
</html>
