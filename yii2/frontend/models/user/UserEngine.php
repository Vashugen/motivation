<?php

namespace frontend\models\user;

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
        }catch (Exception $exception){
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