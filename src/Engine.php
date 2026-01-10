<?php

namespace BrainGames\Engine;

use function BrainGames\Engine\welcomeUser;
use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

/**
 * Запускает игру
 *
 * @param string $description Описание игры
 * @param array  $rounds      Массив раундов вида:
 *                            [
 *                              ['question' => '...', 'answer' => '...'],
 *                              ...
 *                            ]
 */
function run(string $description, array $rounds): void
{
    $name = welcomeUser();

    line($description);

    foreach ($rounds as $round) {
        line('Question: %s', $round['question']);
        $answer = prompt('Your answer');

        if ($answer !== (string) $round['answer']) {
            line(
                "'%s' is wrong answer ;(. Correct answer was '%s'.",
                $answer,
                $round['answer']
            );
            line("Let's try again, %s!", $name);
            return;
        }

        line('Correct!');
    }

    line('Congratulations, %s!', $name);
}

function welcomeUser(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}


function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    return abs($a);
}

function makeArray(): array
{
    $numbers  = array();
    $start    = rand(1, 20);
    $step     = rand(1, 10);
    $sequence = 10;

    for ($index = 1; $index < $sequence; $index++) {
        $currentElement = $start + $index * $step;
        $numbers[] = $currentElement;
    }

    return $numbers;
}

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    if ($number === 2) {
        return true;
    }

    if ($number % 2 === 0) {
        return false;
    }

    $limit = (int) sqrt($number);

    for ($i = 3; $i <= $limit; $i += 2) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
