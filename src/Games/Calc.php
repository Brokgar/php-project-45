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

            switch ($operation) {
                case '+':
                    $answer = $a + $b;
                    break;
                case '-':
                    $answer = $a - $b;
                    break;
                default:
                    $answer = $a * $b;
            }

            return ["{$a} {$operation} {$b}", $answer];
        }
    );
}
