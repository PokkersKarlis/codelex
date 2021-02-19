<?php

//Codelex trainig courses
//Section 05 - exercise 04
//Author - K.Pokkers


function underAge(stdClass $person): bool
{
    return $person->age < 18;
}

$karlis = new stdClass();
$karlis->name = 'Kārlis';
$karlis->surname = 'Pokkers';
$karlis->age = 34;

$sandra = new stdClass();
$sandra->name = 'Sandra';
$sandra->surname = 'Pokkere';
$sandra->age = 34;

$janis = new stdClass();
$janis->name = 'Jānis';
$janis->surname = 'Pokkers';
$janis->age = 10;

$elza = new stdClass();
$elza->name = 'Elza';
$elza->surname = 'Pokkere';
$elza->age = 5;

$persons = [
    $karlis,
    $sandra,
    $janis,
    $elza
];

foreach ($persons as $person) {
    if (underAge($person)) {
        echo $person->name . ' ' . $person->surname . ' is uderaged' . PHP_EOL;
    } else {
        echo $person->name . ' ' . $person->surname . ' has reached 18' . PHP_EOL;
    }
}