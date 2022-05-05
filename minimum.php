<?php


class minimum {
    
public function tapKicikArrayDeyeri($yeniarray) {
        if(!empty($yeniarray)){
            $kicik = $yeniarray[0];
            for ($i=1;$i<count($yeniarray);$i++){
                if($yeniarray[$i]<$kicik){
                $kicik=$yeniarray[$i];                    
            }
        }
        return $kicik;
    }else{
    return 'Array bosdur';
    }
    }
}
$minimum = new Minimum();
$yeniarray=[2,12,25,13,-12,55];
echo $minimum->tapKicikArrayDeyeri($yeniarray);
