<?php

$input_arr = [
    [ 2, 5, 6 ],
    [ 8, 15, 6 ],
    [ 8, 3, -6 ]
];

function diagonalDifference(array $array): int | bool {
    // Loop through upper array and inside loop through lower array
    $sum1 = 0;
    $sum2 = 0;
    $array_len = count($array);
    for($i = 0; $i < count($array); $i++){
        // Calculate diagonal 1
        $sum1 += $array[$i][$i];
        // Calculate diagonal 2
        $sum2 += $array[$i][$array_len - 1];
        $array_len--;
    }

    return abs($sum1 - $sum2);
}

echo diagonalDifference($input_arr);