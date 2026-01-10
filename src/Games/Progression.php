<?php

namespace BrainGames\Games\Progression;

use function BrainGames\runGame;

function run(): void
{
    runGame(
        'What number is missing in the progression?',
        function () {
            $length = rand(5, 10);
            $start = rand(1, 50);
            $step = rand(2, 10);

            $progression = [];
            for ($i = 0; $i < $length; $i++) {
                $progression[] = $start + $i * $step;
            }

            $hiddenIndex = rand(0, $length - 1);
            $answer = $progression[$hiddenIndex];
            $progression[$hiddenIndex] = '..';

            return [implode(' ', $progression), $answer];
        }
    );
}
