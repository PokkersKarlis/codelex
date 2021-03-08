<?php declare(strict_types=1);
//Codelex trainig courses
//Section "classes-and-objects" - exercise 07
//Author - K.Pokkers

require_once 'Dog.php';
require_once 'Dogtest.php';

$test = new DogTest();
$test->setDogs([
    $max = new Dog('Max', 'male', 'Lady', 'Rocky'),
    $rocky = new Dog('Rocky', 'male', 'Molly', 'Sam'),
    $sparky = new Dog('Sparky', 'male'),
    $buster = new Dog('Buster', 'male', 'Lady', 'Sparky'),
    $sam = new Dog('Sam', 'male'),
    $lady = new Dog('Lady', 'female'),
    $molly = new Dog('Molly', 'female'),
    $coco = new Dog('Coco', 'female', 'Molly', 'Buster'),
]);
foreach ($test->getDogs() as $dog) {
    echo 'Dog ' . $dog->getName() . ' is ' . $dog->getSex() . ' and parents are: mother -> ' . $dog->getMother() . ', father -> ' . $dog->fathersName() . PHP_EOL;
}
echo $max->HasSameMotherAs($sam) ? "True" : "False";;



