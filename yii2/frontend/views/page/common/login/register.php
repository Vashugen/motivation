<?php
$this->registerJsFile('/js/common.js');
?>

<style>

    .login-input {
        border-radius: 8px;
    }

    .div-input {
        margin-top: 1em;
        font-size: 2em;
    }

    .div-login {
        margin-top: 1em;
    }

    .login-button {
        display: inline-block; /* строчно-блочный */
        padding: 20px 60px; /* расстояние от текста до края кнопки */
        background-color: #00e4a2; /* цвет кнопки  */
        border-radius: 20px; /* скругление углов */
        font-size: 2.8em; /* размер шрифта */
        text-transform: uppercase; /* трансформировать в заглавные буквы */
        text-decoration: none; /* не подчеркивать ссылку */
        transition: 0.2s; /* плавный ховер эффект */
        color: #f7f8e8; /* цвет текста на кнопке */
    }

</style>

<form action="../page/save-login-data">
    <div class="div-input" align="center">
        <input type="text" class="login-input" name="userName" placeholder="ВАШЕ ИМЯ" autocomplete="off">
    </div>
    <div class="div-input" align="center">
        <input type="text" class="login-input" name="userLogin" placeholder="ЛОГИН" autocomplete="off">
    </div>
    <div class="div-input" align="center">
        <input type="text" class="login-input" name="userPassword" placeholder="ПАРОЛЬ" autocomplete="off">
    </div>
    <div class="div-login" align="center">
        <button type="submit" class="login-button">Сохранить</button>
    </div>
</form>
