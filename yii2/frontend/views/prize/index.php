<?php
$this->registerCssFile('/css/prize.css');
$this->registerJsFile('/js/common.js', ['depends' => [\yii\web\JqueryAsset::className(),\yii\bootstrap4\BootstrapAsset::className()]/*, 'position' => yii\web\View::POS_LOAD*/]);
?>

<div class="container text desc">
    <div>
        Настало время выбрать свои награды за прохождение ключевых шагов!<br>
        Впишите в поля свои собственные варианты наград или отметьте что-то из предложенных ниже картинок!<br>
        В ключевой момент мы напомним тебе о выбранной тобой награде!)<br>
    </div>
</div>
<form id="prizeForm">
    <div id="prizePics" hidden>
        <input type="text" hidden id="prizePicsOne" value="">
        <input type="text" hidden id="prizePicsTwo" value="">
        <input type="text" hidden id="prizePicsThree" value="">
    </div>
    <div class="container inner-container" style="padding: 10px">
        <div class="row">
            <div class="col-lg-4">
                <input type="text" class="prize-input" name="prizeTextOne" id="prizeTextOne" placeholder="НАГРАДА" autocomplete="off">
            </div>
            <div class="col-lg-4 col-lg-offset-1">
                <input type="text" class="prize-input" name="prizeTextTwo" id="prizeTextTwo" placeholder="НАГРАДА" autocomplete="off">
            </div>
            <div class="col-lg-4">
                <input type="text" class="prize-input" name="prizeTextThree" id="prizeTextThree" placeholder="НАГРАДА" autocomplete="off">
            </div>
        </div>
    </div>
    <div class="container inner-container">
        <div class="row">
            <div class="col-md-2 prize-col">
                <img src="<?=Yii::$app->request->baseUrl;?>/images/cake.png" class="prize-picture" alt="любимый десерт" id="prizePicCake" name="prizePicCake" width="100%" data-checked="0" data-prizeName="cake">
            </div>
            <div class="col-md-2 prize-col">
                <img src="<?=Yii::$app->request->baseUrl;?>/images/vine.png" alt="" class="prize-picture" id="prizePicVine" name="prizePicVine" width="100%" data-checked="0" data-prizeName="vine">
            </div>
            <div class="col-md-2 prize-col">
                <img src="<?=Yii::$app->request->baseUrl;?>/images/ring.png" alt="" width="100%" class="prize-picture" id="prizePicRing" name="prizePicRing" data-checked="0" data-prizeName="ring">
            </div>
            <div class="col-md-2 prize-col">
                <img src="<?=Yii::$app->request->baseUrl;?>/images/car.png" alt="" width="100%" class="prize-picture" id="prizePicCar" name="prizePicCar" data-checked="0" data-prizeName="car">
            </div>
            <div class="col-md-2 prize-col">
                <img src="" alt="" id="prizePicsOne" name="prizePicsOne" width="100%">
            </div>
            <div class="col-md-2 prize-col">
                <img src="" alt="" id="prizePicsOne" name="prizePicsOne" width="100%">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 prize-col">
                <img src="<?=Yii::$app->request->baseUrl;?>/images/cake.png" alt="любимый десерт" id="prizePicCake" name="prizePicCake" width="100%">
            </div>
            <div class="col-md-2 prize-col">
                <img src="<?=Yii::$app->request->baseUrl;?>/images/vine.png" alt="" id="prizePicVine" name="prizePicVine" width="100%">
            </div>
            <div class="col-md-2 prize-col">
                <img src="<?=Yii::$app->request->baseUrl;?>/images/ring.png" alt="" width="100%" id="prizePicRing" name="prizePicRing">
            </div>
            <div class="col-md-2 prize-col">
                <img src="" alt="" id="prizePicsOne" name="prizePicsOne" width="100%">
            </div>
            <div class="col-md-2 prize-col">
                <img src="" alt="" id="prizePicsOne" name="prizePicsOne" width="100%">
            </div>
            <div class="col-md-2 prize-col">
                <img src="" alt="" id="prizePicsOne" name="prizePicsOne" width="100%">
            </div>
        </div>
    </div>
    <div class="container inner-container">
        <div class="" align="right">
            <button type="submit" class="main-button btn-prize">Сохранить</button>
        </div>
    </div>
</form>


