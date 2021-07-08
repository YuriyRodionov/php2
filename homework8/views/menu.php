<? if ($isAuth): ?>
    Добро пожаловать <?= $username ?> <a href="/auth/logout/">[Выход]</a>
<? else: ?>
<button class="enterButton">Вход</button>
<form class="login" action="/auth/login/" method="post" style="display:none;">
    <input type="text" name="login" placeholder="Логин">
    <input type="text" name="pass" placeholder="Пароль">
    <input type="submit" name="submit" value="Войти">
</form>
<button class="regButton">Регистрация</button>
<form class="register" action="/auth/register/" method="post" style="display:none;">
    <input type="text" name="login" placeholder="Логин">
    <input type="text" name="pass" placeholder="Пароль">
    <input type="submit" name="submit" value="Зарегистрироваться">
</form>
<? endif; ?><br>
<a href="/">Главная</a>
<a href="/product/catalog">Каталог</a>
<a href="/basket">Корзина  (<span id="count"><?=$count?></span>)</a>
<?php if ($isAdmin): ?>
    <a href="/admin/index">Админка</a>
<?php endif; ?>
<br>

<script>
    let enter = document.querySelector('.enterButton');
    let loginForm = document.querySelector('.login');
    let reg = document.querySelector('.regButton');
    let registerForm = document.querySelector('.register');
    enter.addEventListener('click', () => {
            loginForm.style.display = "flex";
    })
    reg.addEventListener('click', () => {
            registerForm.style.display = "flex";
    })
</script>