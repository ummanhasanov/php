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
        if($a<=30 && $a>=20 || $b<=30 && $b>=20  ){
            return true;
        } 
        return 0;
    }
    
    public function lastNumEqual($a,$b) {
        if(abs($a % 10) == abs($b % 10)){
            return true;
        }
        return false;
    }
}
$check = new True100();
//echo $check->trueFor100(6, 6);
//echo $check->Arange20_30(2, 18);
//echo $check->lastNumEqual(246, 236);




