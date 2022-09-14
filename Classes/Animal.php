<?php


class Animal {
    protected static $id;
    protected $animalId;
    protected $type;
    protected $productType;
    protected $productMax;
    protected $productMin;

    public function giveProduct():int{
        return rand($this -> productMin, $this -> productMax);
    }

    protected static function incrementId(){
        self::$id++;
    }

    public static function getId(){
        return self::$id;
    }

    public static function setId($val){
        self::$id = $val;
    }

    public function getType(){
        return $this -> type;
    }

    public function setType($val) {
        $this -> type = $val;
    }

    public function getProductType(){
        return $this -> productType;
    }

    public function setProductType($val) {
        $this -> productType = $val;
    }

    public function getProductMax(){
        return $this -> productMax;
    }

    public function setProductMax($val) {
        $this -> productMax = $val;
    }

    public function getProductMin(){
        return $this -> productMin;
    }

    public function setProductMin($val) {
        $this -> productMin = $val;
    }
}