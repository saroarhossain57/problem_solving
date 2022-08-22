<?php
// Add a Item at start position of an array

$startTime = microtime(true);
$startMemory = memory_get_usage();

$array = [1, 5, 4, 6];

function pushItemAtFirst($item, $array){
    $lenght = count($array);
    for($i = $lenght; $i >= 0; $i--){
        if($i === 0){
            $array[$i] = $item;
            break;
        }
        $itemIndex = $i - 1;
        $array[$i] = $array[$itemIndex];
    }

    return $array;
}

$updatedArray = pushItemAtFirst(3, $array);
print_r($updatedArray);


$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";