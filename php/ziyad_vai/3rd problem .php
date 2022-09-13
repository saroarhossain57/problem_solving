<?php


function sort_string($str, $order = 'asc'){
    $str_array = str_split($str);
    for ($i = 0; $i < count($str_array); $i++) {
        for ($j = 0; $j < count($str_array); $j++) {
            if($order === 'asc'){
                if (strtolower($str_array[$j]) > strtolower($str_array[$i])) {
                    $temp_char = $str_array[$i];
                    $str_array[$i] = $str_array[$j];
                    $str_array[$j] = $temp_char;
                }
            } elseif($order === 'desc'){
                if (strtolower($str_array[$j]) < strtolower($str_array[$i])) {
                    $temp_char = $str_array[$i];
                    $str_array[$i] = $str_array[$j];
                    $str_array[$j] = $temp_char;
                }
            }
        }
    }

    return join('', $str_array);
}

$str_1 = 'dhiwamoxs';
echo sort_string($str_1, 'asc') . "\n";

$str_2 = 'Gudebjgyt';
echo sort_string($str_2, 'desc') . "\n";




