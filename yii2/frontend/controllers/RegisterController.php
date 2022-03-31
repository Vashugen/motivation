<?php


namespace frontend\controllers;


use yii\db\Exception;

class RegisterController
{
    public function actionLogin(){
        return $this->render("login");
    }


    public function actionLoginUser(){

    }

    public function actionRegisterUser(){

        $user = new \UserEngine(Yii::$app->request->post());

        try{
            $user->create();
        }catch (Exception $exception){
            print_r($exception->getMessage()); exit;
            //render || modal
        }

        return $this->render("prize");
    }
}