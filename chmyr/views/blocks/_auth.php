<div class="content_container">
	<div class="auth_container">
		<div class="auth_container_title">
			Авторизация
		</div>
		<div class="auth_form_container">
			<form class="auth_form_container__form" action="/profile" method="post">
				<label class="auth_form_container__label">Логин</label>
				<input class="auth_form_container__input" type="text" name="login" placeholder="Введите свой логин">
				<label class="auth_form_container__label">Пароль</label>
				<input class="auth_form_container__input" type="password" name="password" placeholder="Введите пароль">
				<button class="auth_form_container__button" type="submit">Войти</button>
				<p class="auth_form_container__text">
					У вас нет аккаунта? - <a class="auth_form_container_link" href="/register">зарегистрируйтесь</a>!
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

<!--		<form class="auth_form" action="#" method="post">-->
<!--			<div class="auth_container_login_title">Логин</div>-->
<!--			<input class="auth_container_login" type="email">-->
<!--			<div class="auth_container_password_title">Пароль</div>-->
<!--			<input class="auth_container_password" type="password">-->
<!--			<input class="auth_container_submit__button" type="submit">-->
<!--		</form>-->