<?php

namespace BrainGames\Games\Even;

use function BrainGames\runGame;

function run(): void
{
    runGame(
        'Answer "yes" if the number is even, otherwise answer "no".',
        function () {
            $number = rand(1, 100);
            $correctAnswer = isEven($number) ? 'yes' : 'no';

            return [$number, $correctAnswer];
        }
    );
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
