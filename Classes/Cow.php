<?php
namespace Farm\Classes;

class Cow extends Animal {
    public function __construct()
    {
        parent::incrementId();
        $this -> animalId = parent::getId();
        $this -> type = 'Корова';
        $this -> productType = 'Молоко';
        $this -> productMin = 8;
        $this -> productMax = 12;
    }
}

