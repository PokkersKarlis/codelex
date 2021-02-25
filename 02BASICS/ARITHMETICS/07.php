<?php

//Codelex trainig courses
//Section "arithmetics" - exercise "07"
//Author - K.Pokkers

$time = 10;
$acceleration = -9.81;
$initialVelocity = 0;
$initialPosition = 0;

function getLastPosition(float $time, float $acceleration, float $initialVelocity, float $initialPosition): float
{
    return 0.5 * ($acceleration * ($time ** 2)) + $initialVelocity * $time + $initialPosition;
}

echo getLastPosition($time, $acceleration, $initialVelocity, $initialPosition) . 'm.' . PHP_EOL;

echo PHP_EOL;
echo 'Second option with array' . PHP_EOL;
echo PHP_EOL;

$data = [
    'time' => 10,
    'acceleration' => -9.81,
    'initialVelocity' => 0,
    'initialPosition' => 0
];

$lastPosition = 0.5 * ($data['acceleration'] * ($data['time'] ** 2)) + $data['initialVelocity'] * $data['time'] + $data['initialPosition'];

echo $lastPosition . 'm.';