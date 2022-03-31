<?php

namespace backend\models;

use yii\base\Theme;

class Address
{

    public $id;

    //тип интерфейса в зависимости от типа приобретённой доски
    const TYPE = "common/";

    private $addresses = [
        '1' => [12345, 703869, 977571, 140485, 501707, 609128, 715012, 908794, 362319],
        '2' => [],
        '3' => [],
        '4' => [],
        '5' => []
    ];

    private $levels = [
        '1' => 'login/index',
        '2' => 'prize/1',
        '3' => 'prize/2',
        '4' => 'prize/3',
        '5' => 'prize/finish'
    ];

    /**
     * Address constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = str_split($_GET['id']);

    }

    public function getPage(){

        $level = null;
        foreach ($this->addresses as $l => $items){
            if(in_array($this->id, $items)){
                $level = $l;
            }
        }

        if(!$level) $level = 1;

        return self::TYPE.$this->levels[$level];
    }


}