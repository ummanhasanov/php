<?php

class TrueOrFalse
{

    public function trueFor100($a, $b)
    {
        if (abs(100 - $a) < abs(100 - $b)) {
            return $a . " 100-e yaxindir";
        } elseif (abs(100 - $b) < abs(100 - $a)) {            //hazir
            return $b . " 100-e yaxindir";
        } else {
            return 0;
        }
    }

    public function arange20_30($a, $b)
    {
        if ($a <= 30 && $a >= 20 && $b <= 30 && $b >= 20) {
            return $this->getMax($a, $b);
            // hazir
//            return max($a, $b);               
        }
        return 0;
    }

    private function getMax($a, $b)
    {
        if ($a > $b) {
            return $a;
        } else {
            return $b;
        }
    }

    public function lastNumEqual($a, $b)
    {
        if ($a % 10 == $b % 10) {
            return true;                           //hazir
        }
        return false;
    }

    public function arrayTwo5and6($arr)
    {
        $count = 0;
        for ($i = 0; $i < count($arr) - 1; $i++) {
//            if ($arr[$i] == 5 && $arr[$i + 1] == 5 || $arr[$i] == 5 && $arr[$i + 1] == 6) {
//                $count++;
//            }

//            more optimistic          
            if ($arr[$i] == 5 && ($arr[$i + 1] == 5 || $arr[$i + 1] == 6)) {
                $count++;
            }
        }
        return $count;
    }

    public function check123($arr)
    {

        for ($i = 0; $i < count($arr) - 2; $i++) {
            if ($arr[$i] == 1 && $arr[$i + 1] == 2 && $arr[$i + 2] == 3) {
                return true;
            }
        }
        return false;
    }

}

$check = new TrueOrFalse();
//echo $check->trueFor100(98, 25);
//echo $check->arange20_30(219, 28);
//echo $check->lastNumEqual(246, 6);
echo $check->arrayTwo5and6([78, 5, 6, 5, 5, 5, 5]);
//var_dump($check->check123($arr = [1, 1, 2, 3, 2]));
