<?php


namespace frontend\controllers;

use app\models\UserBoards;
use frontend\models\user\UserEngine;
use yii\db\Exception;
use yii\web\Controller;
use yii\web\Response;
use yii\web\User;

class RegisterController extends Controller
{
    public function actionLogin(){
        return $this->render("login");
    }

    public function actionRegister(){
        return $this->render("register");
    }

    public function actionLoginUser()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $user_engine = new UserEngine(\Yii::$app->request->post());
        if(!$user_engine->validate()){
            return ["success" => false, "message" => "Заполните все поля!"];
        }

        try {
            $user = $user_engine->getUser();
        }catch (Exception $exception){
            return ["success" => false, "message" => \MessageEnum::ERROR_QR];
        }

        if(empty($user)){
            return ["success" => false, "message" => "Вы ввели неверные логин или пароль или ещё не зарегистрированы!"];
        }

        //TODO: тут нам надо определить, на каком она сейчас шаге и в зависимости от этого идти дальше
        $view = "";


        return ["success" => true, "data" => $this->render($view, ['name' => $this->user->name])];
    }

    public function actionRegisterUser()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $user = new UserEngine(\Yii::$app->request->post());

        if(!$user->validate()){
            return ["success" => false, "message" => "Заполните все поля!"];
        }

        try{
            $user->create();
        }catch (\yii\base\Exception $exception){
            return ["success" => false, "message" => $exception->getMessage()];
        }

        return ["success" => true, "data" => $this->render("acquaintance", ['name' => $this->user->name])];
    }

    public function actionAcquaintance(){
        return $this->render('acquaintance');
    }
}