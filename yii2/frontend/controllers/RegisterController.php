<?php


namespace frontend\controllers;


class RegisterController
{
    public function actionLogin(){
        return $this->render("login");
    }

    public function actionLoginUser(){
        //check users data на содержание символов в логин/пароль
        $checked = true;
        if($checked){
            //TODO разные приветсвия (+ ИМЯ) в зависимости от того, первый раз или нет (подарки за возвращение)
            return $this->render("common/login/prize");
        }
    }
}