<?php

class EvenOrOdd
{

    public function checkEvenOrOdd($num)
    {
        if ($num % 2 == 0) {
            return "Even";
        } else {
            return "Odd";
        }
    }

}

$ad = new EvenOrOdd();
echo $ad->checkEvenOrOdd(12);
