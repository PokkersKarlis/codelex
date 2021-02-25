<?php

//Codelex trainig courses
//Section "loops" - exercise 02
//Author - K.Pokkers

$selectNumber = readline('Enter number: ');
$filteredNumber = filter_var($selectNumber, FILTER_VALIDATE_INT);

$multipleCount = readline('Enter multiple times: ');
$filteredCount = filter_var($multipleCount, FILTER_VALIDATE_INT);

if ($filteredNumber === true && $filteredCount === true) {

    $count = 1;

    for ($i = 1; $i <= $filteredCount; $i++) {
        $count *= $filteredNumber;
    }
    echo $count;
} else {
    echo 'Please enter valid number: ';
}