<?php


namespace frontend\controllers;

use backend\models\Address;
use backend\models\User;
use yii\db\Exception;
use yii\web\Controller;
use yii\web\Response;

class PageController extends Controller
{

    public function actionIndex(){
        return $this->render("common/login/1");
    }

    public function actionM()
    {
        if(\Yii::$app->user->isGuest){
            return $this->render(Address::LOGIN_PAGE);
        }

        $address = new Address(\Yii::$app->request->get('id'));
        $page = $address->getPage();
print_r($page); exit;
        return $this->render($page);
    }

    public function actionChangePicsPrize(){

    }

    public function actionSavePrize(){
        \Yii::$app->response->format = Response::FORMAT_JSON;
        return ["success" => true, "message" => "Всё успешно сохранено! В добрый путь!"];
    }

}