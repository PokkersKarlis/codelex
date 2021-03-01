<?php

//Codelex trainig courses
//Section "classes-and-objects" - exercise 02
//Author - K.Pokkers

class Swapper
{
    private int $pointOne;
    private int $pointTwo;

    public function __construct(int $pointOne, int $pointTwo)
    {
        $this->pointOne = $pointOne;
        $this->pointTwo = $pointTwo;
    }

    public function getPoints():string
    {
        return '(' . $this->pointOne . ', ' . $this->pointTwo . ')' . PHP_EOL;
    }

    function swapPoints($firstPoints, $secondPoints):void
    {
        $switcherOne = $firstPoints->pointOne;
        $switcherTwo = $firstPoints->pointTwo;

        $firstPoints->pointOne = $secondPoints->pointOne;
        $firstPoints->pointTwo = $secondPoints->pointTwo;

        $secondPoints->pointOne = $switcherOne;
        $secondPoints->pointTwo = $switcherTwo;
    }

}

$firstPoints = new Swapper(5, 2);
$secondPoints = new Swapper(-3, 6);

echo $firstPoints->getPoints();
echo $secondPoints->getPoints();

$firstPoints->swapPoints($firstPoints, $secondPoints);

echo $firstPoints->getPoints();
echo $secondPoints->getPoints();






