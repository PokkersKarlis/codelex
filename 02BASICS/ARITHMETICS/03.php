<?php

//Codelex trainig courses
//Section "arithmetics" - exercise "03"
//Author - K.Pokkers

$lowerNumber = 1;
$upperNumber = 100;

$numbers = range($lowerNumber, $upperNumber);

function countAverage(array $numbers): float
{
    return array_sum($numbers) / count($numbers);
}

echo 'The sum of ' . $lowerNumber . ' and ' . $upperNumber . ' is ' . array_sum($numbers) . PHP_EOL;
echo 'And the average is ' . countAverage($numbers) . PHP_EOL;




