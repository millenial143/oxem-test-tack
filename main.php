<?php

include 'Classes/Farm.php';
include 'Classes/Animal.php';
include 'Classes/Cow.php';
include 'Classes/Chicken.php';



$farm = new Farm();


for($i = 0; $i < 10; $i++){
    $farm -> addAnimal(new Cow());
}
for($i = 0; $i < 20; $i++){
    $farm -> addAnimal(new Chicken());
}

$farm -> countAnimals();

$farm -> collectProduct(7);

for($i = 0; $i < 1; $i++){
    $farm -> addAnimal(new Cow());
}
for($i = 0; $i < 5; $i++){
    $farm -> addAnimal(new Chicken());
}

$farm -> countAnimals();

$farm -> collectProduct(7);
$farm -> countProducts();





