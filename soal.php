<?php
$saldo_awal = 1000000;
$bunga = 3/100;
$bulan = 11;
$saldo_akhir = $saldo_awal+($saldo_awal*$bunga)*$bulan;
echo " jadi saldo akhir seorang nasabah dengan menabung 1jt selama 11 bulan dengan bunga 3% adalah".$saldo_akhir;