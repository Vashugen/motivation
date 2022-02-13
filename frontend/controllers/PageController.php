<?php


namespace frontend\controllers;

use backend\models\Address;
use yii\web\Controller;

class PageController extends Controller
{

    public function actionM(){
        $id = \Yii::$app->request->get('id');
        $address = new Address($id);
        $page = $address->getPage();

        return $this->render($page);
    }

}