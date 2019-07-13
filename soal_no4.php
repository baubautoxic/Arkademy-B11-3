<?php

function buyEgg($tanggal, $uang){
    $bonus = 0;
    $jmlBeli = $uang / 2000;
    $jmlBeli = floor($jmlBeli);
    
    for ($i = 2; $i <= $tanggal-1; $i++){
        if ($tanggal % $i != 0){
            $jmlLusin = $jmlBeli / 12;
            $bonus = floor($jmlLusin);

            if ($tanggal % 2 != 0){
                $jmlKodi = $jmlBeli / 20;
                $bonus = $bonus + floor($jmlKodi);
            }

            if ($tanggal % 5 == 0){
                if ($bonus % 2 == 0){
                    $bonus = $bonus * 10;
                } else {
                    $bonus = $bonus * 5;
                }
            } echo $jmlBeli + $bonus;
            die();
        }
    }

     
    if ($tanggal % 2 != 0){
        $jmlKodi = $jmlBeli / 20;
        $bonus = $bonus + floor($jmlKodi);
    }
    
    if ($tanggal % 5 == 0){
        if ($bonus % 2 == 0){
            $bonus = $bonus * 10;
        } else {
            $bonus = $bonus * 5;
        }
    }    
    echo ($jmlBeli + $bonus);
}

buyEgg(25, 50000);
?>