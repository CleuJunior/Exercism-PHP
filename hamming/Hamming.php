<?php

/*
This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
convenience to get you started writing code faster.

Remove this comment before submitting your exercise.
*/

function distance(string $strandA, string $strandB) : int
{

    if(strlen($strandA) != strlen($strandB))
        throw new InvalidArgumentException('DNA strands must be of equal length.');

    $diff = 0;

    for ($index=0; $index < strlen($strandA); $index++) { if($strandA[$index] != $strandB[$index]) $diff++; }

    return $diff;

}