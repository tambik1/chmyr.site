<div class="content_container">
	<div class="profile_container">
		<div class="profile_left_side">
			<img class="profile_left_side__avatar" src="<?=$_SESSION['user']['photo']?>" alt='avatar'>
		</div>
		<div class="profile_right_side">
			<div class="profile_right_side__title">
				Профиль пользователя:
			</div>
			<div class="profile_right_side_info">
				<h4 class="profile_right_side_info__key">ID: <span class="profile_right_side_info__value"><?=$_SESSION['user']['id']?></span></h4>
				<h4 class="profile_right_side_info__key">Имя: <span class="profile_right_side_info__value"><?=$_SESSION['user']['name']?></span></h4>
				<h4 class="profile_right_side_info__key">Фамилия: <span class="profile_right_side_info__value"><?=$_SESSION['user']['surname']?></span></h4>
				<h4 class="profile_right_side_info__key">Логин: <span class="profile_right_side_info__value"><?=$_SESSION['user']['login']?></span></h4>
				<h4 class="profile_right_side_info__key">Пароль: <span class="profile_right_side_info__value"><?=$_SESSION['user']['password']?></span></h4>
				<h4 class="profile_right_side_info__key">Путь к фото: <span class="profile_right_side_info__value"><?=$_SESSION['user']['photo']?></span></h4>
			</div>
			<a class="profile_right_side__logout" href="/logout">Выход</a>
		</div>
	</div>
</div>