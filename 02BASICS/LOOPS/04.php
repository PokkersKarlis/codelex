<?php

//Codelex trainig courses
//Section "loops" - exercise 04
//Author - K.Pokkers


$startNumber = readline('Enter first number: ');
$filteredStartNumber = filter_var($startNumber, FILTER_VALIDATE_INT);

$endNumber = readline('Enter end number: ');
$filteredEndNumber = filter_var($endNumber, FILTER_VALIDATE_INT);
if ($filteredStartNumber !== false && $filteredEndNumber !== false) {
    while ($filteredStartNumber >= $filteredEndNumber) {
        $endNumber = readline('Enter valid end number - bigger than starting number');
        $filteredEndNumber = filter_var($endNumber, FILTER_VALIDATE_INT);
    }

    $numbersArray = range($filteredStartNumber, $filteredEndNumber);

    foreach ($numbersArray as $numbers) {
        switch ($numbers) {
            case ($numbers % 3 === 0 && $numbers % 5 === 0 && $numbers % 20 === 0):
                echo 'FizzBuzz ' . PHP_EOL;
                break;
            case ($numbers % 3 === 0 && $numbers % 5 === 0):
                echo 'FizzBuzz ';
                break;
            case ($numbers % 20 === 0 && $numbers % 5 === 0):
                echo 'Buzz' . PHP_EOL;
                break;
            case($numbers % 5 === 0):
                echo 'Buzz ';
                break;
            case ($numbers % 3 === 0):
                echo 'Fizz ';
                break;
            default :
                echo $numbers . ' ';
        }
    }
} else {
    echo 'Invalid input';
}


