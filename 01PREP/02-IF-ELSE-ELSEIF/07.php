<?php

//Codelex trainig courses
//Section 02 - exercise 07
//Author - K.Pokkers

$number = 99;

switch ($number){
    case $number < 50:
        echo 'low';
    break;

    case $number > 50 && $number <100:
        echo 'medium';
    break;

    case $number >100:
        echo 'high';
    break;

}