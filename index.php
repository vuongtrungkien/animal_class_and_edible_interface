<?php
include "InterfaceClass/Edible.php";
include "AbstractClass/Animal.php";
include "AbstractClass/Fruits.php";
include "Animal/Tiger.php";
include "Animal/Chicken.php";
include "Fruits/Apple.php";
include "Fruits/Orange.php";


echo('---- Animals<br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound() . '<br>';
    if ($animal instanceof Chicken) {
        echo $animal->howToEat() . ' ';
    }
}

echo "<br>";
echo('---- Fruits<br>');

$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '<br>';
}