<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

const ROUND_NUMBER = 3;

function runGame(string $description, callable $getRoundData): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);

    line($description);

    for ($i = 0; $i < ROUND_NUMBER; $i++) {
        [$question, $correctAnswer] = $getRoundData();

        line('Question: %s', $question);
        $answer = prompt('Your answer');

        if ($answer !== (string) $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }

        line('Correct!');
    }

    line('Congratulations, %s!', $name);
}
