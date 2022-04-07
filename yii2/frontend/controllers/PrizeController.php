<?php


namespace frontend\controllers;


use yii\web\Controller;

class PrizeController extends Controller
{

    public function actionIndex(){
        return $this->render('index');
    }

    public function actionSavePrizes(){
        var_dump(\Yii::$app->user->identity->id); exit;
    }

    //TODO реализовать кнопку "Сделать выбор за меня"
}