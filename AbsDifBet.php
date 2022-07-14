<?php

class AbsDifBet {

    public function DifBet($n, $a) {
        $f =$a-$n;
        if ($n < $a) {
            return $f;
        } else {
            return abs($f*5);
        }
    }

}

$numune = new AbsDifBet();
echo $numune->DifBet(75, 51);
