<?php

//Codelex trainig courses
//Section "arrays" - exercise 03
//Author - K.Pokkers

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$numberInput = readline("Enter the numeric value to search for: ");

if (is_numeric($numberInput)) {

//todo check if an array contains a value user entered

    $positiveResult = array_search($numberInput, $numbers);

    if(is_int($positiveResult)){
        echo 'Array "numbers" contains number '. $numberInput;
    }else {
        echo 'There is no number ' . $numberInput . ' in array "numbers"';
    }
} else {
    echo 'Please input valid format "NUMBERS" !';
}

