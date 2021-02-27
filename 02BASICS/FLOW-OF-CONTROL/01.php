<?php

//Codelex trainig courses
//Section "flow-of-control" - exercise 01
//Author - K.Pokkers

class LargestNumber
{
    private $numbers = [];

    public function getNumbers(): void
    {
        do {
            $numberOne = filter_var(readline('Input the 1st number: '), FILTER_VALIDATE_INT);
        } while ($numberOne != true);
        array_push($this->numbers, $numberOne);
        do {
            $numberTwo = filter_var(readline('Input the 2nd number: '), FILTER_VALIDATE_INT);
        } while ($numberTwo != true);
        array_push($this->numbers, $numberTwo);
        do {
            $numberThree = filter_var(readline('Input the 3rd number: '), FILTER_VALIDATE_INT);
        } while ($numberThree != true);
        array_push($this->numbers, $numberThree);

    }

    public function getMaxNumber(): int
    {
        return max($this->numbers);
    }
}

$checker = new LargestNumber();
$checker->getNumbers();
echo $checker->getMaxNumber();