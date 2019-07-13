<?php
    function kataxfrasa($kata, $frasa)
{
    $jmlStrkata = strlen($kata);
    $jmlStrfrasa = strlen($frasa);
	$jlmkatafrasa = (substr_count($kata, $frasa)*3);

        echo "Ditemukan ".$jlmkatafrasa;
}
kataxfrasa("banananana","nana");
?>