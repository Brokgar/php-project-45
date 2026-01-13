<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\runGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;


function run(): void
{
    runGame(
        DESCRIPTION,
        function () {
            $a = rand(MIN_NUMBER, MAX_NUMBER);
            $b = rand(MIN_NUMBER, MAX_NUMBER);

            return ["{$a} {$b}", getGcd($a, $b)];
        }
    );
}

function getGcd(int $a, int $b): int
{
    while ($b !== 0) {
        [$a, $b] = [$b, $a % $b];
    }

    return $a;
}
