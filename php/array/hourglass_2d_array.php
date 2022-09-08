<?php
// Add a Item at start position of an array

$startTime = microtime(true);
$startMemory = memory_get_usage();

function hourglassSum($arr){
    $max_sum = PHP_INT_MIN;
    for($i = 0; $i < (count($arr) - 2); $i++){
        for($j = 0; $j < (count($arr[0]) - 2); $j++){
            $sum = $arr[$i][$j] + $arr[$i][$j + 1] + $arr[$i][$j + 2]
                    + $arr[$i + 1][$j + 1]
                    + $arr[$i + 2][$j] + $arr[$i + 2][$j + 1] + $arr[$i + 2][$j + 2];
            $max_sum = max($max_sum, $sum);
        }
    }
    return $max_sum;
}


$array = [
    [ -9, -9, -9, 1, 1, 1 ],
    [ 0, -9,  0, 4, 3, 2 ],
    [ -9, -9, -9, 1, 2, 3 ],
    [ 0, 0, 8, 6, 6, 0 ],
    [ 0, 0, 0, -2, 0, 0 ],
    [ 0, 0, 1, 2, 4, 0 ]
];

echo hourglassSum($array) . "\n";



$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";