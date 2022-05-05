<?php

class CheckWithin {

    public function ChecWith($num) {
        if ($num > 10 and $num < 100) {
            return 'True';
        } elseif ($num == 200){            
            return 'True';
        }else{
            return 'False';
        }
    }

}

$between = new CheckWithin();
echo $between->ChecWith(200);