<?php

//Codelex trainig courses
//Section "arithmetics" - exercise "09"
//Author - K.Pokkers

$weight = readline('Enter your weight in kg -> ');
$height = readline('Enter your height in cm -> ');

$pounds = $weight * 2.20462;
$inches = $height * 0.393701;

$minBmi = 18.5;
$maxBmi = 25;

function countBmi(float $pounds, float $inches): float
{
    return $pounds * 703 / ($inches ** 2);
}

echo 'Your BMI is ' . round(countBmi($pounds, $inches), 2) . ' and' . PHP_EOL;
if (countBmi($pounds, $inches) < $minBmi) {
    echo 'you are underweight!';
} elseif (countBmi($pounds, $inches) > $maxBmi) {
    echo 'you are overweight!';
} else {
    echo 'you have optimal weight!';
}
