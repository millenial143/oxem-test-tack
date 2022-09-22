<?php
namespace Farm\Classes;

class Show {
    // вывод животных и их количества
    public static function countAnimals($animalsArray){
        echo 'Животные на ферме: '.PHP_EOL;
        foreach ($animalsArray as $type => $typeArr){
            echo 'Животное: '.$type.'   Количество: '.count($typeArr).PHP_EOL;
        }
        echo PHP_EOL;
    }

    public static function countProductsForTimes($prods){
        echo 'Продукция за ' . $prods['times'] . ' дней:'.PHP_EOL;
        foreach ($prods['products'] as $product => $value) {
            echo $product.': '.$value.PHP_EOL;
        }
        echo PHP_EOL;
    }

    // вывод всей собраной продукции
    public static function countProducts($productsArray){
        echo 'Собрано продукции всего: '.PHP_EOL;
        foreach ($productsArray as $product => $value) {
            echo $product.': '.$value.PHP_EOL;
        }
        echo PHP_EOL;
    }
}
