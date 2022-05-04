<?php

class Maximum
{

    public function getMaxOfAray($newArray)
    {
        if (!empty($newArray)) {
            $max = $newArray[0];
            for ($i = 1; $i < count($newArray); $i++) {
                if ($newArray[$i] > $max) {
                    $max = $newArray[$i];
                }
            }

            return $max;
        } else {
            return 'Empty array!';
        }
    }

}

$maximum = new Maximum();
$myArray = [78, 25, 102];
echo $maximum->getMaxOfAray($myArray);
