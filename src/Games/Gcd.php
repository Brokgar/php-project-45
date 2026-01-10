<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\runGame;

function getGcd(int $a, int $b): int
{
    while ($b !== 0) {
        [$a, $b] = [$b, $a % $b];
    }

    return $a;
}

function run(): void
{
    runGame(
        'Find the greatest common divisor of given numbers.',
        function () {
            $a = rand(1, 100);
            $b = rand(1, 100);

            return ["{$a} {$b}", getGcd($a, $b)];
        }
    );
}
