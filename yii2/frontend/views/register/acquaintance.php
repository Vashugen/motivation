<?php
$this->registerJsFile('/js/common.js', ['depends' => [\yii\web\JqueryAsset::className(),\yii\bootstrap4\BootstrapAsset::className()]/*, 'position' => yii\web\View::POS_LOAD*/]);
?>

<div class="container text title">
    <div>Добро пожаловать!</div>
</div>
<div class="container inner-container text desc">
    <div>
        Команда разработчиков New4You рада знакомству!<br>
        Наш мотивационный плакат создан не только для того, чтобы напоминать тебе о твоей цели, <br>
        но и для мотивации и поощрения в ключевых точках!<br>
        Далее ты сама себе выберешь награды, которыми пощришь себя за достигнутые результаты,<br>
        а наш плакат в ключевые моменты сам напомнит тебе о них!<br>
        Продолжай ежедневно следовать по шагам и следи за тем, что произойдёт ;)<br>
        В ключевой момент мы напомним тебе о выбранной тобой награде!)<br>
    </div>
</div>

<div class="container inner-container">
    <div class="" align="center">
        <a href="../prize/index" class="main-button btn-common">Выбрать награды</a>
    </div>
</div>


