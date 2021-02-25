<?php

//Codelex trainig courses
//Section "arithmetics" - exercise "02"
//Author - K.Pokkers

$number = readline('Please enter number -> ');

function checkOddEven(int $number): bool
{
    if ($number % 2 === 0) {
        return true;
    } else {
        return false;
    }
}

if (is_numeric($number)) {
    if (checkOddEven($number) == true) {
        echo 'Even number' . PHP_EOL;
        echo 'buye!';
        exit;
    } else {
        echo 'Odd Number' . PHP_EOL;
        echo 'buye!';
        exit;
    }
} else {
    echo 'Please enter valid symbol - NUMBER!!!';
}