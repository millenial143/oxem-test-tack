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

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}