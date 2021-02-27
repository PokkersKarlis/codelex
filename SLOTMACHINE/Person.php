<?php

class Person
{
    private int $deposit;
    private int $bet;

    public function insertMoney(): void
    {
        do {
            $insert = filter_var(readline('Insert money: '), FILTER_VALIDATE_INT);
        } while ($insert === false);
        $this->deposit = $insert;
    }

    public function showDeposit(): int
    {
        return $this->deposit;
    }

    public function setBet(): void
    {
        do {
            $insert = filter_var(readline('Set Your bet: '), FILTER_VALIDATE_INT);
        } while ($insert === false || $insert % 10 !== 0);
        $this->bet = $insert;
    }

    public function showBet(): int
    {
        return $this->bet;
    }

    public function lowerBalance()
    {
        $this->deposit = $this->deposit - $this->bet;
    }

    public function upperBalance($winning)
    {
        $this->deposit = $this->deposit + ($this->bet * $winning);
    }
}