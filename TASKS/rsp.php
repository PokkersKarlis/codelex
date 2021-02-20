<?php

//Codelex trainig courses
//Section "tasks" - exercise "rsp"
//Author - K.Pokkers

$validOptions = ['R', 'P', 'S'];
$userChoice = strtoupper(readline('Enter your option: R => Rock, P => Paper, S => Scissors -> '));

if (!in_array($userChoice, $validOptions)) {
    echo 'Please select valid option "R, P or S!';
    exit;
}

$pcChoice = $validOptions[rand(0, 2)];

if ($userChoice === $pcChoice) {
    echo 'You chose : ' . $userChoice . PHP_EOL . 'PC chose : ' . $pcChoice . PHP_EOL . 'And it is DRAW!';
} else if ($userChoice === 'R' && $pcChoice === 'S' || $userChoice === 'P' && $pcChoice === 'R' || $userChoice === 'S' && $pcChoice === 'P') {
    echo 'You chose : ' . $userChoice . PHP_EOL . 'PC chose : ' . $pcChoice . PHP_EOL . 'And Player WIN!';
} else {
    echo 'You chose : ' . $userChoice . PHP_EOL . 'PC chose : ' . $pcChoice . PHP_EOL . 'And PC WIN!';
}