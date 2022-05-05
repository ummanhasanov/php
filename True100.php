<?php

class True100 {

    public function trueFor100($a, $b) {
        if (100 - $a < 100 - $b) {
            return $a . "100-e yaxindir";
        } elseif (100 - $b < 100 - $a) {
            return $b . " 100-e yaxindir";
        }return 0;
    }

    public function Arange20_30($a, $b) {
        if ($a <= 30 && $a >= 20 || $b <= 30 && $b >= 20) {
            return true;
        }
        return 0;
    }

    public function lastNumEqual($a, $b) {
        if (abs($a % 10) == abs($b % 10)) {
            return true;
        }
        return false;
    }

    public function Array5and6($arr) {
        $array = 0;
        for ($i = 0; $i < sizeof($arr) - 1; $i++) {
            if (($arr[$i] == 5) && ($arr[$i + 1] == 5) || ($arr[$i + 1] == 6)) {
                $array++;
            }
        }
        return $array;
    }

}

$check = new True100();
//echo $check->trueFor100(6, 6);
//echo $check->Arange20_30(2, 18);
//echo $check->lastNumEqual(246, 236);
echo $check->Array5and6([21, 333, 5, 6, 55]);

