<?php
function kataxfrasa($kata,$frasa){
        $kata1 = $kata;
        $kata2= strrev($kata1);
        $cari = $frasa;
        $jumlah_kata = 0;
        $arr_kata1 = str_split($kata1);
        $arr_kata2 = str_split($kata2);
        $arr_cari = str_split($cari);
        $jml_kata = count($arr_kata2);
        $jml_cari = count($arr_cari);
        for ($i = 0; $i <= ($jml_kata - $jml_cari); $i++) {
            $frasa = "";
            for ($j = $i; $j < ($i + $jml_cari); $j++) {
                $frasa .= $arr_kata1[$j];
            }
            if ($frasa == $cari) {
                $jumlah_kata++;
            }
        }
        
        for ($i = 0; $i <= ($jml_kata - $jml_cari); $i++) {
            $frasa = "";
            for ($j = $i; $j < ($i + $jml_cari); $j++) {
                $frasa .= $arr_kata2[$j];
            }
            if ($frasa == $cari) {
                $jumlah_kata++;
            }
        }
        echo "ditemukan " . $jumlah_kata . " kali";
}
kataxfrasa('banananana','nana');
?>
