<?php

namespace BrainGames\Games\Progression;

use function BrainGames\runGame;

const DESCRIPTION = 'What number is missing in the progression?';
const MIN_LENGTH = 5;
const MAX_LENGTH = 10;
const MIN_START = 1;
const MAX_START = 50;
const MIN_STEP = 2;
const MAX_STEP = 10;


function run(): void
{
    runGame(
        'What number is missing in the progression?',
        function () {
            $length = rand(MIN_LENGTH, MAX_LENGTH);
            $start = rand(MIN_START, MAX_START);
            $step = rand(MIN_STEP, MAX_STEP);

            $progression = generateProgression($start, $step, $length);
            $hiddenIndex = rand(0, $length - 1);

            return makeQuestion($progression, $hiddenIndex);
        }
    );
}

function generateProgression(int $start, int $step, int $length): array
{
    $progression = [];

    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }

    return $progression;
}

function makeQuestion(array $progression, int $hiddenIndex): array
{
    $answer = $progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';

    return [implode(' ', $progression), $answer];
}
