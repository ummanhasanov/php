<?php

class Maximum {
    public function tapBoyukArrayDeyeri($yeniarray) {
        if(!empty($yeniarray)){
            $boyuk = $yeniarray[0];
            for ($i=1;$i<count($yeniarray);$i++){
                if($yeniarray[$i]>$boyuk){
                $boyuk=$yeniarray[$i];                    
            }
        }
        return $boyuk;
    }else{
    return 'Array bosdur';
    }
    }
}
$maximum = new Maximum();
$yeniarray=[2,12,25,13,26,55];
echo $maximum->tapBoyukArrayDeyeri($yeniarray);





















//class Maximum {
//
//    public function getMaxOfArray($newArray) {
//        if (!empty($newArray)) {
//            $max = $newArray[0];
//            for ($i = 1; $i < count($newArray); $i++) {
//                if ($newArray[$i]> $max) {
//                    $max = $newArray[$i];
//                }
//            }
//            return $max;
//        } else {
//            return 'Empty!';
//        }
//    }
//
//}
//
//$maximum = new Maximum(); 
//$myArray = [21, 12, 25, 35, 50]; //yoxladigim array
//echo $maximum->getMaxOfArray($myArray); //classa sorudugum soru

