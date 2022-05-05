<?php

//$arr=[[2,22,35,'admin','user'],
//     [25,12,65,'amin','ebay',['we','our']],
//     [15,32,85,'cola','face']
//     ];
//     echo $arr[1][5][1];

$arr=[[2,22,35,'admin','user'],
     [25,12,65,'amin','our'],
     [15,32,85,'cola','face']
     ];
 
for($i=0; $i<count($arr); $i++)  {
    for ($j=0;$j<count ($arr[$i]);$j++){
        echo $arr[$i][$j] . '-';
    }
    echo '<br>';
}



//for ($i = 0; $i < count($arr); $i++) {
//    for ($j = 0; $j < count($arr[$i]); $j++) {
//        for ($k = 0; $k < count($arr[$j]); $k++) {
//            echo $arr[$i][$j][$k] . '-';
//        }
//    }
//    echo '<br>';
//}