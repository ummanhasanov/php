<?php


function sumOfArray($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        $arr1 = $arr + [$i];
    }
    return $arr1;
}

var_dump(sumOfArray([2, 5, 9, 12, 15]));

echo '<br>';

function productOfArray($arr) {
    $arr1 = 1;
    for ($i = 0; $i < count($arr); $i++) {
        $arr1 = $arr1 * $arr[$i];
    }
    return $arr1;
}

var_dump(productOfArray([2, 5, 5, 12, 15]));

echo '<br>';

function powerOfArray($arr) {
    for ($i = 0;
            $i < count($arr);
            $i++) {
        foreach ($arr as $key => $value) {
            $arr1[$key] = $value ** 2;
        }
    }
    return $arr1;
}

var_dump(powerOfArray([2, 4, 6, 8, 10]));

echo '<br>';
              
function squareOfArray($arr) {
    $sqr = [];
    for ($i = 0; $i < count($arr); $i++){
        foreach ($arr as $key => $value) {
            $sqr[$key] = sqrt($value);
        }
    }
    return $sqr;
}

var_dump(squareOfArray([16, 25, 36, 49, 64, 81, 100]));

