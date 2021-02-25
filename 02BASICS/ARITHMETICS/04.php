<?php

//Codelex trainig courses
//Section "arithmetics" - exercise "04"
//Author - K.Pokkers

$lowerNumber = 1;
$upperNumber = 10;
$product = 1;

for ($i = $lowerNumber; $i <= $upperNumber; $i++) {
    $product = $product * $i;
}
echo $product;