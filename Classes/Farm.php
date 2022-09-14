<?php


class Farm {
    private $animalsArray = array();
    private $productsArray = array();

    // добавление животного
    public function addAnimal(Animal $animal, int $amount = 1){
        if(!isset($this -> animalsArray[$animal -> getType()]))
            $this -> animalsArray[$animal -> getType()] = array();

        array_push($this -> animalsArray[$animal -> getType()], $animal);
    }

    // подсчет животных
    public function countAnimals(){
        echo 'Животные на ферме: '.PHP_EOL;
        foreach ($this->animalsArray as $type => $typeArr){
            echo 'Животное: '.$type.'   Количество: '.count($typeArr).PHP_EOL;
        }
        echo PHP_EOL;
    }

    // сбор продукции
    public function collectProduct($times = 1){
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

        echo 'Продукция за '.$times.' дней:'.PHP_EOL;
        foreach ($products as $product => $value) {
            echo $product.': '.$value.PHP_EOL;
        }
        echo PHP_EOL;

    }
    // вывод всей собраной продукции
    public function countProducts(){
        echo 'Собрано продукции всего: '.PHP_EOL;
        foreach ($this -> productsArray as $product => $value) {
            echo $product.': '.$value.PHP_EOL;
        }
        echo PHP_EOL;
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
