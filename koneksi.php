<?php
define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','db_dealermotor');
$koneksi=myqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DS_DATABASE);
/*IF ($koneksi) {
    echo "koneksi berhasil";
    mysqli_close($koneksi);
}else{
    die("Koneksi gagal: ", mysqli_connect_error());
}*/