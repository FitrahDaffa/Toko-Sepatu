<?php
$saldo_awal=$_POST['saldo_awal'];
$bunga=$_POST['bunga'];
$bulan=$_POST['bulan'];
$saldo_akhir=$saldo_awal+($saldo_awal*$bunga)*$bulan;
echo "nasbah menabung $saldo_awal";
echo "tabungan saldo akhir selama $bulan adalah $saldo_akhir";