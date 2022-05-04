<?php

class Calc
{

    public function sumOfTwoNum($a, $b)
    {
        $sum = $a + $b;
        if ($a == $b) {
            $sum *= 3;
        }
        return $sum;
    }

    public function diffWith51($n)
    {
        $f = abs($n - 51);

        if ($n > 51) {
            return $f * 3;
        }
        return $f;
    }

    public function check30($a, $b)
    {
        if ($a == 30 || $b == 30 || $a + $b == 30) {
            return true;
        } else {
            return false;
        }
    }
    
    

}

$check = new Calc();
//echo $check->sumOfTwoNum(5, 5);
//echo $check->diffWith51(53);
echo $check->check30(30, 10);
