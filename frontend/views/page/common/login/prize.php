<?php
$this->registerJsFile('/js/common.js');
?>

<style>

    .div-text

    .prize-input {
        border-radius: 8px;
    }

    .div-input {
        margin-top: 1%;
        font-size: 2em;
    }

    .div-prize-btn {
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

    input::placeholder {
        color: #333;
    }
    input:focus::placeholder {
        color: transparent;
    }
    textarea::placeholder {
        color: #333;
    }
    textarea:focus::placeholder {
        color: transparent;
    }

    .text{
        text-align: center;
        font-family: "Comic Sans MS";
    }

    .titile {
        font-size: 300%;
    }

    .desc {

    }

    .inner-container {
        margin-top: 2%;
    }

</style>

<div class="container text titile">
    <div>Добро пожаловать!</div>
</div>
<div class="container inner-container text desc">
    <div>
        Настало время выбрать свою награду за прохождение ключевых шагов!<br>
        Впишите в поля свои собственные варианты наград или перетащите предложенные ниже картинки!<br>
        В ключевой момент мы напомним тебе о выбранной тобой награде!)<br>
    </div>
</div>
<div class="container inner-container prize-item">
    <div class="div-input" align="center">
        <input type="text" class="login-input" name="userName" placeholder="ВАШЕ ИМЯ" autocomplete="off">
    </div>
    <div class="div-input" align="center">
        <input type="text" class="login-input" name="userLogin" placeholder="ЛОГИН" autocomplete="off">
    </div>
    <div class="div-input" align="center">
        <input type="text" class="login-input" name="userPassword" placeholder="ПАРОЛЬ" autocomplete="off">
    </div>
</div>
<!--<div class="container inner-container prize-pic">
    тут будет блок с картинками
</div>-->
<div class="container prize-btn inner-container">
    <div class="" align="right">
        <button type="submit" class="login-button">Сохранить</button>
    </div>
</div>

