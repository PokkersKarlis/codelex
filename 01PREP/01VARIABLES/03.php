<?php

//Codelex trainig courses
//Section 01 - exercise 03
//Author - K.Pokkers

$data = [
    'name' => 'Kārlis',
    'surname' => 'Pokkers',
    'age' => 34
];

echo $data['name']. PHP_EOL. $data['surname']. PHP_EOL. $data['age']. PHP_EOL;

//Example with class

$classData = new stdClass();

$classData->name = 'Kārlis';
$classData->surname = 'Pokkers';
$classData->age = 34;

echo $classData->name. PHP_EOL. $classData->surname. PHP_EOL. $classData->age;