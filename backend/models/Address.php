<?php

namespace backend\models;

class Address
{

    public $id;

    const COUNT = 6;

    const VOLUMES_COUNT = 8;

    private $address = null;

    /**
     * Address constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = str_split($_GET['id']);

    }

    public function getPage(){

        switch ($this->id){
            default:
                return "common/login/1";
                break;

        }

        try{
            $this->preparePageFromAddress();
        }catch (\Exception $exception){
            throw $exception;
        }

        return $this->address;

    }

    private function preparePageFromAddress(){

        $type = $this->getType();
        $step = $this->getStep();
        $vol = $this->getVolume();

        $this->address = $type . "/" . $step . "/" . $vol;

    }

    private function getType(){

        //4 типа, делать с учётом добавления типа
        return "common";

    }

    private function getStep(){

        return "login";

        //шагов может быть разное кол-во
        switch ($this->id[self::COUNT-1]){
            case 1:
            case 6:
                return "greetings";
        }

    }

    private function getVolume(){

        return "1";
        return rand(1, self::VOLUMES_COUNT);
    }

}