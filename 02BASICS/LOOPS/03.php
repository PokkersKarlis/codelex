<?php

//Codelex trainig courses
//Section "loops" - exercise 03
//Author - K.Pokkers


$firstWord = readline('Enter first word: ');
$secondWord = readline('Enter second word: ');

$lineLenght = 30;

$wordsLenght = strlen($firstWord) + strlen($secondWord);

$dotCount = 30 - $wordsLenght;

echo $firstWord;
for ($i = 0; $i < $dotCount; $i++) {
    echo '.';
}
echo $secondWord;
