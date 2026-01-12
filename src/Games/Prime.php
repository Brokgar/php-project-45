<?php

namespace BrainGames\Games\Prime;

use function BrainGames\runGame;

function run(): void
{
    runGame(
        'Answer "yes" if given number is prime. Otherwise answer "no".',
        function () {
            $number = rand(1, 100);
            $answer = isPrime($number) ? 'yes' : 'no';

            return [$number, $answer];
        }
    );
}

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
