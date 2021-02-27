<?php

class Slot
{
    private $lineOne;
    private $lineTwo;
    private $lineThree;
    private int $winning;

    public function getRandomItem(): string
    {
        $items = ['W', 'W', 'W', 'R', 'R', 'U', 'U'];
        $randomItem = array_rand($items);
        return $items[$randomItem];
    }

    public function setItems():void
    {
        $lineOne = [];
        while (count($lineOne) < 3) {
            array_push($lineOne, $this->getRandomItem());
        }
        $lineTwo = [];
        while (count($lineTwo) < 3) {
            array_push($lineTwo, $this->getRandomItem());
        }
        $lineThree = [];
        while (count($lineThree) < 3) {
            array_push($lineThree, $this->getRandomItem());
        }
        $this->lineOne = $lineOne;
        $this->lineTwo = $lineTwo;
        $this->lineThree = $lineThree;
    }

    public function showItems():array
    {
        $this->setItems();
        $this->checkWinning();
        $slot =[];
         array_push($slot, $this->lineOne, $this->lineTwo, $this->lineThree);
        return $slot;
    }

    public function showWinnings():int
    {
        return $this->winning;
    }

    public function checkWinning():void
    {
        $winning = [];
        if
        ($this->lineOne[0] === $this->lineOne[1] && $this->lineOne[0] === $this->lineOne[2]) {
            array_push($winning, 1);
        }
        if ($this->lineTwo[0] === $this->lineTwo[1] && $this->lineTwo[0] === $this->lineTwo[2]) {
            array_push($winning, 1);
        }
        if ($this->lineThree[0] === $this->lineThree[1] && $this->lineThree[0] === $this->lineThree[2]) {
            array_push($winning, 1);
        }
        if ($this->lineOne[0] === $this->lineTwo[1] && $this->lineOne[0] === $this->lineThree[2]) {
            array_push($winning, 1);
        }
        if ($this->lineOne[2] === $this->lineTwo[1] && $this->lineOne[2] === $this->lineThree[0]) {
            array_push($winning, 1);
        } else
            $this->winning = count($winning);
    }

}