<?php

use app\models\UserBoards;

use yii\base\Model;

class UserEngine extends Model
{

    public $login;

    public $password;

    /**
     * UserEngine constructor.
     * @param $login
     * @param $password
     */
    public function __construct($params = [])
    {
        $this->login = $params['userLogin'];
        $this->password = $params['userPassword'];
    }

    public function create(){

        try{
            $this->checkData();
        }catch (Exception $exception){
            throw $exception;
        }

        try{
            $this->createUser();
        }catch (Exception $exception){
            throw $exception;
        }

    }

    private function checkData(){

        //на пустоту
        //на валидность (буквы блаблабла)

        $exists_login = UserBoards::findAll(['login' => $this->login]);
        if(!empty($exists_login)){
            throw new \yii\db\Exception("Логин уже существует, пожалуйста, попробуйте другой!");
        }
    }

    private function createUser(){

        $model = new UserBoards();
        $model->login = $this->login;
        $model->password = md5($this->password);

        try{
            $model->save();
        }catch (Exception $exception){
            throw new \yii\db\Exception(MessageEnum::ERROR_QR);
        }
    }


}