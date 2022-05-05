<?php

class evenOrOdd {

    public function tekYaCut($eded) {
        if ($eded % 2 == 0) {
            return 'Cut';
        } else {
            return 'Tek';
        }
    }

}

$numune = new evenOrOdd();
echo $numune->tekYaCut(22);

//class evenOrOdd {
//
//    public function checkEvenOrOdd($num) {
//        if ($num % 2 == 0) {
//            return 'Even';
//        } else {
//            return 'Odd';
//        }
//    }
//
//}
//
//$ad = new evenOrOdd();
//echo $ad->checkEvenOrOdd(222);

//class evenOrOdd {
//
//    public function checkEvenOrOdd($num) {
//        if ($num % 2 == 0){
//            return 'Even';
//        }else {
//            return'Odd';
//        }
//    }
//
//}
//$check= new evenOrOdd();
//echo $check->checkEvenOrOdd(14);
        
//class evenOrOdd {
//    
//    public function checkEvenOrOdd($num) {
//        if ($num%2==0){
//            return 'Even';
//        }else {
//            return 'Odd';
//        }
//    }
//}
//$yoxla = new evenOrOdd();
//echo $yoxla->checkEvenOrOdd(21);

//class evenOrOdd {
//    public function checkEvenOrOdd($num) {
//        if ($num%2==0){
//            return 'Even';
//        }else {
//            return 'Odd';
//        }
//    }
//}
//$bu = new evenOrOdd();
//echo $bu->checkEvenOrOdd(223);



