<?php
namespace Farm;

require_once __DIR__ . '/vendor/autoload.php';

use Farm\Classes\Farm;
use Farm\Classes\Cow;
use Farm\Classes\Chicken;
use Farm\Classes\Show;


$farm = new Farm();


for($i = 0; $i < 10; $i++){
    $farm -> addAnimal(new Cow());
}
for($i = 0; $i < 20; $i++){
    $farm -> addAnimal(new Chicken());
}

Show::countAnimals($farm->getAnimalsArray());
Show::countProductsForTimes($farm->collectProduct(7));

for($i = 0; $i < 1; $i++){
    $farm -> addAnimal(new Cow());
}
for($i = 0; $i < 5; $i++){
    $farm -> addAnimal(new Chicken());
}

Show::countAnimals($farm->getAnimalsArray());
Show::countProductsForTimes($farm->collectProduct(7));

Show::countProducts($farm->getProductsArray());






