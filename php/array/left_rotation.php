<?php
// Add a Item at start position of an array

$startTime = microtime(true);
$startMemory = memory_get_usage();

function rotateLeft($d, $arr){
    for($i = 0; $i < $d; $i++){
        array_push($arr, $arr[0]);
        array_shift($arr);
    }
    return $arr;
}


$array = [ 1, 2, 3, 4, 5 ];

$outputArray = rotateLeft(2, $array);

print_r($outputArray);


$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";