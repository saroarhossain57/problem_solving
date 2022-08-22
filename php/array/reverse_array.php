<?php

// Problem Link
// https://www.hackerrank.com/challenges/arrays-ds/problem?isFullScreen=true


$startTime = microtime(true);
$startMemory = memory_get_usage();


function reverseArray($a) {
    $arrayLength = count($a) - 1;
    for($i = 0; $i < $arrayLength; $i++){
        $start = $a[$i];
        $a[$i] = $a[$arrayLength];
        $a[$arrayLength] = $start;
        $arrayLength--;
    }

    return $a;
}


//calling function and giving output here
var_dump(reverseArray([1, 4, 3, 2]));

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";