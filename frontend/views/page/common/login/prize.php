<?php
$this->registerJsFile('/js/common.js');
?>

<style>

    .div-text

    .prize-input {
        border-radius: 8px;
    }

    .div-input {
        margin-top: 1em;
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
        font-size: 200%;
    }

    .desc {

    }

</style>

<div class="container prize-text">
    <div class="text titile">Добро пожаловать!</div>
    <div class="text desc">Настало время выбрать свою награду за прохождение ключевых шагов!</div>
</div>
<div class="container prize-item">
    Пункты
</div>
<div class="container prize-pic">
    картинки
</div>
<div class="containerprize-btn">
    кнопки
</div>

