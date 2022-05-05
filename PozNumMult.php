<?php

class PozNumMult {

    public function numMult($num) {
        if ($num % 3 == 0 or $num % 7 == 0) {
            return $num . 'True';
        } else {
            return $num . 'False';
        }
    }

}

$check = new PozNumMult();
echo $check->within(49);

class PozNumMult {

    public function NumMult($num) {
        if ($num % 3 == 0 and $num % 7 == 0) { // hem 7,hem 3 bolunen
            return $num . 'True';
        } else {
            return $num . 'False';
        }
    }

}

$check = new PozNumMult();
echo $check->within(21);
