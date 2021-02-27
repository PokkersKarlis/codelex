<?php

require_once 'Slot.php';
require_once 'Person.php';

$slot = new Slot();
$player = new Person();

$player->insertMoney();
$player->setBet();

echo 'Your bet is: ' . $player->showBet() . PHP_EOL;
echo 'Your balance: ' . $player->showDeposit() . PHP_EOL;

foreach ($slot->showItems() as $slotLines => $lines) {
    sleep(1);
    foreach ($lines as $symbol) {
        echo $symbol;
    }
    echo PHP_EOL;
}

echo 'Winning lines: ' . $slot->showWinnings() . PHP_EOL;

if ($slot->showWinnings() < 1) {
    $player->lowerBalance();
} else {
    $player->upperBalance($slot->showWinnings());
}

echo 'Your balance: ' . $player->showDeposit() . PHP_EOL;

do {
    $playAgain = readline('Play again Y/N ? : ');

    foreach ($slot->showItems() as $slotLines => $lines) {
        sleep(0.1);
        foreach ($lines as $symbol) {
            echo $symbol;
        }
        echo PHP_EOL;
    }

    echo 'Winning lines: ' . $slot->showWinnings() . PHP_EOL;

    if ($slot->showWinnings() < 1) {
        $player->lowerBalance();
    } else {
        $player->upperBalance($slot->showWinnings());
    }
    echo 'Your balance: ' . $player->showDeposit() . PHP_EOL;
} while ($playAgain == 'y' || $player->showDeposit() >= 0);

echo PHP_EOL;
