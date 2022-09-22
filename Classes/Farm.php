<?php
namespace Farm\Classes;

class Farm {
    private $animalsArray = array();
    private $productsArray = array();

    // добавление животного
    public function addAnimal(Animal $animal){
        if(!isset($this -> animalsArray[$animal -> getType()]))
            $this -> animalsArray[$animal -> getType()] = array();

        array_push($this -> animalsArray[$animal -> getType()], $animal);
    }

    // сбор продукции
    public function collectProduct($times = 1):array{
        $products = array();
        // добавление продукции с массив с собраной продукцией за $times раз
        for ($i = 0; $i < $times; $i++){
            foreach ($this -> animalsArray as $type => $animals){
                foreach ($animals as $animal){
                    if(!isset($products[$animal -> getProductType()]))
                        $products[$animal -> getProductType()] = 0;

                    $products[$animal -> getProductType()] = $products[$animal -> getProductType()] + $animal -> giveProduct();
                }
            }
        }
        // добавление продукции с массив с собраной продукцией за все время
        foreach ($products as $product => $value){
            if(!isset($this -> productsArray[$product]))
                $this -> productsArray[$product] = 0;

            $this -> productsArray[$product] = $this -> productsArray[$product] + $value;
        }

        return array(
            'times' => $times,
            'products' => $products
            );
    }

    public function getAnimalsArray():array{
        return $this -> animalsArray;
    }

    public function setAnimalsArray($val){
        $this -> animalsArray = $val;
    }

    public function getProductsArray():array{
        return $this -> productsArray;
    }

    public function setProductsArray($val){
        $this -> productsArray = $val;
    }

}
