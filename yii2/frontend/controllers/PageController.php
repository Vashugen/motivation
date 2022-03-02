<?php


namespace frontend\controllers;

use backend\models\Address;
use frontend\models\User;
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

    public function actionLogin(){
        return $this->render("common/login/login");
    }

    public function actionLoginUser(){
        //check users data
        $checked = true;
        if($checked){
            //TODO разные приветсвия (+ ИМЯ) в зависимости от того, первый раз или нет (подарки за возвращение)
            return $this->render("common/login/prize");
        }
    }

    public function actionRegisterUser(){

        $params = new User(Yii::$app->request->post());

        //TODO save user data + redirect
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