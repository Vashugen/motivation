<?php


namespace frontend\controllers;

use backend\models\Address;
use yii\web\Controller;

class PageController extends Controller
{

    public function actionIndex(){
        print_r("here"); exit;
    }

    public function actionM(){
        print_r("here"); exit;
        $id = \Yii::$app->request->get('id');
        $address = new Address($id);
        $page = $address->getPage();

        return $this->render($page);
    }

}