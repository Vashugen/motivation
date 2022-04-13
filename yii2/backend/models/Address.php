<?php

namespace backend\models;

use yii\base\Theme;

class Address
{

    public $id;

    //тип интерфейса в зависимости от типа приобретённой доски
    const TYPE = "common/";

    private $addresses = [
        '1' => [123451, 703869, 977571, 140485, 501707, 609128, 715012, 908794, 362319],
        '2' => [287452, 216992, 539466, 650236, 255536, 824446, 793768, 323227, 179377],
        '3' => [],
        '4' => [],
        '5' => []
    ];

    private $levels = [
        '1' => '/register/acquaintance',
        '2' => 'prize/firstPrize',
        '3' => 'prize/secondPrize',
        '4' => 'prize/thirdPrize',
        '5' => 'prize/finish'
    ];

    const LOGIN_PAGE = "login/index";

    /**
     * Address constructor.
     * @param $id
     */
    public function __construct($id)
    {
        //$this->id = str_split($_GET['id']);
        $this->id = $id;
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