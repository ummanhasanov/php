<?php

class sumOfTwoNum {

    public function twoNum($a, $b) {
        if ( $a!=$b){
            return $sum=$a+$b;
        }else {
    } return $sum=$a*3;
    }
}

$sum = new sumOfTwoNum();

echo $sum->twoNum(20, 20);

