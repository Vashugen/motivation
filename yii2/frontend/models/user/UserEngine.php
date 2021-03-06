<?php

namespace frontend\models\user;

use app\models\UserBoards;
use common\models\User;
use yii\base\Model;
use yii\db\Exception;

class UserEngine extends Model
{

    public $name;

    public $login;

    public $password;

    /**
     * UserEngine constructor.
     * @param $login
     * @param $password
     */
    public function __construct($params = [])
    {
        $this->name = isset($params['userName']) ? $params['userName'] : null;
        $this->login = $params['userLogin'];
        $this->password = $params['userPassword'];
    }

    public function rules()
    {
        return [
            [['login', 'password'], 'required']
        ];
    }

    public function getUser()
    {
         return UserBoards::find()
            ->where(["login" => $this->login])
            ->andWhere(["password" => md5($this->password)])
            ->one();
    }

    public function create(){

        try{
            $this->checkData();
        }catch (\yii\base\Exception $exception){
            throw $exception;
        }

        try{
            $this->createUser();
        }catch (Exception $exception){
            throw $exception;
        }

    }

    private function checkData()
    {

        //TODO валидность присланных значений

        if(empty($this->name)){
            throw new Exception("Пожалуйста, заполните имя!");
        }
        $exists_login = UserBoards::findAll(['login' => $this->login]);
        if(!empty($exists_login)){
            throw new \yii\base\Exception("Логин уже существует, пожалуйста, попробуйте другой!");
        }
    }

    private function createUser(){

        $model = new User();
        $model->username = $this->login;
        $model->form_name = $this->name;
        $model->setPassword($this->password);

        try{
            $model->save();
        }catch (Exception $exception){
            throw new Exception(MessageEnum::ERROR_QR);
        }
    }


}