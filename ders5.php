<?php

// PRODUCT of Array

function productOfArray($arr) {
    $pro = 1;
    for ($i = 0; $i < count($arr); $i++) {
        $pro = $pro * $arr[$i];
    }
    return $pro;
}

var_dump(productOfArray([1, 3, 6, 8, 9, 12]));

