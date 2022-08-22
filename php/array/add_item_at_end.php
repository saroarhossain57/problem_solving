<?php
// Add a Item at start position of an array

$startTime = microtime(true);
$startMemory = memory_get_usage();

$array = [1, 5, 4, 6];

function pushItemAtEnd($item, $array){
    $lenght = count($array);
    for($i = 0; $i <= $lenght; $i++){
        if($i === $lenght){
            $array[$i] = $item;
            break;
        }
    }

    return $array;
}

$updatedArray = pushItemAtEnd(3, $array);
print_r($updatedArray);


$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";