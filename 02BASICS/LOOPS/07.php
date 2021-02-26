<?php

//Codelex trainig courses
//Section "loops" - exercise 07
//Author - K.Pokkers

class RollDiceTwice
{
    private int $firstDice;
    private int $secondDice;
    private int $desiredNumber;

    public function setFirstDice(): int
    {
        return $this->firstDice = rand(1, 6);
    }

    public function setSecondDice(): int
    {
        return $this->secondDice = rand(1, 6);
    }

    public function calculate(): int
    {
        return $this->firstDice + $this->secondDice;
    }

    public function getCustomNumber(): int
    {
        return $this->desiredNumber;
    }

    public function setCustomNumber():int
    {
        $number = filter_var(readline('Please enter your number 2 - 12 '), FILTER_VALIDATE_INT);
        while ($number != true || $number < 2 || $number > 12) {
            $number = filter_var(readline('Please enter valid number 2 - 12 '), FILTER_VALIDATE_INT);
        }
        $this->desiredNumber = $number;
    }

}

$numbers = new RollDiceTwice();
$numbers->setCustomNumber();
echo 'Desired sum: ' . $numbers->getCustomNumber() . PHP_EOL;
do {
    echo $numbers->setFirstDice() . ' and ' . $numbers->setSecondDice() . PHP_EOL;
} while ($numbers->calculate() !== $numbers->getCustomNumber());



