<?php

namespace BrainGames\Games\Prime;

use function BrainGames\runGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;


function run(): void
{
    runGame(
        DESCRIPTION,
        function () {
            $number = rand(MIN_NUMBER, MAX_NUMBER);
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
