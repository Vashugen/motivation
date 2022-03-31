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
        $id = \Yii::$app->request->get('id');
        $address = new Address($id);
        $page = $address->getPage();

        return $this->render($page);
    }

    public function actionRegisterUser(){

        $user = new User(Yii::$app->request->post());

        try{
            $user->createUser($params);
        }catch (Exception $exception){
            //отправлять на почту или в логи писать
        }

        return $this->render("common/login/prize");
    }

    public function actionRegister()
    {



        return $this->render("common/login/register");
    }

    public function actionChangePicsPrize(){

    }

    public function actionSavePrize(){
        \Yii::$app->response->format = Response::FORMAT_JSON;
        return ["success" => true, "message" => "Всё успешно сохранено! В добрый путь!"];
    }

}