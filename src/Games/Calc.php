<?php

namespace BrainGames\Games\Calc;

use function BrainGames\runGame;

const DESCRIPTION = 'What is the result of the expression?';
const MIN_NUMBER = 1;
const MAX_NUMBER = 50;


function run(): void
{
    runGame(
        DESCRIPTION,
        function () {
            $a = rand(MIN_NUMBER, MAX_NUMBER);
            $b = rand(MIN_NUMBER, MAX_NUMBER);
            $operations = ['+', '-', '*'];
            $operation = $operations[array_rand($operations)];

            $answer = calculate($a, $b, $operation);

            return ["{$a} {$operation} {$b}", $answer];
        }
    );
}

function calculate(int $a, int $b, string $operation): int
{
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        default:
            throw new \InvalidArgumentException("Unknown operation: {$operation}");
    }
}
