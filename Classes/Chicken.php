<?php


class Chicken extends Animal {
    public function __construct()
    {
        parent::incrementId();
        $this -> animalId = parent::getId();
        $this -> type = 'Курица';
        $this -> productType = 'Яйцо';
        $this -> productMin = 0;
        $this -> productMax = 1;
    }
}


