<?php

//Codelex trainig courses
//Section "arithmetics" - exercise "06"
//Author - K.Pokkers

$lowerNumber = 1;
$upperNumber = 110;

$numbers = range($lowerNumber, $upperNumber);

foreach ($numbers as $number) {

    switch ($number) {
        case($number % 3 === 0 && $number % 5 === 0):
            echo 'CozaLoza ';
            break;

        case ($number % 11 === 0):
            echo $number . PHP_EOL;
            break;

        case ($number % 7 === 0):
            echo 'Woza ';
            break;

        case($number % 5 === 0):
            echo 'Loza ';
            break;

        case($number % 3 === 0):
            echo 'Coza ';
            break;

        default:
            echo $number . ' ';
    }

}