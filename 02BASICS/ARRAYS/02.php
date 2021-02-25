<?php

//Codelex trainig courses
//Section "arrays" - exercise 02
//Author - K.Pokkers

$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers

$average = array_sum($numbers) / count($numbers);

echo $average;
