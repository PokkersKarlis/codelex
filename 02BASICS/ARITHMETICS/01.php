<?php

//Codelex trainig courses
//Section "arithmetics" - exercise "01"
//Author - K.Pokkers
$firstInt = readline('Enter first integer -> ');
$secondInt = readline('Enter second integer -> ');


function checkInt(int $firstInt, int $secondInt): bool
{
    if ($firstInt === 15 || $secondInt === 15 || $firstInt + $secondInt === 15) {
        return true;
    } else {
        return false;
    }
}

if (is_numeric($firstInt) && is_numeric($secondInt)) {
    if (checkInt($firstInt, $secondInt) == true) {
        echo 'True!';
    } else {
        echo 'False';
    }
} else {
    echo 'Please enter valid symbol - NUMBER!!!';
}
