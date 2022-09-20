<?php

function str_to_char_array(string $str): array{

    // str_split the string charecters and make it as an array
    $char_arr = str_split($str);

    // Create a loop to go through each charecter of the string
    $array_with_count = [];
    for($i = 0; $i < count($char_arr); $i++){

        if(!array_key_exists($char_arr[$i], $output_arr)){
            $array_with_count[$char_arr[$i]] = 1;
        } else {
            $array_with_count[$char_arr[$i]]++;
        }

    }

    // First check if the char if exists in the output array.
        // - if exists then just update the count of the item in the output array
        // - If not exits then put the char in the sorted position with count 1


    // Finally Return the array
    return $array_with_count;
}


print_r(str_to_char_array('collected'));



