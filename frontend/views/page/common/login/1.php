<?php
$this->registerJsFile('/js/common.js');
?>

<style>

    .btn-all {

    }

    .div-login {

    }

    .div-register {
        margin-top: 50px;
    }

    .btn-login {
        display: inline-block; /* строчно-блочный */
        padding: 20px 60px; /* расстояние от текста до края кнопки */
        background-color: #00e4a2; /* цвет кнопки  */
        border-radius: 20px; /* скругление углов */
        font-size: 50px; /* размер шрифта */
        text-transform: uppercase; /* трансформировать в заглавные буквы */
        text-decoration: none; /* не подчеркивать ссылку */
        transition: 0.2s; /* плавный ховер эффект */
        color: #f7f8e8; /* цвет текста на кнопке */
    }
</style>


<div class="btn-all" align="center">
    <div class="div-text">

    </div>
    <div class="div-login" align="center">
        <a href="../page/login" class="btn-login">Войти</a>
    </div>
    <div class="div-register">
        <a href="../page/register" class="btn-login">Регистрация</a>
    </div>
</div>
