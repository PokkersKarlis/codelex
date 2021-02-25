<?php

//Codelex trainig courses
//Section "loops" - exercise 05
//Author - K.Pokkers

$rollingDice = 0;
$score = [];
$choice = 'y';
echo 'Welcome to Piglet!' . PHP_EOL;

while ($choice === 'y' || $choice === 'n') {

    echo 'You rolled a ' . $rollingDice = rand(1, 6) . PHP_EOL;
    if ($rollingDice == 1) {
        echo 'You got 0 points.';
        break;
    }
    array_push($score, $rollingDice);
    echo 'Your total point count is: ' . array_sum($score) . PHP_EOL;
    $choice = readline('Roll again? y or n ');
    if ($choice == 'n') {
        echo 'Your total point count is: ' . array_sum($score);
        break;
    }
}



