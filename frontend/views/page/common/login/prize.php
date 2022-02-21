<?php
$this->registerJsFile('/js/common.js', ['depends' => [\yii\web\JqueryAsset::className(),\yii\bootstrap4\BootstrapAsset::className()]/*, 'position' => yii\web\View::POS_LOAD*/]);
?>

<style>

    .prize-input {
        margin-top: 1%;
        font-size: 1.7em;
        border-radius: 8px;
    }

    .prize-col {
        float: left;
        /*margin: 0 0 0 3.5%;*/
    }

    .prize-col:first-child {
        margin-left: 0;
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
        font-weight: normal;
    }

    .inner-container {
        margin-top: 2%;
    }

    .prize-btn {
        display: inline-block; /* строчно-блочный */
        padding: 10px 30px; /* расстояние от текста до края кнопки */
        background-color: #00e4a2; /* цвет кнопки  */
        border-radius: 20px; /* скругление углов */
        font-size: 40px; /* размер шрифта */
        text-transform: uppercase; /* трансформировать в заглавные буквы */
        text-decoration: none; /* не подчеркивать ссылку */
        transition: 0.2s; /* плавный ховер эффект */
        color: #f7f8e8; /* цвет текста на кнопке */
    }

</style>

<div class="container text titile">
    <div>Добро пожаловать!</div>
</div>
<div class="container inner-container text desc">
    <div>
        Настало время выбрать свою награду за прохождение ключевых шагов!<br>
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
    <div class="container inner-container prize-item" style="padding: 10px">
        <div class="row">
            <div class="col-lg-4">
                <input type="text" class="prize-input" name="prizeOne" placeholder="НАГРАДА" autocomplete="off">
            </div>
            <div class="col-lg-4 col-lg-offset-1">
                <input type="text" class="prize-input" name="prizeTwo" placeholder="НАГРАДА" autocomplete="off">
            </div>
            <div class="col-lg-4">
                <input type="text" class="prize-input" name="prizeThree" placeholder="НАГРАДА" autocomplete="off">
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
            <button type="submit" class="prize-btn">Сохранить</button>
        </div>
    </div>
</form>


