<?php

//Codelex trainig courses
//Section "flow-of-control" - exercise 02
//Author - K.Pokkers

class Checker
{
    public function checkNumber(): string
    {
        do {
            $number = filter_var((int)readline('Enter the number'), FILTER_VALIDATE_INT);
        } while ($number === false);
        if ($number < 0) {
            return 'Number is negative';
        }
        if ($number > 0) {
            return 'Number is positive';
        }
        if ($number === 0) {
            return 'There is no negative or positive number! Its - 0';
        }
    }
}

$check = new Checker();
echo $check->checkNumber();