<?php

namespace BrainGames\Games\Calc;

use function BrainGames\runGame;

function run(): void
{
    runGame(
        'What is the result of the expression?',
        function () {
            $a = rand(1, 50);
            $b = rand(1, 50);
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
