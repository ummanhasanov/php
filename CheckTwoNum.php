<?php


class CheckTwoNum {
    public function CheckTwo($a,$b) {
        
        if($a+$b==30){
            return 'True';
        }elseif ($a==30 or  $b==30) {
            return "True";
        }else{
            return 'False';
        }
        
    }
}
$yoxla= new CheckTwoNum();
echo $yoxla->CheckTwo(3, 0);
       