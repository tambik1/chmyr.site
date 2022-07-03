<?php
var_dump($_SESSION);
?>
<div class="content_container">
	<div class="register_container">
		<div class="register_container_title">
			Регистрация
		</div>
		<div class="register_form_container">
			<form class="register_form_container__form" action="/auth" method="post" enctype="multipart/form-data">  <!--vendor/signup.php-->
				<label class="register_form_container__label" >Имя</label>
				<input class="register_form_container__input" type="text" name="name" placeholder="Введите свое имя" required>
				<label class="register_form_container__label" >Фамилия</label>
				<input class="register_form_container__input" type="text" name="surname" placeholder="Введите свою фамилию" required>
				<label class="register_form_container__label" >Логин</label>
				<input  class="register_form_container__input" type="text" name="login" placeholder="Введите свой логин" required>
				<label class="register_form_container__label" >Почта</label>
				<input  class="register_form_container__input" type="email" name="email" placeholder="Введите свой почтовый ящик"required >
				<label class="register_form_container__label" >Изображение профиля</label>
				<input class="register_form_container__input_file" type="file" name="avatar">
				<label class="register_form_container__label" >Пароль</label>
				<input class="register_form_container__input" type="password" name="password" placeholder="Введите пароль" required>
				<label class="register_form_container__label">Подтверждение пароля</label>
				<input class="register_form_container__input" type="password" name="password_confirm" placeholder="Подтвердите пароль" required>
				<button class="register_form_container__button" type="submit">Вперёд!</button>
				<p class="register_form_container__text">
					У вас уже есть аккаунт? - <a class="register_form_container_link" href="/auth">авторизуйтесь</a>!
				</p>
				<?php
				if ($_SESSION['message']) {
					echo '<p class="auth_msg"> ' . $_SESSION['message'] . ' </p>';
				}
				unset($_SESSION['message']);
				?>
			</form>
		</div>

	</div>
</div>
