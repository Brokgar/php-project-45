<?php

namespace BrainGames\Engine;


function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    return abs($a);
}

function makeArray(): array
{
    $numbers  = array();
    $start    = rand(1, 60);
    $step     = rand(1, 5);
    $sequence = rand(5, 10);

    for ($index = 1; $index < $sequence; $index++)
    {
        $currentElement = $start + $index * $step;
        $numbers[] = $currentElement;
    }

    return $numbers;
}

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    if ($number === 2) {
        return true;
    }

    if ($number % 2 === 0) {
        return false;
    }

    $limit = (int) sqrt($number);

    for ($i = 3; $i <= $limit; $i += 2) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}