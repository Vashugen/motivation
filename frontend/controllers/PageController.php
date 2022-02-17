<?php


namespace frontend\controllers;

use backend\models\Address;
use yii\web\Controller;

class PageController extends Controller
{

    public function actionIndex(){
        return $this->render("common/login/1");
    }

    public function actionM(){
        $id = \Yii::$app->request->get('id');
        $address = new Address($id);
        $page = $address->getPage();

        return $this->render($page);
    }

    public function actionLogin(){
        return $this->render("common/login/login");
    }

    public function actionRegister()
    {
        return $this->render("common/login/register");
    }

    public function actionSaveLoginData(){
        //TODO save user data + redirect
        return $this->render("common/login/prize");
    }

}