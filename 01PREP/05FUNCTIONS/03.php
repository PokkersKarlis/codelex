<?php

//Codelex trainig courses
//Section 05 - exercise 03
//Author - K.Pokkers

$person = new stdClass();

$person->name = 'Kārlis';
$person->surname = 'Pokkers';
$person->age = 34;

function checkAge(stdClass $person): bool
{
    return $person->age >= 18;
}

if (checkAge($person)) {
    echo $person->name . ' ' . $person->surname . ' has reached the age of 18';
} else {
    echo 'This person is underaged';

}