<?php

//$arr = [1, 3, 6, 8, 9, 12];
//$arr1 = [];
//
//foreach ($arr as $key => $value) {
//    $arr1[$key] = $value ** 2;
//}
//    var_dump($arr1);


  
      // SQUARE (kok altina salmaq) and create new array

      function squareOfArray($arr) {
    $sqr1 = [];
    for ($i = 0; $i < count($arr); $i++) {
        foreach ($arr as $key => $value) {
            $sqr1[$key] = sqrt($value);
        }
    }
    return $sqr1;
}

var_dump(squareOfArray([4, 9, 16, 25, 36, 49]));

