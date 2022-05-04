<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
            <?php
//            $num = 5;
//
//            var_dump("10 $num");
//
////            if ($num) {
////                echo 'salam';
////            } else {
////                echo 'aleyke';
////            }
//            exit;
//
//            var_dump($num <= 77);
//            function changeArray(&$arr)
//            {
//                $arr[0] = 55;
//            }

            $myArr = [1, 3, 6, 8, 9, 12];

            foreach ($myArr as $key => $value) {
                if ($key == 1) {
                    $value = 63;
                }
            }

//            changeArray($myArr);

            var_dump($myArr);

            ?>
        </h1>
    </body>
</html>
