<?php
$this->registerJsFile('/js/common.js', ['depends' => [\yii\web\JqueryAsset::className(),\yii\bootstrap4\BootstrapAsset::className()]]);
?>

<div class="btn-all" align="center">
    <div class="div-text">
    </div>
    <div class="div-login" align="center">
        <a href="../page/login" class="main-button">Войти</a>
    </div>
    <div class="div-register" style="margin-top: 50px">
        <a href="../page/register" class="main-button">Регистрация</a>
    </div>
</div>
