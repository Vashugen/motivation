<?php
$this->registerJsFile('/js/common.js', ['depends' => [\yii\web\JqueryAsset::className(),\yii\bootstrap4\BootstrapAsset::className()]]);
?>

<div class="btn-all" align="center">
    <div class="div-login" align="center">
        <a href="../register/login" class="main-button btn-common">Войти</a>
    </div>
    <div class="div-register" style="margin-top: 50px">
        <a href="../register/register" class="main-button btn-common">Регистрация</a>
    </div>
</div>
