<?php
$this->registerJsFile('/js/common.js', ['depends' => [\yii\web\JqueryAsset::className(),\yii\bootstrap4\BootstrapAsset::className()]]);
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

</style>

<form id="userRegisterForm">
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
        <button type="submit" class="main-button btn-common">Сохранить</button>
    </div>
</form>

<?= $this->render('/common/_info')?>