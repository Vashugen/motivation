<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_boards".
 *
 * @property int $id
 * @property string $name
 * @property string $login
 * @property string $password
 */
class UserBoards extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_boards';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'login', 'password'], 'required'],
            [['name', 'login'], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }
}
