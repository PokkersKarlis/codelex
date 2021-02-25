<?php

//Codelex trainig courses
//Section "arithmetics" - exercise "05"
//Author - K.Pokkers

$computerNumber = rand(1, 100);

$playerNumber = readline('I am thinking of a number between 1-100.  Try to guess it. > ');

$filteredNumber = filter_var($playerNumber, FILTER_VALIDATE_INT);

if ($filteredNumber !== false && $playerNumber >= 1 && $playerNumber <= 100) {
    if ($filteredNumber > $computerNumber) {
        echo 'Sorry, you are too high.  I was thinking of ' . $computerNumber;
        exit;
    } else if ($filteredNumber < $computerNumber) {
        echo 'Sorry, you are too low.  I was thinking of ' . $computerNumber;
        exit;
    } else {
        echo 'You guessed it!  What are the odds?!?';
    }
} else {
    echo 'Please enter valid symbol - NUMBER from 1 - 100 !!!';
}
