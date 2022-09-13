<?php

function str_to_char_array($str){
    $char_arr = str_split($str);

    print_r($char_arr);
    $array_with_count = [];
    for($i = 0; $i < count($char_arr); $i++){
        if(!array_key_exists($char_arr[$i], $output_arr)){
            $array_with_count[$char_arr[$i]] = 1;
        } else {
            $array_with_count[$char_arr[$i]]++;
        }
    }

    foreach($array_with_count as $char => $count){
        
    }

    return $array_with_count;
}


print_r(str_to_char_array('collected'));