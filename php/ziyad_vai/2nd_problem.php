<?php

function str_to_char_array(string $str): array{

    // str_split the string charecters and make it as an array
    $char_arr = str_split($str);

    // Create a loop to go through each charecter of the string
    $array_with_count = [];
    for($i = 0; $i < count($char_arr); $i++){

        var_dump($char_arr[$i]);

        // First check if the char if exists in the output array.
        if(array_key_exists($char_arr[$i], $array_with_count)){
            // - if exists then just update the count of the item in the output array
            $array_with_count[$char_arr[$i]]++;
        } elseif(empty($array_with_count)){
            $array_with_count[$char_arr[$i]] = 1;
        } else {
            // - If not exits then put the char in the sorted position with count 1
            $new_output_array = [];
            // Go through the output array
            foreach( $array_with_count as $char => $count ){

                var_dump($char);
                var_dump($char_arr[$i]);

                if($char > $char_arr[$i]){
                    // The newly added item is smaller then the current checking
                    $matched_item_found = false;
                    foreach($array_with_count as $char_inner => $count_inner){

                        if( $char_inner === $char ){
                            $temp_index = $char_inner;
                            $temp_count = $count_inner;

                            $new_output_array[$char_arr[$i]] = 1;
                            $new_output_array[$temp_index] = $temp_count;
                            $matched_item_found = true;
                            continue;
                        } elseif($matched_item_found){
                            $new_output_array[$char_inner] = $count_inner;
                        }

                    }
                } 

                $new_output_array[$char] = 1;

                var_dump($new_output_array);
            }


            return $new_output_array;
        }

    }

    // Finally Return the array
    return $array_with_count;
}


print_r(str_to_char_array('collected'));



