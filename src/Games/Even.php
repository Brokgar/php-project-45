<?php

namespace BrainGames\Games\Even;

use function BrainGames\runGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".'; 
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function run(): void
{
    runGame(
        DESCRIPTION,
        function () {
            $number = rand(MIN_NUMBER, MAX_NUMBER);
            $correctAnswer = isEven($number) ? 'yes' : 'no';

            return [$number, $correctAnswer];
        }
    );
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
