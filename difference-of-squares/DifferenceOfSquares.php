<?php

declare(strict_types=1);

function squareOfSum(int $max): int
{
    $sum_total_square = 0;

    for ($index = 1; $index <= $max; $index++) { $sum_total_square += $index; }

    return pow($sum_total_square, 2);
}

function sumOfSquares(int $max): int
{
    $sum_total_square = 0;

    for ($index = 1; $index <= $max; $index++) { $sum_total_square += pow($index, 2); }

    return $sum_total_square;
}

function difference(int $max): int
{
    return squareOfSum($max)-sumOfSquares($max);
}
