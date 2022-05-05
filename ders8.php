<?php

// SUM of Array
function sumOfArray($arr) {
    $sum=0;
    for ($i=0; $i < count($arr); $i++)
    {
        $sum = $sum +$arr[$i];
    }
    return $sum;
}
var_dump(sumOfArray([1,3,6,8,9,12]));