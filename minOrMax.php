<?php

// PHP Program for above approach
 
// The function checks if the array elements
// are consecutive. If elements are consecutive,
// then returns true, else returns false
function areConsecutive($arr, $n)
{
    if ( $n < 1 ){
        return false;
    }
    // 1) Get the minimum element in array
    $min = getMin($arr, $n);
     
    // 2) Get the maximum element in array
    $max = getMax($arr, $n);
     
    // 3) $max - $min + 1 is equal to $n,
    // then only check all elements
    if ($max - $min + 1 == $n)
    {
         
        // Create a temp array to hold
        // visited flag of all elements.
        $visited = array();
        for ($i = 0; $i < $n; $i++)
        {
            $visited[$i] = false;
        }
        for ($i = 0; $i < $n; $i++)
        {
            // If we see an element again,
            // then return false
            if ( $visited[$arr[$i] - $min] != false )
            {return false;}
     
            // If visited first time, then mark
            // the element as visited
            $visited[$arr[$i] - $min] = true;
        }
     
        // If all elements occur once,
        // then return true
        return true;
    }
     
    return false; // if ($max - $min + 1 != $n)
}
 
// UTILITY FUNCTIONS
function getMin($arr, $n)
{
    $min = $arr[0];
    for ($i = 1; $i < $n; $i++){
        if ($arr[$i] < $min)
        {$min = $arr[$i];}
    return $min;
}
 
function getMax($arr, $n)
{
    $max = $arr[0];
    for ($i = 1; $i < $n; $i++){
        if ($arr[$i] > $max){
            $max = $arr[$i];
    return $max;
        }
}
 
// Driver Code
$arr = array(5, 4, 2, 3, 1, 6);
$n = count($arr);
if(areConsecutive($arr, $n) == true){
    echo "Array elements are consecutive ";
}else{
    echo "Array elements are not consecutive ";
}
// This code is contributed by rathbhupendra
