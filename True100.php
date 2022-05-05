<?php

class True100 {

    public function trueFor100($a, $b) {
        if (100 - $a < 100 - $b) {
            return $a . "100-e yaxindir";
        } elseif (100 - $b < 100 - $a) {
            return $b . " 100-e yaxindir";
        }return 0;
    }

    public function arange20_30($a, $b) {
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

    public function arrayTwo5and6($arr) {
        $count = 0;
        for ($i = 0; $i < sizeof($arr) - 1; $i++) {
            if ($arr[$i] == 5 && $arr[$i + 1] == 5 || $arr[$i + 1] == 6) {
                $count++;
            }
        }
        return $count;
    }
  public function check123($arr) {
       
        for ($i = 0; $i < sizeof($arr) - 1; $i++) {
            if ($arr[$i] == 1 && $arr[$i + 1] == 2 && $arr[$i + 2] == 3) {
                return true;
            }
        }
        return false;
    }
}

$check = new True100();
//echo $check->trueFor100(6, 6);
//echo $check->arange20_30(2, 18);
//echo $check->lastNumEqual(246, 236);
//echo $check->arrayTwo5and6([6, 16, 15, 5,5]);
//var_dump ($check->check123($arr=[1, 1, 2, 31, 2]));
