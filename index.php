<?php
$array = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];

function bubbleSort($arr){
    for ($i = 0; $i < count($arr); $i++){
        for ($j = $i +1; $j < count($arr); $j++){
            if ($arr[$i] > $arr[$j]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }
    return $arr;
}
echo "<pre>";
print_r(bubbleSort($array));
