<?php

    // power (quvvete yukseltmek)

//$arr = [1, 3, 6, 8, 9, 12];
//$arr1 = [];
//
//foreach ($arr as $key => $value) {
//    $arr1[$key] = $value ** 2;
//}
//    var_dump($arr1);
    
    // power (quvvete yukseltmek)
 
function powerOfArray($arr) {
    $pow1 = [];
    for ($i=0; $i < count($arr); $i++)
    {
        foreach ($arr as $key => $value) {
            $pow1[$key] = $value **2;
        }
    }
    return $pow1;
}
var_dump(powerOfArray([1,3,6,8,9,12]));            