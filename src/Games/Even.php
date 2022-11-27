<?php

namespace Hexlet\Code\Even;

use const Hexlet\Code\Engine\STEPS;

function gameBuilder(): array
{
    $title = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $expressions = [];
    $correctAnswers = [];
    for ($i = 0; $i < STEPS; $i++) {
        $digit = rand(1, 99);
        $expressions[$i] = $digit;
        $correctAnswers[$i] = $digit % 2 === 0 ? 'yes' : 'no';
    }
    return [$title, $expressions, $correctAnswers];
}
