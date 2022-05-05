<?php

// Additin (toplamaq) and create new array 

//$a = [10, 3, 45, 98, 4, 7, 56, 23, 3, 1];
//$b = [];
//
//foreach ($a as $key => $value) {
//    $b[$key] = 10 + $value;
//}
//
//var_dump($b);


function additionOfArray($arr) {


    foreach ($arr as $key => $value) {
        $add[$key] = 10 + $value;
    }
    return $add;
}

var_dump(additionOfArray([4, 9, 16, 25, 36, 49]));

